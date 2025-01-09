<?php declare(strict_types=1);

namespace NetworkN;

use function is_readable;
use function filemtime;
use function file_get_contents;
use function file_put_contents;
use function stream_context_create;
use function json_decode;
use function is_array;

final class SteamApi
{
    public const CACHE_FILE = './steam-api.cache.json';
    public const CACHE_LIFETIME = 60;

    public const API_URL = 'https://api.steampowered.com/ISteamApps/GetAppList/v2/';
    public const API_TIMEOUT = 10;

    /**
     * Returns a list of all public apps currently registered on Steam.
     *
     * @see https://partner.steamgames.com/doc/webapi/isteamapps
     *
     * @return array{appid: int, name: string}[]
     */
    public static function fetchApps(): array
    {
        return self::isCacheValid()
            ? self::fetchCache()
            : self::fetchRemote();
    }

    /**
     * @return array{appid: int, name: string}[]
     */
    private static function fetchRemote(): array
    {
        $context = stream_context_create([
            'http' => [
                'timeout' => self::API_TIMEOUT
            ]
        ]);

        $apiResponse = file_get_contents(self::API_URL, context: $context);

        // Fallback to cache if the API call encounters a problem
        if ($apiResponse === false) {
            return self::fetchCache();
        }

        $decodedResponse = json_decode($apiResponse, true);

        if (!isset($decodedResponse['applist']['apps'])) {
            return self::fetchCache();
        }

        self::writeCache($apiResponse);

        return $decodedResponse['applist']['apps'];
    }

    /**
     * @return array{appid: int, name: string}[]
     */
    private static function fetchCache(): array
    {
        $cached = file_get_contents(self::CACHE_FILE) ?: '';
        $cached = json_decode($cached, true);

        if (!is_array($cached) || !isset($cached['applist']['apps'])) {
            return [];
        }

        return $cached['applist']['apps'];
    }

    private static function writeCache(string $apiResponse): void
    {
        file_put_contents(self::CACHE_FILE, $apiResponse);
    }

    /**
     * Determine if the cache file exists and is still considered fresh.
     *
     * @return bool
     */
    private static function isCacheValid(): bool
    {
        return is_readable(self::CACHE_FILE)
            && (int)filemtime(self::CACHE_FILE) > (time() - self::CACHE_LIFETIME);
    }
}
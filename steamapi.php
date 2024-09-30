<?php


$steamData = file_get_contents('https://api.steampowered.com/ISteamApps/GetAppList/v2/');
$steamData = json_decode($steamData, true);
foreach ($steamData['applist']['apps'] as $app) {
    echo $app['appid'] . ' - ' . $app['name'] . '<br>'.PHP_EOL;
}
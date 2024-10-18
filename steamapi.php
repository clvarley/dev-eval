<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Test</title>

    <link rel="stylesheet" href="./dist/css/style.min.css">

    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        <?php echo file_get_contents('./dist/css/critical.min.css'); ?>
    </style>
</head>
<body>
    <div class="container">
    <?php

    $steamData = file_get_contents('https://api.steampowered.com/ISteamApps/GetAppList/v2/');
    $steamData = json_decode($steamData, true);
    foreach ($steamData['applist']['apps'] as $app) {
        echo $app['appid'] . ' - ' . $app['name'] . '<br>'.PHP_EOL;
    }

    ?>
    </div>
</body>
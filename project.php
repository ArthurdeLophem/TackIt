<?php
include_once("inc/navdefiner.inc.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <link rel="stylesheet" href="css/app.css"/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <title>project</title>
</head>
<body>
<?php include_once("inc/topnav.inc.php"); ?>
    
    <div style="height: 70vh; background-color: rgba(255,0,0,0.1); display: flex; justify-content: space-around">
        <div class="itemPicker h-100 d-flex flex-wrap justify-content-center align-content-start items" style="width: 25%; background-color: rgba(0,0,255,.1)">
            <div data-item-id="0" class="item inactive"></div>
            <div data-item-id="1" class="item inactive"></div>
            <div data-item-id="2" class="item inactive"></div>
            <div data-item-id="3" class="item inactive"></div>
            <div data-item-id="4" class="item inactive"></div>
            <div data-item-id="5" class="item inactive"></div>
            <div data-item-id="6" class="item inactive"></div>
            <div data-item-id="7" class="item inactive"></div>
            <div data-item-id="8" class="item inactive"></div>
            <div data-item-id="9" class="item inactive"></div>
        </div>

        <div id="map" class="h-100 d-inline-block" style="width: 60%;">

        </div>
    </div>
    <script src="./scripts/map.js"></script>
</body>
</html>
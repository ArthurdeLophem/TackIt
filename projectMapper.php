<?php
include_once("inc/navdefiner.inc.php");
?>

<!DOCTYPE html>
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
    <div class="map" style="height: 80vh; display: flex; justify-content: space-around; position: relative; top: 120px">
        <div class="shadow bg-white d-flex flex-column align-items-center" style="width: 20%; height: 80%; background-color: rgba(0,0,255,.1); border-radius: 10px;">
            <p class="my-3 mx-auto text-center"><strong>choose your item and drop it on the map</strong></p>
            <div class="d-flex flex-wrap justify-content-center align-content-start items">
                <img src="/css/images/items/boom.svg" data-item-type="boom" class="item inactive"></img>
                <img src="/css/images/items/bank.svg" data-item-type="bank" class="item inactive"></img>
                <img src="/css/images/items/fontein.svg" data-item-type="fontein" class="item inactive"></img>
                <img src="/css/images/items/straatlamp.svg" data-item-type="straatlamp" class="item inactive"></img>
                <img src="/css/images/items/struik.svg" data-item-type="struik" class="item inactive"></img>
            </div>
        </div>

        <div id="map" class="shadow h-100 d-inline-block" style="width: 55%; border: 5px solid white; border-radius: 10px;"></div>

        <div class="shadow bg-white d-flex flex-column align-items-center"  style="width: 12%; height: fit-content; background-color: rgba(0,0,255,.1); border-radius: 10px;">
            <div class="my-2">
                <a type="button" data-user-id="<?php echo $_SESSION['user']['id']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>" class="btn btn-primary saveBtn">save</a>
            </div>
            <div class="my-2">
                <a type="button" class="btn btn-outline-primary renderBtn">render</a>
            </div>
        </div>
        
    </div>

    <script src="./scripts/map.js"></script>
</body>
</html>
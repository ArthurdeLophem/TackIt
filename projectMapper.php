<?php
use tackit\core\Vereisten;

include_once("inc/navdefiner.inc.php");
require_once(__DIR__ . "/vendor/autoload.php");

$vereisten = Vereisten::getAll($_GET['projectId']);


?><!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("inc/header.inc.php"); ?>
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

    <div id="feedbackPanel" style="height: fit-content; display: flex; justify-content: space-around; position: relative; top: 70px"></div>
    <div class="map" style="height: 80vh; display: flex; justify-content: space-around; position: relative; top: 100px">
      
        <div class="d-flex flex-column" style="width: 15%; height: 80%">
            <div class="shadow bg-white d-flex justify-content-between align-items-center mb-2 p-2" style="height: 40px; background-color: rgba(0,0,255,.1); border-radius: 10px;">
                <p>search</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
            <div class="shadow bg-white d-flex flex-column align-items-center" style="height: 80%; background-color: rgba(0,0,255,.1); border-radius: 10px;">
                <p class="my-3 mx-auto text-center"><strong>drop je items op de map</strong></p>
                <div class="d-flex flex-wrap justify-content-center align-content-start items">
                    <img src="css/images/items/boom.svg" data-item-type="boom" class="item inactive"></img>
                    <img src="css/images/items/bank.svg" data-item-type="bank" class="item inactive"></img>
                    <img src="css/images/items/fontein.svg" data-item-type="fontein" class="item inactive"></img>
                    <img src="css/images/items/straatlamp.svg" data-item-type="straatlamp" class="item inactive"></img>
                    <img src="css/images/items/struik.svg" data-item-type="struik" class="item inactive"></img>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center" style="height: 20%; gap: 15px;">
                <div class="d-flex align-items-center justify-content-center" style="height: 50px; width: 65px; background-color: white; border-radius: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-counterclockwise blue" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                    </svg>
                </div>
                <div class="d-flex align-items-center justify-content-center" style="height: 50px; width: 65px; background-color: white; border-radius: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-clockwise blue" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                    </svg>
                </div>
            </div>
            <div class="bg-white d-flex align-items-center" style="align-self: center; height: 10%; width: 80%; background-color: rgba(0,0,255,.1); border-radius: 10px;">
                <p class=" m-auto text-center">budget: <strong>x</strong></p>
            </div>
        </div>

        <div id="map" class="shadow h-100 d-inline-block" style="width: 55%; border: 5px solid white; border-radius: 10px;"></div>

        <div class="d-flex flex-column align-items-center" style="width: 12%;">
            <div id="activityPanel" class="shadow bg-white d-flex flex-column align-items-center"  style="width: 100%; height: fit-content; background-color: rgba(0,0,255,.1); border-radius: 10px;">
                <div class="d-flex flex-column align-items-center">  
                    <div class="my-2">
                        <a type="button" data-user-id="<?php echo $_SESSION['user']['id']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>" class="btn btn-primary saveBtn d-flex flex-column align-items-center px-4 py-2">
                            <svg data-user-id="<?php echo $_SESSION['user']['id']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                            <path data-user-id="<?php echo $_SESSION['user']['id']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>" d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
                            </svg>
                            <strong data-user-id="<?php echo $_SESSION['user']['id']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>">save</strong>
                        </a>
                    </div>
                    <div class="my-2">
                        <a type="button" class="btn btn-outline-primary renderBtn d-flex flex-column align-items-center px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                            </svg>    
                            <strong>render</strong>
                        </a>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center mt-3"  style="width: 100%; height: fit-content; border-radius: 10px;">
                <div class="d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="my-2" style="width: 70%;">
                        <p style="text-align: center;">resterende tijd:</p>
                        <div class="btn btn-primary d-flex align-items-center justify-content-between px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg>
                            <strong>56 uur</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center"  style="width: 100%; height: fit-content; border-radius: 10px;">
                <div class="d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="my-2">
                        <div class="btn btn-outline-primary d-flex align-items-center px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill mr-2" viewBox="0 0 16 16">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                            </svg>    
                            <strong>comment toevoegen</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center"  style="width: 100%; height: fit-content; border-radius: 10px;">
                <div class="d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="my-2" style="width: 70%;">
                        <div class="btn btn-primary d-flex align-items-center justify-content-center px-4 py-2">
                            <strong>12% voltooid</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mapper-vereisten">
        <p>Vereisten</p>
        <ul>
            <?php foreach($vereisten as $vereist): ?>
                <li>
                    <p>0</p>
                    <p>/</p>
                    <p><?php echo $vereist['amount']; ?></p>
                    <p><?php echo $vereist['item']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script src="js/main.js"></script>
    <script src="./scripts/map.js"></script>
</body>
</html>
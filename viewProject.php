<?php
include_once("inc/navdefiner.inc.php");
require_once(__DIR__ . "/vendor/autoload.php");
use tackit\core\Votes;
use tackit\core\Burger;

if(isset($_GET['projectId']) && isset($_GET['userId'])){
    $userProjects = "set";
}else{
    $userProjects = "";
}

?>
<!DOCTYPE html>
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
    <?php if ($userProjects == null) : ?>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="container d-flex flex-column">
                <div class="mt-5 alert alert-danger" role="alert">
                    probleem met het vinden van de projecten probeer opnieuw
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="map d-flex flex-column justify-content-center align-items-center" style="height: 90vh; position: relative; top: 70px">
            <div data-user-id="<?php echo $_GET['userId']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>" id="map" class="shadow h-75 d-inline-block" style="width: 55%; border: 5px solid white; border-radius: 10px;"></div>  
            <div class="d-flex flex-row justify-content-center align-items-center w-100" style="gap: 10px;">
                <div class="my-2">
                    <a type="button" class="btn btn-outline-primary renderBtn d-flex flex-column align-items-center px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                        </svg>    
                        <strong>render</strong>
                    </a>
                </div>
                <div class="my-2 d-flex flex-row justify-content-between align-items-center bg-white w-50 px-4 py-2 h-75 rounded">
                    <p> <?php echo Burger::getUserById($_GET['userId'])['username']?></p>
                    <p>€4000 budget resterend</p>
                    <p> <?php echo Votes::getProjectVotes($_GET['userId']) ?> votes</p>
                </div>
            </div>     
        </div>
    <?php endif; ?>
    <script src="./scripts/drawmap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
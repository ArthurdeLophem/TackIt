<?php
include_once("inc/navdefiner.inc.php");

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
        <div class="map" style="height: 80vh; display: flex; justify-content: space-around; position: relative; top: 120px">
            <div data-user-id="<?php echo $_GET['userId']; ?>" data-project-id="<?php echo $_GET['projectId']; ?>" id="map" class="shadow h-100 d-inline-block" style="width: 55%; border: 5px solid white; border-radius: 10px;"></div>       
        </div>
    <?php endif; ?>
    <script src="./scripts/drawmap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
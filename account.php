<?php

include_once("inc/navdefiner.inc.php");

require_once(__DIR__ . "/vendor/autoload.php");
use tackit\core\Security;

Security::checkLoggedIn();


?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TackIt</title>
</head>
<body>
     
<?php include_once("inc/topnav.inc.php"); ?>    

<section id="navSection" class="d-inline-block">
    <?php include_once("inc/nav.inc.php"); ?>
</section>
<section class="account">
    <div>
        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654616603/Tackit_Assets/main_avatar_ypzdtl.png" alt="0">
        <h1>Kristien Iepers</h1>
        <h2>Personeel</h2>
    </div>
    <div>
        <p>Profielfoto</p>
        <div>
            <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654616603/Tackit_Assets/main_avatar_smoll_uts0k3.png" alt="0">
        </div>
        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
    </div>
    <div>
        <p>Locatie</p>
        <p>Beverenstraat 15</p>
        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
    </div>
    <div>
        <p>Email</p>
        <p>Kristien@gmail.com</p>
        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
    </div>
    <div>
        <p>Wachtwoord</p>
        <p>*************</p>
        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
    </div>
    <div>
        <p>Account verwijderen</p>
        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="H">
    </div>


</section>
<script src="js/main.js"></script>
</body>
</html>
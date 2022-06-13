<?php

include_once("inc/navdefiner.inc.php");

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
    <section class="settings-content">
        <h3>Instellingen</h3>
        <section class="settings-pannel">
            <form action="" method="POST">
                <div>
                    <p>Taal</p>
                    <p>Nederlands</p>
                    <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
                </div>
                <div>
                    <p>Stijl</p>
      
                        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609128/Tackit_Assets/Rectangle_106_jhcef5.png" alt="M">
                        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609125/Tackit_Assets/Rectangle_107_pxvajg.png" alt="M">
                 
                </div>
                <div>
                    <p>Logo</p>
                    <p>-default-</p>
                    <label for="settings-file">Uploaden<img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609118/Tackit_Assets/Vector_ibe3vt.png" alt="U"></label>
                    <input id="settings-file" type="file">
                </div>
                <input type="submit" value="Opslaan" class="formbtn_primarybtn">	
            </form>
        </section>
    </section>    

<script src="js/main.js"></script>
</body>
</html>
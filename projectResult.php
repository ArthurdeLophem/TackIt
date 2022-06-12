<?php

include_once("inc/navdefiner.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("inc/header.inc.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TackIt</title>
</head>
<body>
       
<?php include_once("inc/topnav.inc.php"); ?>

<section id="navSection" class="d-inline-block">
    <?php include_once("inc/nav.inc.php"); ?>

</section>

    <div class="container d-flex flex-column">       
        <div class="shadow p-3 my-5 bg-body rounded bg-image">
            <div
                style=" z-index: 0; height: 70%; width: 42%; background-image: url('./css/images/confetti-overlay.png'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px; position: absolute;">
            </div>
            <div class="align-self-end flex-column d-flex ">
        
                <div class="rounded shadow-1-strong align-self-center mt-5 mb-2"
                    style="height: 250px; width: 50%; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                </div>

                <div class="align-self-center mb-5" style="z-index: 1;"><h1>project bloemenpark</h1></div>

                <li class="d-flex flex-column justify-content-center align-items-center" style="border-radius: 0; z-index: 1;">
                    <h2> <strong> winnaar </strong></h2>
                    <span><strong>Geert Duhoux</strong></span> 
                </li>
                <div class="d-flex flex-row justify-content-between" style="z-index: 1;">
                    <div class="badge bg-dark text-light">159 deelnemers</div>
                    <div class="badge bg-dark text-light">X votes</div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
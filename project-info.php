<?php

include_once("inc/navdefiner.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tackit</title>
</head>
<body>
    
<?php include_once("inc/topnav.inc.php"); ?>

<section id="navSection" class="d-inline-block">
    <?php include_once("inc/nav.inc.php"); ?>

</section>
<section class="project-info-pannel">
    <section class="project-info-pannel-left">
        <div>
            <a href="Dashboard.php"><img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655034760/Tackit_Assets/Vector_y2qagj.svg" alt="<"></a>
            <h1>Project: zwaluwenstraat</h1>
        </div>
        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654777914/Tackit_Assets/image_1_4_kpe6hi.png" alt="H">
        <div>
            <div>
                <p>startdatum project</p>
                <p>2022/06/05</p>
            </div>
            <div>
                <p>einddatum project</p>
                <p>2022/06/05</p>
            </div>
            <div>
                <p>startdatum cocreatie</p>
                <p>2022/06/05</p>
            </div>
            <div>
                <p>startdatum cocreatie voting</p>
                <p>2022/06/05</p>
            </div>
            <div>
                <p>einddatum cocreatie voting</p>
                <p>2022/06/05</p>
            </div>
        </div>
        <div>
            <p>Type</p>
            <p>straat renovatie</p>
        </div>
        <div>
            <p>Budget</p>
            <p>$400000</p>
        </div>
    </section>
    <section class="project-info-pannel-right">
        <h3>Extra informatie</h3>
        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654777914/Tackit_Assets/image_1_4_kpe6hi.png" alt="">
        <p>titel van de info</p>
        <p>body van de info</p>
    </section>
</section>



</body>
</html>
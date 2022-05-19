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

<section id="contentSection" class="d-inline-block">
    <div class="banner" 
         style="background: url('https://res.cloudinary.com/dgypufy9k/image/upload/v1652982240/Tackit_Assets/image_1_3_au2xq7.png'); 
                background-repeat: no-repeat;
                background-size: cover;">
        <div class="pannel">
            <div class="pannel-ProjectTitle">
                <h2>Project - bloemenpark</h2>
            </div>
            <div class="pannelContent">
                <section id="pannelInfo" class="d-inline-block">
                <ul>
                    <li>
                        <div class="d-inline-block"><img src="" alt=""><p>p</p></div>
                        <div class="d-inline-block"><p>45 u.</p></div>
                        <div class="d-inline-block"><p>Tijd Resterend</p></div>
                    </li>
                    <li>
                        <div class="d-inline-block"><img src="" alt=""><p>p</p></div>
                        <div class="d-inline-block"><p>68%</p></div>
                        <div class="d-inline-block"><p>voltooide Projecten</p></div> 
                    </li>
                </ul>
                </section>
                <section id="pannelButtons" class="d-inline-block">
                <ul>
                    <li>
                        <div class="d-inline-block"><img src="" alt=""><p>p</p></div>
                        <div class="d-inline-block"><p>Data</p></div>
                    </li>
                    <li>
                        <div class="d-inline-block"><img src="" alt=""><p>p</p></div>
                        <div class="d-inline-block"><p>Settings</p></div>
                    </li>
                </ul>
                </section>
            </div>    
        </div>
    </div>

    <div class="mainDContent">
        <section id="dNewProject" class="d-inline-block"
                style="background: url('https://res.cloudinary.com/dgypufy9k/image/upload/v1652982240/Tackit_Assets/image_1_3_au2xq7.png'); 
                background-repeat: no-repeat;
                background-size: cover;">
            <div class=dProjectButton>
                <a href="project.php"><img src="" alt=""><p>Start een nieuw project</p></a>
            </div>
        </section>
        <section id="dAllProjects" class="d-inline-block" 
         style="background: url('https://res.cloudinary.com/dgypufy9k/image/upload/v1652982240/Tackit_Assets/image_1_3_au2xq7.png'); 
                background-repeat: no-repeat;
                background-size: cover;">
            <div class=dProjectButton>
            <a href=""><img src="" alt=""><p>Alle projecten</p></a>
            </div>
        </section>
        <section id="dStats" class="d-inline-block">
            <div ></div>
        </section>

    </div>

</section>

</div>
</body>
</html>
<?php
include_once("inc/navdefiner.inc.php"); 

$posts = [1,2,3,4,5,6,7,8,9,10];

?><!DOCTYPE html> 
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>TackIt</title>
</head>
<body>
<?php include_once("inc/topnav.inc.php"); ?>
    
    <div>
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
                            <div class="d-inline-block"><p>Voltooid</p></div> 
                        </li>
                    </ul>
                    </section>
                    <section id="pannelButtons" class="d-inline-block">
                    <ul>
                        <li>
                            <div class="d-inline-block"><img src="" alt=""><p>p</p></div>
                            <div class="d-inline-block"><p>Info</p></div>
                        </li>
                        <li>
                            <div class="d-inline-block"><img src="" alt=""><p>p</p></div>
                            <div class="d-inline-block"><p>Hervatten</p></div>
                        </li>
                    </ul>
                    </section>
                </div>    
            </div>
        </div>

        <div class="mainBContent">
                <div class="bStats"></div>
                <div class="BprojectListings">
                    <?php foreach($posts as $post): ?>
                    <div class="BprojectListing">
                            <div class="projectListing-banner" style="background: url('https://res.cloudinary.com/dgypufy9k/image/upload/v1652982240/Tackit_Assets/image_1_3_au2xq7.png');">
                            </div>
                            <div class="projectListing-title">
                                <ul>
                                    <li>Project: zwaluwenstraat</li>
                                    <li>Fase 2: cocreatie</li>
                                </ul>
                            </div>
                            <div class="projectListing-info">
                                <ul>
                                    <li>
                                        <img src="" alt="I">
                                        <p>45</p>
                                        <p>Participanten</p>
                                    </li>
                                    <li>
                                        <img src="" alt="I">
                                        <p>22</p>
                                        <p>Voltooide Creaties</p>
                                    </li>
                                    <li>
                                        <img src="" alt="I">
                                        <p>49 u.</p>
                                        <p>Tijd resterend</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="projectListing-button">
                                <a href=""><img src="" alt="button"></a>
                            </div>
                    </div>
                    <?php endforeach; ?>    
                </div>    
        </div>

</section>
    </div>
</body>
</html>
<?php
include_once("inc/navdefiner.inc.php");
require_once(__DIR__ . "/vendor/autoload.php");
use tackit\core\Project;
use tackit\core\Items;

if (isset($_SESSION["user"])) {
    $projects = Project::getAllProjects();
}
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
<section id="contentSection" class="d-inline-block">
<div class="banner"
     style="background: url('https://res.cloudinary.com/dgypufy9k/image/upload/v1652982240/Tackit_Assets/image_1_3_au2xq7.png'); 
            background-repeat: no-repeat;
            background-size: cover;">
        <div class="new-project-pannel">
                <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609719/Tackit_Assets/add_folder_obiszy.png" alt="image"><h2>
                    <a href="new-project.php">    
                    Start een nieuw project
                    </a>
                </h2>
        </div>
</div>

<div class="filterSection">
    <div class="filterTitle"><h3>Alle Projecten</h3></div>
    <div class="filter">
                <select name="user-filter" id="user-filter">
                        <option value="">sorteren op</option>
                        <option value="">Alfabetisch</option>
                        <option value="">Tijd resterend</option>
                        <option value="">Participanten</option>
                        <option value="">Voltooide creaties</option>
                </select> 
            </div>
</div>

<section class="projectListings">
        <?php foreach($projects as $project): ?>
            <div class="projectListing">
                <div class="projectListing-banner" style="background: url('https://res.cloudinary.com/dgypufy9k/image/upload/v1652982240/Tackit_Assets/image_1_3_au2xq7.png');">
                </div>
                <div class="projectListing-title">
                    <ul>
                        <li><?php echo $project['name']?></li>
                        <?php if ($project['start_date_cocreatie'] == "2022-06-13 00:00:00") : ?>
                            <li>Fase 2: cocreatie</li>
                        <?php elseif($project['start_date_voting'] == "2022-06-14 00:00:00") : ?>
                            <li>Fase 3: voting</li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="projectGListing-info">
                    <ul>
                        <li>
                            <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609817/Tackit_Assets/users_v6ieti.png" alt="I">
                            <p><?php echo count(Items::findAllItemsByProject($project['id']))?></p>
                            <p>Participanten</p>
                        </li>
                        <li>
                            <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609817/Tackit_Assets/approve_file_um7l5f.png" alt="I">
                            <p><?php echo count(Items::findAllItemsByProject($project['id']))?></p>
                            <p>Voltooide Creaties</p>
                        </li>
                        <li>
                            <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609817/Tackit_Assets/clock_s1d6jn.png" alt="I">
                            <p>49 u.</p>
                            <p>Tijd resterend</p>
                        </li>
                    </ul>
                </div>
                <div class="projectListing-button">
                    <?php if ($project['start_date_cocreatie'] == "2022-06-13 00:00:00") : ?>    
                        <a href=""><img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609817/Tackit_Assets/Setting_gycl0c.png" alt="button"></a>
                    <?php elseif($project['start_date_voting'] == "2022-06-14 00:00:00") : ?>
                        <a href="projectVoting.php?projectId=<?php echo $project['id']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
</section>

</section>    
<script src="js/main.js"></script>
</body>
</html>
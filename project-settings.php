<?php
    use tackit\core\Project;
    use tackit\core\Vereisten;
    use tackit\core\Info;

    require __DIR__ . '/vendor/autoload.php';
    include_once("inc/navdefiner.inc.php");

    $projectId = $_SESSION['project_id'];

    $project = Project::getProject($projectId);

    $info = Info::getAll($projectId);

    if (!empty($_SESSION['project_id'])) {
        $projectTitle = $project['name'];
        $projectStartdatum = $project['start_date'];
        $projectEinddatum = $project[('end_date')];
        $projectType = $project['Type'];
        $projectBudget = $project['budget'];
        $projectStartdatum_cocreatie = $project['start_date_cocreatie'];
        $projectStartdatum_cocreatie_voting = $project['start_date_voting'];
        $projectEinddatum_cocreatie_voting = $project['end_date_cocreatie_voting'];
    }
    
    if (!empty($_POST['save'])) {

    unset($_SESSION['project_id']);    
    header("Location: dashboard.php");

    };
    if (!empty($_POST['cancel'])) {
    
    Info::deleteAll($projectId);    
    Vereisten::deleteAll($projectId);
    Project::delete($projectId);
    unset($_SESSION['project_id']);      
    header("Location: dashboard.php");
    
    };


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

    <section id="new-project-pannel-next" class="new-project-pannel-next">
        <section class="new-project-pannel-next-content">
            <section class="new-project-pannel-next-content-left">
                <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654777914/Tackit_Assets/image_1_4_kpe6hi.png" alt="">
                <p>map.esp</p>
                <div>
                    <p>aanpassen</p>
                    <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609122/Tackit_Assets/Repair_Tool_hbemrt.png" alt="Y">
                </div>
                <div class="progress">
                    <div class="background-blue">
                        <p class="white">Fase 1</p>
                    </div>
                    <div class="">
                        <p class="">Fase 2</p>
                    </div>
                    <div class="">
                        <p class="">Fase 3</p>
                    </div>
                    <div class="">
                        <p class="">Fase 4</p>
                    </div>
                </div>
            </section>
            <section class="new-project-pannel-next-content-right">
                <h1>Project: title</h1>
                <div class="datums">
                    <div>
                        <p>startdatum project</p>
                        <p>45</p>
                    </div>
                    <div>
                        <p>einddatum project</p>
                        <p>252</p>
                    </div>
                    <div>
                        <p>startdatum cocreatie</p>
                        <p>542</p>
                    </div>
                    <div>
                        <p>startdatum voting</p>
                        <p>245</p>
                    </div>
                    <div>
                        <p>einddatum cocreatie</p>
                        <p>452</p>
                    </div>
                </div>
                <div class="new-project-pannel-next-content-edit">
                    <p>Type</p>
                    <p>fdsq</p>
                </div>
                <div class="new-project-pannel-next-content-edit">
                    <p>Budget</p>
                    <p>2524</p>
                </div>
                <h2>Upload informatie</h2>
                <input type="hidden" value="0" id="infoCount">
                <ul id="updatedInfoList" class="updatedInfoList">

                <?php foreach($info as $infoItem): ?>
                    <li id="info-id-item-<?php echo $infoItem['id'];?>">
                        <input type="hidden" value="<?php echo $infoItem['id'];?>" id="info-id-item-<?php echo $infoItem['id'];?>">
                        <p><?php echo $infoItem['name']; ?></p>
                        <p><?php echo $infoItem['file_name']; ?></p>
                        <p onclick="deleteInfo(<?php echo $infoItem['id'];?>)" >verwijderen</p>
                    </li>
                <?php endforeach ?>    
                </ul>
                <ul id="infoList">
                </ul>
                <p onclick="addInfo()" class="newFile">Nieuw bestand</p>

                <h2>Vereisten</h2>
                <ul id="vereisten" class="edit-project-vereisten">
                    <li>
                        <p>Bomen</p>
                        <p>1</p>
                        <p>verwijderen</p>
                    </li>
                </ul>
                <div onclick="vereistenPopupShow()">
                    <p>Vereisten toevoegen</p>
                </div>
                <div id="vereisten-popup" class="vereisten-popup">
                <div>
                    <h3>Vereisten</h3>
                    <img onclick="vereistenPopupHide()" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654791984/Tackit_Assets/Vector_rsybph.png" alt="X">
                </div>    
                <div>
                    <select name="vereisten-selector" id="vereisten-selector">
                        <option value="bomen">bomen</option>
                        <option value="straatlamp">straatlamp</option>
                        <option value="fontein">fontein</option>
                        <option value="bank">bank</option>
                        <option value="struik">struik</option>
                    </select> 
                    <input class="vereisten-hoeveelheid" type="text" placeholder="hoeveelheid">
                </div>    
                <p onclick="vereistenAdd()" class="vereisten-confirm">Toevoegen</p>
            </div>
            </section>
        </section>  
        <section class="new-project-buttons">
            <div>
                    <form action="" method="POST">
                        <input type="hidden" name="cancel" value="something">
                        <button type="submit">verwijderen</button>
                    </form>
            </div> 
            <div>
                <div>
                    <a href="new-project.php"><p>annuleren</p></a>
                </div>         
                <div>
                    <form action="" method="POST">
                        <input type="hidden" name="save" value="something">
                        <button type="submit">opslaan</button>
                    </form>
                </div>
            </div>  
        </section>  
    </section>
    <script src="js/main.js"></script>
</body>
</html>
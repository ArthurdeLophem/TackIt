<?php
    use tackit\core\Project;
    use tackit\core\Vereisten;
    use tackit\core\Info;

    require __DIR__ . '/vendor/autoload.php';
    include_once("inc/navdefiner.inc.php");

    session_start();

    $projectId = $_GET['projectId'];

    if (!empty($_GET['projectId'])) {

        $_SESSION['project_id'] = $projectId;
        $project = Project::getProject($projectId);
        $vereisten = Vereisten::getAll($projectId);
        $info = Info::getAll($projectId);
        $rowcount = Vereisten::vereistenCount($projectId);
        $i = 0;

        $projectTitle = $project['name'];
        $projectStartdatum = $project['start_date'];
        $projectEinddatum = $project[('end_date')];
        $projectType = $project['Type'];
        $projectBudget = $project['budget'];
        $projectStartdatum_cocreatie = $project['start_date_cocreatie'];
        $projectStartdatum_cocreatie_voting = $project['start_date_voting'];
        $projectEinddatum_cocreatie_voting = $project['end_date_cocreatie_voting'];

        $projectId = $_GET['projectId'];
    
    }
    
    if (!empty($_POST['cancel'])) {

    unset($_SESSION['project_id']);      
    header("Location: projecten.php");

    };

    
    if (!empty($_POST['delete'])) {
    
    Info::deleteAll($projectId);    
    Vereisten::deleteAll($projectId);
    Project::delete($projectId);   
    unset($_SESSION['project_id']);  
    header("Location: projecten.php");
    
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
                    <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
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
                <h1>Project: <?php echo $project['name']; ?></h1>
                <div class="datums">
                    <div id="project-edit-dates" class="show">
                        <p>startdatum project</p>
                        <p id="project-edit-dates-1"><?php echo $project['start_date']; ?></p>
                    </div>
                    <div id="project-edit-dates-input-div" class="hidden">
                        <input id="project-edit-dates-input" type="date" value="<?php echo $project['start_date']; ?>">
                    </div>
                    <div id="project-edit-dates" class="show">
                        <p>einddatum project</p>
                        <p id="project-edit-dates-2"><?php echo $project['end_date']; ?></p>
                    </div>
                    <div id="project-edit-dates-input-div" class="hidden">
                        <input id="project-edit-dates-input" type="date" value="<?php echo $project['end_date']; ?>">
                    </div>
                    <div id="project-edit-dates" class="show">
                        <p>startdatum cocreatie</p>
                        <p id="project-edit-dates-3"><?php echo $project['start_date_cocreatie']; ?></p>
                    </div>
                    <div id="project-edit-dates-input-div" class="hidden">
                        <input id="project-edit-dates-input" type="date" value="<?php echo $project['start_date_cocreatie']; ?>">
                    </div>
                    <div id="project-edit-dates" class="show">
                        <p>startdatum voting</p>
                        <p id="project-edit-dates-4"><?php echo $project['start_date_voting']; ?></p>
                    </div>
                    <div id="project-edit-dates-input-div" class="hidden">
                        <input id="project-edit-dates-input" type="date" value="<?php echo $project['start_date_voting']; ?>">
                    </div>
                    <div id="project-edit-dates" class="show">
                        <p>einddatum cocreatie</p>
                        <p id="project-edit-dates-5"><?php echo $project['end_date_cocreatie_voting']; ?></p>
                    </div>
                    <div id="project-edit-dates-input-div" class="hidden">
                        <input id="project-edit-dates-input" type="date" value="<?php echo $project['end_date_cocreatie_voting']; ?>">
                    </div>
                    <div onclick="editDate()" id="project-edit-date-edit" class="project-edit-date-edit">
                        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="Y">
                    </div>
                    <div onclick="saveDate()" id="project-edit-date" class="project-edit-date">
                        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655058499/Tackit_Assets/Save_ijoxrb.svg" alt="Y">
                    </div>
                </div>
                <div class="new-project-pannel-next-content-edit">
                    <p>Type</p>
                    <p id="type-edit-p" class="show"><?php echo $project['Type']; ?></p>
                    <input id="type-edit-input" class="hidden" type="text" value="<?php echo $project['Type']; ?>">
                    <img onclick="editType()" id="type-edit-edit" class="wrench show" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="y">
                    <img onclick="saveType()" id="type-edit-save" class="wrench hidden" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655058499/Tackit_Assets/Save_ijoxrb.svg" alt="y">
                </div>
                <div class="new-project-pannel-next-content-edit">
                    <p>Budget</p>
                    <p id="budget-edit-p" class="show"><?php echo $project['budget']; ?></p>
                    <input type="text" id="budget-edit-input" class="hidden" value="<?php echo $project['budget']; ?>">
                    <img onclick="editBudget()" id="budget-edit-edit" class="wrench show" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655057792/Tackit_Assets/Repair_Tool_pxzb27.svg" alt="y">
                    <img onclick="saveBudget()" id="budget-edit-save" class="wrench hidden" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1655058499/Tackit_Assets/Save_ijoxrb.svg" alt="y">
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
                    <?php if(!empty($_GET['projectId'])): ?>  
                            <?php foreach($vereisten as $vereist): ?>
                                <?php $i++; ?>
                        <li id="vereisten-li-item-<?php echo $i?>">
                            <div>
                                <p><?php echo $vereist['item']?></p>
                                <p><?php echo $vereist['amount']?></p>
                                <input type="hidden" value="<?php echo $vereist['id']?>" id="vereisten-inner-id-<?php echo $i?>" name="vereisten-inner-id-<?php echo $i?>">
                                <input type="hidden" value="<?php echo $vereist['item']?>" class="vereisten-item-item" name="vereisten-item-<?php echo $i?>">
                                <input type="hidden" value="<?php echo $vereist['amount']?>" class="vereisten-hoeveelheid-item" name="vereisten-hoeveelheid-<?php echo $i?>">
                                <input type="hidden" value="false" id="vereisten-type-id-<?php echo $i?>">
                                <p onclick="deleteVereisten(<?php echo $i?>)">verwijderen</p>
                            </div>
                        </li>    
                            <?php endforeach ?>    
                   <?php endif ?>        
                </ul>
                <div onclick="vereistenPopupShow()"  class="vereisten-edit-confirm">
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
                    <p onclick="vereistenEditAdd()" class="vereisten-confirm">Toevoegen</p>
                </div>
                <input id="hiddenCounter" type="hidden" name="liCount" value="<?php
                   if(!empty($_GET['projectId'])) {
                    echo $rowcount;
                    }
                ?>">
            </section>
        </section>  
        <section class="new-project-buttons">
            <div>
                    <form action="" method="POST">
                        <input type="hidden" name="delete" value="something">
                        <button type="submit">verwijderen</button>
                    </form>
            </div> 
            <div>
                <div>
                    <form action="" method="POST">
                        <input type="hidden" name="cancel" value="something">
                        <button type="submit">annuleren</button>
                    </form>
                </div>         
                <div class="project-edit-save-button">
                    <p onclick="saveVereisten()"><a href="projecten.php">Opslaan</a></p>
                </div>
            </div>  
        </section>  
    </section>
    <script src="js/editProject.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
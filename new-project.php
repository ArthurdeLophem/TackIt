<?php
use tackit\core\Project;
use tackit\core\Vereisten;

require __DIR__ . '/vendor/autoload.php';
include_once("inc/navdefiner.inc.php");

if (!empty($_POST)) {

    $project = new Project();
    $project->setTitle($_POST['title']);
    $project->setStartdatum($_POST['startdatum-project']);
    $project->setEinddatum($_POST['einddatum-project']);
    $project->setType($_POST['type']);
    $project->setBudget($_POST['budget']);
    $project->setStartdatum_cocreatie($_POST['startdatum-cocreatie']);
    $project->setStartdatum_cocreatie_voting($_POST['startdatum-cocreatie-voting']);
    $project->setEinddatum_cocreatie_voting($_POST['einddatum-cocreatie-voting']);
    $project->save();

    $liCount = $_POST['liCount'];

    for($i = 0; $i < $liCount; $i++) {
        $number = $i + 1;
        $vereisten = new Vereisten();
        $vereisten->setItem($_POST['vereisten-item-' . $number]);
        $vereisten->setAmount((int)$_POST['vereisten-hoeveelheid-' . $number]);
        $vereisten->setProjectId($project->getId());
        $vereisten->save();
    };

    session_start();
    $_SESSION['project_id'] = $project->getId();
    header("Location: new-project-next.php");
};    

?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>
    <title>TackIt</title>
</head>
<body>
<?php include_once("inc/topnav.inc.php"); ?>

<section id="navSection" class="d-inline-block">
    <?php include_once("inc/nav.inc.php"); ?>

</section>

    <form class="new-project-form" action="" method="POST">
        <section class="project-details">
            <p>Project details</p>
            <input class="project-name" type="text" placeholder="project naam" name="title">
            <div class="project-dates">
                <div>
                    <label for="">startdatum project</label>
                    <div>
                        <input class="datepicker" type="date" name="startdatum-project">
                    </div>
                </div>
                <div>
                    <label for="">einddatum project</label>
                    <div>
                        <input class="datepicker" type="date" name="einddatum-project">
                    </div>
                </div>    
            </div>
            <div class="new-project-form-field-file">
                <p>Plattegrond</p>
                <label for="form-file">
                    <p>Bestand kiezen</p> 
                    <div>
                        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609118/Tackit_Assets/Vector_ibe3vt.png" alt="U"></label>
                    </div>      
                    <input id="form-file" type="file" name="file">
            </div>
            <div class="new-project-form-field">
                <label for="Type"><p>Type</p></label>
                <input type="text" name="type">
            </div>
            <div class="new-project-form-field">
                <label for="budget"><p>Budget</p></label>
                <input type="text" name="budget">
            </div>
            <div class="form-vereisten">
                <input id="hiddenCounter" type="hidden" name="liCount">
                <label for="">
                   <p>Vereisten</p> 
                </label>
                <div onclick="vereistenPopupShow()">
                    <p>Vereisten toevoegen</p>
                    <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654774526/Tackit_Assets/Vector_gelxnu.png" alt="U">
                </div>
                <ul id="vereisten" class="vereisten"></ul>
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
        <section class="communicatie">
            <p>Communicatie</p>
            <div class="comm-form-split">
                <div class="project-dates">
                    <div>
                        <label for="">startdatum cocreatie</label>
                        <div>
                            <input class="datepicker" type="date" name="startdatum-cocreatie">
                        </div>
                    </div>
                    <div>
                        <label for="">startdatum cocreatie voting</label>
                        <div>
                            <input class="datepicker" type="date" name="startdatum-cocreatie-voting">
                        </div>
                    </div>
                    <div>
                        <label for="">einddatum cocreatie / voting</label>
                        <div>
                            <input class="datepicker" type="date" name="einddatum-cocreatie-voting">
                        </div>
                    </div>
                </div>
                <div class="criteria">
                    <label for="">criteria participanten</label>
                    <input type="text">
                    <div class="add-criteria">
                        <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654774582/Tackit_Assets/add_account_yj8clz.png" alt="P">
                        <p> criteria toevoegen</p>
                    </div>
                </div>
            </div>
            <button class="form-c"><a href="dashboard.php">annuleren</a></button>
            <button class="form-n" type="submit">Volgende</button>
        </section>
    </form>

    <script src="js/main.js"></script>
</body>
</html>
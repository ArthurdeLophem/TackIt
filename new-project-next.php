<?php
    use tackit\core\Project;

    require __DIR__ . '/vendor/autoload.php';
    include_once("inc/navdefiner.inc.php");

    $project = $_SESSION['project'];

    $projectTitle = $project->getTitle();
    $projectStartdatum = $project->getStartdatum();
    $projectEinddatum = $project->getEinddatum();
    $projectType = $project->getType();
    $projectBudget = $project->getBudget();
    $projectStartdatum_cocreatie = $project->getStartdatum_cocreatie();
    $projectStartdatum_cocreatie_voting = $project->getStartdatum_cocreatie_voting();
    $projectEinddatum_cocreatie_voting = $project->getEinddatum_cocreatie_voting();


    if (!empty($_POST)) {

    $saveProject = new Project();
    $saveProject->setTitle($projectTitle);
    $saveProject->setStartdatum($projectStartdatum);
    $saveProject->setEinddatum($projectEinddatum);
    $saveProject->setType($projectType);
    $saveProject->setBudget($projectBudget);
    $saveProject->setStartdatum_cocreatie($projectStartdatum_cocreatie);
    $saveProject->setStartdatum_cocreatie_voting($projectStartdatum_cocreatie_voting);
    $saveProject->setEinddatum_cocreatie_voting($projectEinddatum_cocreatie_voting);
    $saveProject->save();
    header("Location: dashboard.php");

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
                <h1>Project: <?php echo $projectTitle; ?></h1>
                <div class="datums">
                    <div>
                        <p>startdatum project</p>
                        <p><?php echo $projectStartdatum; ?></p>
                    </div>
                    <div>
                        <p>einddatum project</p>
                        <p><?php echo $projectEinddatum; ?></p>
                    </div>
                    <div>
                        <p>startdatum cocreatie</p>
                        <p><?php echo $projectStartdatum_cocreatie; ?></p>
                    </div>
                    <div>
                        <p>startdatum voting</p>
                        <p><?php echo $projectStartdatum_cocreatie_voting; ?></p>
                    </div>
                    <div>
                        <p>einddatum cocreatie</p>
                        <p><?php echo $projectEinddatum_cocreatie_voting; ?></p>
                    </div>
                    <div>
                        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609122/Tackit_Assets/Repair_Tool_hbemrt.png" alt="Y">
                    </div>
                </div>
                <div class="new-project-pannel-next-content-edit">
                    <p>Type</p>
                    <p><?php echo $projectType; ?></p>
                    <div>
                        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609122/Tackit_Assets/Repair_Tool_hbemrt.png" alt="Y">
                    </div>
                </div>
                <div class="new-project-pannel-next-content-edit">
                    <p>Budget</p>
                    <p><?php echo $projectBudget; ?></p>
                    <div>
                        <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609122/Tackit_Assets/Repair_Tool_hbemrt.png" alt="Y">
                    </div>
                </div>
                <h2>Upload informatie</h2>
                <ul>
                    <li>
                        <p>Uitleg project</p>
                        <p>uitleg.mp4</p>
                        <div>
                            <img class="wrench" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609122/Tackit_Assets/Repair_Tool_hbemrt.png" alt="y">
                        </div>
                        <div class="delete">
                            <p>verwijderen</p>
                        </div>
                    </li>
                    <li>
                        <p class="newFile">Nieuw bestand</p>
                        <!-- <div class="newUpload">
                            <p>nieuw bestand</p>
                            <label for="infoFile">
                                <p>Uploaden</p>
                                <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654609118/Tackit_Assets/Vector_ibe3vt.png" alt="">
                            </label>
                            <input id="infoFile" type="file">
                        </div> -->
                    </li>
                </ul>
            </section>
        </section>  
        <section class="new-project-buttons">
            <div>
                <p>annuleren</p>
            </div> 
            <div>
                <div>
                    <a href="new-project.php"><p>terug</p></a>
                </div>         
                <div>
                    <form action="" method="POST">
                        <input type="hidden" name="nothing" value="something">
                        <button type="submit">opslaan</button>
                    </form>
                </div>
            </div>  
        </section>  
    </section>
</body>
</html>
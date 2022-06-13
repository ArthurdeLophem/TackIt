<?php

include_once("inc/navdefiner.inc.php");
require_once(__DIR__ . "/vendor/autoload.php");
use tackit\core\Items;
use tackit\core\Burger;
use tackit\core\Votes;
use tackit\core\Security;

include_once("inc/navdefiner.inc.php");
require_once(__DIR__ . "/vendor/autoload.php");

Security::checkLoggedIn();

if(isset($_GET['projectId'])){
    $userProjects = Items::findAllItemsByProject($_GET['projectId']);
}else{
    $userProjects = "";
}
?>

<!DOCTYPE html>
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

    <div class="d-flex justify-content-center" style="height: 100vh; top: 50px; position: relative; margin-left: 15%; width: 70%;">
        <div class="container d-flex flex-column" style="width: 100%; margin-left: 0; margin-right: 0;">
            <div class="text-center my-3">
                <h1>stem op je favoriet project</h1>
            </div>
            <?php if ($userProjects == null) : ?>
                <div class="alert alert-danger" role="alert">
                    probleem met het vinden van de projecten probeer opnieuw
                </div>
            <?php else : ?>
                <div class="d-flex flex-row justify-content-between">
                    <div class="shadow badge bg-light text-dark px-4 py-3"><?php echo count($userProjects) ?> Tacks</div>
                    <?php if ($userType == 0) : ?>
                        <div class="shadow badge bg-light text-dark px-4 py-3"><strong id="voteAmount"><?php echo Votes::getVotes($_SESSION['user']['id'], $_GET['projectId']) ?></strong> /3 votes</div>
                    <?php endif ?>
                    
                </div>
                <div id="voteError" class="justify-content-center align-items-center my-3" style="height: 40px; display: none;">
                    <div class="container d-flex flex-column">
                        <div class="mt-5 alert alert-danger" id="errorMessage" role="alert">
                            error
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row flex-wrap" style=" width: 100%;">
                    <?php foreach($userProjects as $userProject) : ?>
                            <div class="col-sm-4 my-3">
                                <div class="card align-self-end flex-column" >
                                    <div class="card-img-top rounded-start shadow-1-strong" 
                                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                                    </div>
                                    <a class="card-title" style="padding-left: 2%; padding-top: 2%;" href="viewProject.php?projectId=<?php echo $userProject['project_id']?>&userId=<?php echo $userProject['user_id']?>">go to project</a>
                                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span><?php echo Votes::getProjectVotes($userProject['user_id'], $userProject['project_id'])?> votes</span> <span>by <strong><?php echo Burger::getUserById($userProject['user_id'])['username'] ?></strong></span> 
                                        <?php if ($userType == 0) : ?>
                                            <?php if (Votes::isVoted($userProject['user_id'], $_SESSION['user']['id'], $userProject['project_id'])) : ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#52B69A" class="bi bi-star-fill" viewBox="0 0 16 16" data-user-id="<?php echo $userProject['user_id']?>" data-project-id="<?php echo $userProject['project_id']?>" data-voter-id="<?php echo $_SESSION['user']['id']?>">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            <?php else : ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" data-user-id="<?php echo $userProject['user_id']?>" data-project-id="<?php echo $userProject['project_id']?>" data-voter-id="<?php echo $_SESSION['user']['id']?>">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </li>
                                </div>
                            </div>
                    <?php endforeach; ?>
                <div>
            <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="scripts/saveVote.js"></script>
</body>
</html>
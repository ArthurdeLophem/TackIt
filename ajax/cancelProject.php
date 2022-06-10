<?php       

use tackit\core\Project;
use tackit\core\Vereisten;
use tackit\core\Info;

require dirname(__DIR__, 1) . "/vendor/autoload.php";

session_start();

$projectId = $_SESSION['project_id'];

if (!empty($_POST)) {


    if(!empty($_SESSION['project_id'])) {
        $projectId = $_SESSION['project_id'];
        
        Info::deleteAll($projectId);    
        Vereisten::deleteAll($projectId);
        Project::delete($projectId);
        unset($_SESSION['project_id']);      

    
    }	
    



}
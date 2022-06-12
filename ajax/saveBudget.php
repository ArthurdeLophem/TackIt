<?php
use tackit\core\Project;
require dirname(__DIR__, 1) . "/vendor/autoload.php";

if (!empty($_POST)) {

    session_start();
    $projectId = $_SESSION['project_id'];

    Project::saveBudget((int)$_POST['budget'], $projectId);


    $response = [
        'status' => 'success',
        'message' => 'budget updated successfully',
        'budget' => $_POST['budget']
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response);


}

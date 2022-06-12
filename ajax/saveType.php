<?php
use tackit\core\Project;
require dirname(__DIR__, 1) . "/vendor/autoload.php";

if (!empty($_POST)) {

    session_start();
    $projectId = $_SESSION['project_id'];

    Project::saveType($_POST['type'], $projectId);


    $response = [
        'status' => 'success',
        'message' => 'type updated successfully',
        'type' => $_POST['type']
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response);


}

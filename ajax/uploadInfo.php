<?php
use tackit\core\Info;
require dirname(__DIR__, 1) . "/vendor/autoload.php";

if (!empty($_POST)) {

    session_start();
    $projectId = $_SESSION['project_id'];



    $info = new Info();

    $info->setName($_POST['infoTitle']);
    $info->setFile($_FILES['infoFile']);
    $info->setProjectId($projectId);
    $info->save();


    $response = [
        'status' => 'success',
        'message' => 'File uploaded successfully',
        'file' => $info->getName()
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response);


}



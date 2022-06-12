<?php
use tackit\core\Project;
require dirname(__DIR__, 1) . "/vendor/autoload.php";

if (!empty($_POST)) {

    session_start();
    $projectId = $_SESSION['project_id'];
    $var1 = $_POST['date-0'];
    $var2 = $_POST['date-1'];
    $var3 = $_POST['date-2'];
    $var4 = $_POST['date-3'];
    $var5 = $_POST['date-4'];

    Project::saveDate($_POST['date-0'], $_POST['date-1'], $_POST['date-2'], $_POST['date-3'], $_POST['date-4'], $projectId);


    $response = [
        'status' => 'success',
        'message' => 'dates updated successfully',
        'date1' => $var1,
        'date2' => $var2,
        'date3' => $var3,
        'date4' => $var4,
        'date5' => $var5
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response);


}

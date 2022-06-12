<?php       

use tackit\core\Vereisten;

require dirname(__DIR__, 1) . "/vendor/autoload.php";



if (!empty($_POST)) {

    session_start();
    $projectId = $_SESSION['project_id'];
    

    $var = $_POST['vereisten'];
    $var1 = json_decode($_POST['vereisten'][1]);

    $count = count($var);
    
    for($i = 1; $i <= $count; $i++) {

        $vereisten = json_decode($_POST['vereisten'][$i]);     
        
        Vereisten::saveItem( $projectId, $vereisten[0], $vereisten[1]);    
        

    }
    
    unset($_SESSION['project_id']);   

    $response = [
        'status' => 'success',
        'message' => 'item saved successfully'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);

    }	
    
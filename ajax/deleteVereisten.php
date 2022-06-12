<?php       

use tackit\core\Vereisten;

require dirname(__DIR__, 1) . "/vendor/autoload.php";



if (!empty($_POST)) {

    $itemId = $_POST['id'];     

    Vereisten::deleteItem($itemId);    

    
    $response = [
        'status' => 'success',
        'message' => 'item deleted successfully'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);

    }	
    




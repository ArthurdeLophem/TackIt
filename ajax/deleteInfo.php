<?php

    use tackit\core\Info;
    require dirname(__DIR__, 1) . "/vendor/autoload.php";

    if(!empty($_POST)) {    

        Info::delete($_POST['id']);

        $response = [
            'status' => 'success',
            'message' => 'File deleted successfully'
        ];

        header('Content-Type: application/json');
        echo json_encode($response);

    }
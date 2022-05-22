<?php
use tackit\core\Project;
use tackit\core\Items;

require_once(__DIR__ . "/../vendor/autoload.php");

if (!empty($_POST)) {
    try {
        $items = Items::findItemsByProjectAndUser($_POST['projectId'], $_POST['userId']);
        $response = [
            "status" => "success",
            "message" => "getting items",
            "Items" => json_decode($items['items'])
        ];
    } catch (\Throwable $th) {
        $response = [
            "status" => "failed",
            "message" => "failed to save items",
            "error" => $th->getMessage()
        ];
    }
    echo json_encode($response);
}
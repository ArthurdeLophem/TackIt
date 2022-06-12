<?php
use tackit\core\Project;
use tackit\core\Items;

require_once(__DIR__ . "/../vendor/autoload.php");

if (!empty($_POST)) {
    try {
        if(Items::itemValidation($_POST['userId'], $_POST['projectId'])){
            Items::updateItems($_POST['items'], $_POST['projectId'], $_POST['userId']);
            $response = [
                "status" => "success",
                "message" => "updated items successfully"
            ];
        }
        else{
            $items = new Items();
            $items->setProjectId($_POST['projectId']);
            $items->setUserId($_POST['userId']);
            $items->setItems($_POST['items']);
            $items->saveItems();

            $response = [
                "status" => "success",
                "message" => "save items successfully"
            ];
        }
    } catch (\Throwable $th) {
        $response = [
            "status" => "failed",
            "message" => "failed to save items",
            "error" => $th->getMessage()
        ];
    }
    echo json_encode($response);
}
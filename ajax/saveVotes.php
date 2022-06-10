<?php
use tackit\core\Project;
use tackit\core\Votes;

require_once(__DIR__ . "/../vendor/autoload.php");

if (!empty($_POST)) {
    try {
        if(Votes::isVoted($_POST['userId'], $_POST['voterId'])){
            Votes::removeVote($_POST['userId'], $_POST['voterId']);
            $response = [
                "status" => "success",
                "message" => "removed vote"
            ];
        }
        else{
            $items = new Votes();
            $items->setVoterId($_POST['voterId']);
            $items->setUserId($_POST['userId']);
            $items->saveVote();

            $response = [
                "status" => "success",
                "message" => "voted successfully"
            ];
        }
    } catch (\Throwable $th) {
        $response = [
            "status" => "failed",
            "message" => "failed to save vote",
            "error" => $th->getMessage()
        ];
    }
    echo json_encode($response);
}
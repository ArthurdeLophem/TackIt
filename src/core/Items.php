<?php

    namespace tackit\core;

    use Exception;
    use tackit\Data\DB;
    use PDO;


    class Items {

    protected $userId;
    protected $projectId;
    protected $items;
    

    

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of projectId
     */ 
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set the value of projectId
     *
     * @return  self
     */ 
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public static function findItemsByProjectAndUser($projectId, $userId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select items from project_items where project_id = :projectId and user_id = :userId");
        $statement->bindValue(':projectId', $projectId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        return $statement->fetch();
    }
    
    public static function findAllItemsByProject($projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from project_items where project_id = :projectId");
        $statement->bindValue(':projectId', $projectId);
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function itemValidation($userId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from project_items where project_id = :projectId and user_id = :userId");
        $statement->bindValue(':projectId', $projectId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function saveItems(){
        $conn = DB::getConnection();
        $statement = $conn->prepare("insert into project_items (items, project_id, user_id, status, budget) values (:items, :projectId, :userId, :status, :budget)");
        $statement->bindValue(':items', $this->items);
        $statement->bindValue(':projectId', $this->projectId);
        $statement->bindValue(':userId', $this->userId);
        $statement->bindValue(':status', "finished");
        $statement->bindValue(':budget', "eenbudget");
        $statement->execute();
    }

    public static function updateItems($items, $projectId, $userId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("update project_items set items = :items, project_id = :projectId, user_id = :userId where project_id = :projectId and user_id = :userId");
        $statement->bindValue(':items', $items);
        $statement->bindValue(':projectId', $projectId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
    }

    public static function getProjectStatus($userId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select status from project_items where project_id = :projectId and user_id = :userId");
        $statement->bindValue(':projectId', $projectId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        return $statement->fetch();
    }

    public static function getProjectWinner($projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from project_items where project_id = :projectId and status = :status");
        $statement->bindValue(':projectId', $projectId);
        $statement->bindValue(':status', "winner");
        $statement->execute();
        return $statement->fetch();
    }

    public static function setProjectWinner($userId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("update project_items set status = :status where project_id = :projectId and user_id = :userId");
        $statement->bindValue(':status', "winner");
        $statement->bindValue(':projectId', $projectId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
    }
}

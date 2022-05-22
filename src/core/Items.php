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

    public static function findItemsByProject($projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from project_items where project_id = :projectId");
        $statement->bindValue(':projectId', $projectId);
        $results = $statement->execute();
        return $results;
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
        $statement = $conn->prepare("insert into project_items (items, project_id, user_id, status) values (:items, :projectId, :userId, :status)");
        $statement->bindValue(':items', $this->items);
        $statement->bindValue(':projectId', $this->projectId);
        $statement->bindValue(':userId', $this->userId);
        $statement->bindValue(':status', "finished");
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
}

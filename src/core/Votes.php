<?php
    namespace tackit\core;
    use Exception;
use PDO;
use tackit\Data\DB;

    class Votes {

    protected $userId;
    protected $voterId;
    protected $projectId;

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
     * Get the value of voterId
     */ 
    public function getVoterId()
    {
        return $this->voterId;
    }

    /**
     * Set the value of voterId
     *
     * @return  self
     */ 
    public function setVoterId($voterId)
    {
        $this->voterId = $voterId;

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

    public function saveVote(){
        $conn = DB::getConnection();
        $statement = $conn->prepare("insert into votes (user_id, voter_id, project_id) values (:userId, :voterId, :projectId)");
        $statement->bindValue(':userId', $this->userId);
        $statement->bindValue(':voterId', $this->voterId);
        $statement->bindValue(':projectId', $this->projectId);
        $statement->execute();
    }

    public static function getVotes($voterId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from votes where voter_id = :voterId and project_id = :projectId");
        $statement->bindValue(':voterId', $voterId);
        $statement->bindValue(':projectId', $projectId);
        $statement->execute();
        return count($statement->fetchAll());
    }

    public static function getProjectVotes($userId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from votes where user_id = :userId and project_id = :projectId");
        $statement->bindValue(':userId', $userId);
        $statement->bindValue(':projectId', $projectId);
        $statement->execute();
        return count($statement->fetchAll());
    }

    public static function isVoted($userId, $voterId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from votes where voter_id = :voterId and user_id = :userId and project_id = :projectId");
        $statement->bindValue(':voterId', $voterId);
        $statement->bindValue(':userId', $userId);
        $statement->bindValue(':projectId', $projectId);
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function removeVote($userId, $voterId, $projectId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("delete from votes where voter_id = :voterId and user_id = :userId and project_id = :projectId");
        $statement->bindValue(':voterId', $voterId);
        $statement->bindValue(':userId', $userId);
        $statement->bindValue(':projectId', $projectId);
        $statement->execute();
    }
}

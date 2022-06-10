<?php
    namespace tackit\core;
    use Exception;
    use tackit\Data\DB;

    class Votes {

    protected $userId;
    protected $voterId;

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

    public function saveVote(){
        $conn = DB::getConnection();
        $statement = $conn->prepare("insert into votes (user_id, voter_id) values (:userId, :voterId)");
        $statement->bindValue(':userId', $this->userId);
        $statement->bindValue(':voterId', $this->voterId);
        $statement->execute();
    }

    public static function canVote($voterId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from votes where voter_id = :voterId");
        $statement->bindValue(':voterId', $voterId);
        $statement->execute();
        $votes = count($statement->fetchAll());
        if ($votes === 3){
           return new Exception("already registered 3 votes ");
        }
    }

    public static function voteValidation($userId, $voterId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("select * from votes where voter_id = :voterId and user_id = :userId");
        $statement->bindValue(':voterId', $voterId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function removeVote($userId, $voterId){
        $conn = DB::getConnection();
        $statement = $conn->prepare("delete from votes where voter_id = :voterId and user_id = :userId");
        $statement->bindValue(':voterId', $voterId);
        $statement->bindValue(':userId', $userId);
        $statement->execute();
    }
}

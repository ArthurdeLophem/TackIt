<?php

    namespace tackit\core;

    use Exception;
    use tackit\Data\DB;
    use PDO;

    class Vereisten
    {
        private $id;
        private $item;
        private $amount;
        private $projectId;




        public function getItem()
        {
            return $this->item;
        }

        public function setItem($item)
        {
            $this->item = $item;

            return $this;
        }

        public function getAmount()
        {
            return $this->amount;
        }

        public function setAmount($amount)
        {
            if (is_int($amount)) {
                $this->amount = $amount;

                    
                return $this;
            } else {
                throw new Exception("Amount is not an integer");
            }
        }
        public function getProjectId()
        {
            return $this->projectId;
        }

        public function setProjectId($projectId)
        {
            $this->projectId = $projectId;

            return $this;
        }

        public function save()
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("INSERT INTO vereisten (item, amount, project_id) VALUES (:item, :amount, :project_id)");
            $statement->bindValue(':item', $this->item);
            $statement->bindValue(':amount', $this->amount);
            $statement->bindValue(':project_id', $this->projectId);
            $statement->execute();
            $statement2 = $conn->prepare("SELECT LAST_INSERT_ID()");
            $statement2->execute();
            $this->id = $statement2->fetchColumn();
        }
        
        public function update($id)
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("UPDATE vereisten SET item = :item, amount = :amount, project_id = :project_id WHERE id = :id and project_id = :project_id");
            $statement->bindValue(':item', $this->item);
            $statement->bindValue(':amount', $this->amount);
            $statement->bindValue(':project_id', $this->projectId);
            $statement->bindValue(':id', $id);
            $statement->execute();
        }

        public static function deleteAll($id)
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("DELETE FROM vereisten WHERE project_id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
        }

        public static function getAll($id)
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("SELECT * FROM vereisten WHERE project_id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public static function vereistenCount($id)
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("SELECT count(*) FROM vereisten WHERE project_id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
            $result = $statement->fetchColumn();
            return $result;
        }

        public static function deleteItem($id)
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("DELETE FROM vereisten WHERE id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
        }

        public static function saveItem($id, $item, $amount)
        {
            $conn = DB::getConnection();
            $statement = $conn->prepare("INSERT INTO vereisten (item, amount, project_id) VALUES (:item, :amount, :project_id)");
            $statement->bindValue(':item', $item);
            $statement->bindValue(':amount', $amount);
            $statement->bindValue(':project_id', $id);
            $statement->execute();
        }
    }

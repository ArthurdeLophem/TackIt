<?php

    namespace tackit\core;

    use Exception;
    use tackit\Data\DB;
    use PDO;

    class Vereisten {
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

        public function save() {
            $conn = DB::getConnection();
            $statement = $conn->prepare("INSERT INTO vereisten (item, amount, project_id) VALUES (:item, :amount, :project_id)");
            $statement->bindValue(':item', $this->item);
            $statement->bindValue(':amount', $this->amount);
            $statement->bindValue(':project_id', $this->projectId);
            $statement->execute();
        }    
    }
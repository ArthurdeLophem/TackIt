<?php
    
    namespace tackit\core;

    use Exception;
    use tackit\Data\DB;
    use tackit\core\Burger;
    use tackit\core\Gemeente;
    use PDO;

    class Project {
        private $title;
        private $startdatum;
        private $einddatum;
        private $type;
        private $budget;
        private $startdatum_cocreatie;
        private $startdatum_cocreatie_voting;
        private $einddatum_cocreatie_voting;

        public function getTitle()
        {
                return $this->title;
        }

        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }
        
        public function getStartdatum()
        {
                return $this->startdatum;
        }

        public function setStartdatum($startdatum)
        {
                $this->startdatum = $startdatum;

                return $this;
        }

        public function getEinddatum()
        {
                return $this->einddatum;
        }

        public function setEinddatum($einddatum)
        {
                $this->einddatum = $einddatum;

                return $this;
        }

    
        public function getType()
        {
                return $this->type;
        }

        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        public function getBudget()
        {
                return $this->budget;
        }
        
        public function setBudget($budget)
        {
                $this->budget = $budget;

                return $this;
        }
        
        public function getStartdatum_cocreatie()
        {
                return $this->startdatum_cocreatie;
        }
        
        public function setStartdatum_cocreatie($startdatum_cocreatie)
        {
                $this->startdatum_cocreatie = $startdatum_cocreatie;

                return $this;
        }

        public function getStartdatum_cocreatie_voting()
        {
                return $this->startdatum_cocreatie_voting;
        }

        public function setStartdatum_cocreatie_voting($startdatum_cocreatie_voting)
        {
                $this->startdatum_cocreatie_voting = $startdatum_cocreatie_voting;

                return $this;
        }

    
        public function getEinddatum_cocreatie_voting()
        {
                return $this->einddatum_cocreatie_voting;
        }

        public function setEinddatum_cocreatie_voting($einddatum_cocreatie_voting)
        {
                $this->einddatum_cocreatie_voting = $einddatum_cocreatie_voting;

                return $this;
        }

        public function save() {
            $conn = DB::getConnection();
            $statement = $conn->prepare("INSERT INTO project (name, start_date, end_date, Type, budget, start_date_cocreatie, start_date_voting, end_date_cocreatie_voting)
            VALUES (:title, :startdatum, :einddatum, :type, :budget, :startdatum_cocreatie, :startdatum_cocreatie_voting, :einddatum_cocreatie_voting)");
            $statement->bindValue(':title', $this->title);
            $statement->bindValue(':startdatum', $this->startdatum);
            $statement->bindValue(':einddatum', $this->einddatum);
            $statement->bindValue(':type', $this->type);
            $statement->bindValue(':budget', $this->budget);
            $statement->bindValue(':startdatum_cocreatie', $this->startdatum_cocreatie);
            $statement->bindValue(':startdatum_cocreatie_voting', $this->startdatum_cocreatie_voting);
            $statement->bindValue(':einddatum_cocreatie_voting', $this->einddatum_cocreatie_voting);
            $statement->execute();
        }
    }
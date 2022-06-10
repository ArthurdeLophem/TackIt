<?php

    namespace tackit\core;

    use Exception;
    use tackit\Data\DB;
    use PDO;
    use tackit\Data\Config;
    use Cloudinary\Api\Upload\UploadApi;
    use Cloudinary\Configuration\Configuration; 

    $config = Config::getConfig();

    Configuration::instance([
        'cloud' => [
          'cloud_name' => $config['cloud_name'],
          'api_key' => $config['api_key'],
          'api_secret' => $config['api_secret']],
        'url' => [
          'secure' => true]]);

    class Info {
        private $id;
        private $name;
        private $file;
        private $filePath;
        private $projectId;

        
        public function getId() {
                return $this->id;
        }
    
        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getFile()
        {
                return $this->file;
        }

        public function setFile($file)
        {
                $this->file = $file;

                return $this;
        }

        public function getFilePath()
        {
                return $this->filePath;
        }
        public function setFilePath($filePath)
        {
                $this->filePath = $filePath;

                return $this;
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
            
            $file = $this->file;
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
   
  
            if ($fileError === 0) {
                if ($fileSize < 5000000) {

                            //uploads file to cloudinary
                    $cloudinary = (new uploadApi())->upload(
                        $fileTmpName,
                        [
                                'folder' => 'info_files/',
                                "format" => "webp",
                                ]
                    );
                    //stores the new url in the class
                    $this->setFilePath($cloudinary['url']);

                    $conn = DB::getConnection();
                    $statement = $conn->prepare("INSERT INTO info (name, file_path, projectId) VALUES (:name, :file_path, :projectId)");
                    $statement->bindValue(':name', $this->name);
                    $statement->bindValue(':file_path', $this->filePath);
                    $statement->bindValue(':projectId', $this->projectId);
                    $statement->execute();
                    $statement2 = $conn->prepare("SELECT LAST_INSERT_ID()");
                    $statement2->execute();
                    $this->id = $statement2->fetchColumn();

                } else {
                    throw new Exception("Your file is too big!");
                }
            } else {
                throw new Exception("There was an error uploading your file!");
            }

        }

        public static function delete($id) {
                $conn = DB::getConnection();
                $statement = $conn->prepare("DELETE FROM info WHERE id = :id");
                $statement->bindValue(':id', $id);
                $statement->execute();
        }

        public static function deleteAll($id) {
                $conn = DB::getConnection();
                $statement = $conn->prepare("DELETE * FROM info WHERE projectId = :projectId");
                $statement->bindValue(':projectId', $id);
                $statement->execute();
        }




    }
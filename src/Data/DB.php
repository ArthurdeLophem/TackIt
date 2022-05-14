<?php


    namespace tackit\Data;

    use PDO;
    use tackit\Data\Config;

    abstract class DB
    {
        private static $conn;

        public static function getConnection()
        {
            if (self::$conn !== null) {
                //connection found
                return self::$conn;
            } else {
                $config = Config::getConfig();
                $database = $config['database'];
                $user = $config['user'];
                $password = $config['password'];
                $host = $config['host'];

                
                self::$conn = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8mb4', $user, $password);
                return self::$conn;
            }
        }
    }
<?php
    
    namespace tackit\core;

    use Exception;
    use tackit\Data\DB;
    use tackit\core\Burger;
    use PDO;

    class Gemeente extends Burger {

        const TYPE = 1;


        public function save() {
            $conn = DB::getConnection();
            $statement = $conn->prepare("select * from users where email = :email");
            $statement->bindValue("email", $this->email);
            $statement->execute();
            $emailDB = $statement->fetch();
            if ($emailDB) {
                throw new Exception("This email is already in use.");
            }

            $options=[
                'cost' => 12,
            ];
            $passwordHash = password_hash($this->repeatPassword, PASSWORD_DEFAULT, $options);
            $conn = DB::getConnection();
            $statement = $conn->prepare("insert into users (username, email, password, Type) values (:username, :email, :password, :type)");
            $statement->bindValue("username", $this->username);
            $statement->bindValue("email", $this->email);
            $statement->bindValue("password", $passwordHash);
            $statement->bindValue("type", self::TYPE);
            $statement->execute();


        }
        public function canLogin()
        {
            $password = $this->Password;
            $conn = DB::getConnection();
            $statement = $conn->prepare("select * from users where email = :email and Type = 1");
            $statement->bindValue(":email", $this->email);
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if($user) {
                $hash = $user["password"];
                if (password_verify($password, $hash)) {
                    return $user;
                } else {
                    throw new Exception("Wrong password");
                }
            }
            else {
                throw new Exception("You are not a gemeente");
            }
        }


    }
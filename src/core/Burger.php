<?php

        namespace tackit\core;

        use Exception;
        use tackit\Data\DB;
        use PDO;


        class Burger {

        protected $username;
        protected $email;
        protected $Password;
        protected $repeatPassword;
        protected $profile_pic;
        const TYPE = 0;
        

        public function getUsername()
        {
            return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */
        public function setUsername($username)
        {
            if (empty($username)) {
                throw new Exception("Your username is not long enough.");
            }
            $this->username = $username;
            return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */
        public function setEmail($email)
        {
            if (empty($email)) {
                throw new Exception("Your email is not long enough.");
            }
            $this->email = $email;
            return $this;
        }

        /**
         * Get the value of initialPassword
         */
        public function getPassword()
        {
            return $this->Password;
        }

        /**
         * Set the value of initialPassword
         *
         * @return  self
         */
        public function setPassword($Password)
        {
            // $uppercase = preg_match('@[A-Z]@', $Password);
            // $lowercase = preg_match('@[a-z]@', $Password);
            // $number = preg_match('@[0-9]@', $Password);
            // $specialChars = preg_match('@[^\w]@', $Password);

            // if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 6) {
            //     throw new Exception("Password should be at least 6 characters in length and should include at least one upper case letter, one number, and one special character.");
            // }
            $this->Password = $Password;
            return $this;
        }
        /**
         * Get the value of repeatPassword
         */
        public function getRepeatPassword()
        {
            return $this->repeatPassword;
        }

        /**
         * Set the value of repeatPassword
         *
         * @return  self
         */
        public function setRepeatPassword($repeatPassword)
        {
            if ($this->Password != $repeatPassword) {
                throw new Exception("The two given passwords are not the same.");
            }
            $this->repeatPassword = $repeatPassword;

            return $this;
        }
                
             
        /**
         * Get the value of profile_pic
         */
        public function getProfile_pic()
        {
            return $this->repeatPassword;
        }

        /**
         * Set the value of profile_pic
         */
        public function setProfile_pic($profile_pic)
        {
            $this->profile_pic = $profile_pic;
            return $this;
        }


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
            $statement = $conn->prepare("select * from users where email = :email and Type = 0");
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
                throw new Exception("You are not a burger");
            }
        }

        public static function getUserById($userId){
            $conn = DB::getConnection();
            $statement = $conn->prepare("select * from users where id = :id");
            $statement->bindValue("id", $userId);
            $statement->execute();
            return $statement->fetch();
        }

}

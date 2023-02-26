<?php

    class Login{

        public $sql;
        public $email;
        public $pwd;

        private $connection;

        public function isLogin($email, $pwd){
          $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

          if ($connection->connect_error){
              echo("Error couldn't connect to database".$connection->connect_error);
          }else{

            $email = $this->cleanData($email);
            $pwd = $this->cleanData($pwd);

            $sql ="SELECT `userID`, `firstName`, `lastName`, `email`, `country`, `phoneNO`, `pass_word`, `email_Access`, `status_TandC_agreement`, `occupation`, `profile_picture` FROM `user_details` 
                   WHERE `email` = '".$email."' and  `pass_word` = '".$pwd."'; ";

            $result = $connection->query($sql);
            $rowCount = $result->num_rows;

            if($rowCount == 1){

                $row = $result->fetch_assoc();

                $_SESSION['USERID'] = $row['userID'];
                $_SESSION['FNAME'] = $row['firstName'];
                $_SESSION['LNAME'] = $row['lastName'];
                $_SESSION['EMAIL'] = $row['email'];
                $_SESSION['OCCUPATION'] = $row['occupation'];
                $_SESSION['COUNTRY'] = $row['country'];
                $_SESSION['PHONENO'] = $row['phoneNO'];
                $_SESSION['PASSWORD'] = $row['pass_word'];
                $_SESSION['PROFILEPICS'] = $row['profile_picture'];
                $_SESSION['ACCESS'] = $row['email_Access'];
                $_SESSION['CONDITION'] = $row['status_TandC_agreement'];

                return true;
                $connection->close();
            }
          }

        }

        private function cleanData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

    }

?>
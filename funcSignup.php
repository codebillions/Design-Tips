<?php

    class Register{
        public $row;

        public function knowUser(){
            $cinnection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if ($connection->connect_error){
                echo "Error! could not connect to server". $connection->connect_error;
            }else{
                $sql ="SELECT * FROM `user_details`";

                $result = $connection->query($sql);
                $num_of_rec = $result->num_rec;

                if ($num_of_rec >= 1){
                    $grant ='';

                    while ($row = $result->fetch_assoc()) {
                        //code...
                    }
                    return $grant;
                }
            }
        }

        public function Reg($fname, $lname, $email, $ocpt, $country, $phoneNO, $pwd, $access, $agree, $pics){
            $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

            if($connection->connect_error){
                echo("<script>alert('Error! could not connect to database')</script>". $connection->connect_error);
            }else{

                $fname = $connection->real_escape_string($fname);
                $lname = $connection->real_escape_string($lname);
                $email = $connection->real_escape_string($email);
                $ocpt = $connection->real_escape_string($ocpt);
                $country = $connection->real_escape_string($country);
                $phoneNO = $connection->real_escape_string($phoneNO);
                $pwd = $connection->real_escape_string($pwd);
                $access = $connection->real_escape_string($access);
                $agree = $connection->real_escape_string($agree);
                $pics = $connection->real_escape_string($pics);
                
                //ID generator //
                $sql = "SELECT * FROM `user_idgenerator`";

                $result = $connection->query($sql);
                $row = $result->fetch_assoc();

                $modify ="";
                $start = $row['START'];
                $current = $row['CURRENT'];
                $string ="Usr - ";

                if ($start >= $current){
                    $current++;
                    if($current < 1000){
                        $modify ='0'.$current;
                    }
                }else{
                    $current++;
                    if($current < 1000){
                        $modify ='0'.$current;
                    }else{   
                        $modify = $current;
                    }
                      
              }

                $sql =" UPDATE `user_idgenerator` SET `CURRENT`='".$current."' ";
                $connection->query($sql);


                $sql = "INSERT INTO `user_details`(`userID`, `firstName`, `lastName`, `email`, `country`, `phoneNO`, `pass_word`, `email_Access`, `status_TandC_agreement`, `occupation`, `profile_picture`) 
                        VALUES ('".$string.$modify."', '".$fname."', '".$lname."', '".$email."', '".$country."', '".$phoneNO."', '".$pwd."', '".$access."', '".$agree."', '".$ocpt."', '".$pics."')";

                if($connection->query($sql)){
                    return true;
                }else{
                    return false;
                }
            }

            $connection->close();

        }
    }

?>
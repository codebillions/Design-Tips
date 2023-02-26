<?php
 require("DB.php");

 class picture{
     public $userID;
     private $connection;

     public function getProfilepicture(){
         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

         if($connection->connect_error){
             echo"<script>alert('Error! could not connect')</script>". $connection->connect_error;
         }else{
             $sql ="SELECT `userID`, `profile_picture` 
                    FROM `user_details` 
                    WHERE userID= '".$this->$userID."'";

                    $result = $connection->query($sql);
                    $num_of_rec = $result->num_rows;

                    if($num_of_rec >= 1){
                        $image ='';

                        while($row = $result->fetch_assoc()){
                            $image.='<tr scope="row">
                                        <td><img src='.$row['profile_picture'].' class="img-fluid" /></td>
                                    </tr>';

                            return $image;
                         }
                        // else{
                        //      echo "<br> <img src='#' class='img-fluid' />";
                        //  }
                    }
         }
     }
 }
 
 ?>
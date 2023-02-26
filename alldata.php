<?php

 session_start();
 
 require("DB.php");
 require("funcSignup.php");
 require("funcSignin.php");


 if (isset($_GET['lgn']) && $_GET['lgn'] == 'Login'){
     $user = new Login();
     $email = $_POST['email'];
     $pwd = $_POST['pwd'];
     $alert ="<script>alert('You are logedin successfully');</script>";
     $alert2 ="<script>alert('You have entered a wrong email or password Please try again with the correct details.');</script>";

     if ($user->isLogin($email, $pwd)){
         echo $alert;
         header("Location: userAcc.php");
     }else{
         header("Location:wrongpwd.php");
     }
 }

  if(isset($_GET['rg']) && $_GET['rg'] == 'Register'){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $ocpt = $_POST['ocpt'];
      $country = $_POST['country'];
      $phoneNO = $_POST['phoneNO'];
      $pwd = $_POST['pwd'];
      $pics = $_POST['picture'];
      $access = $_POST['access'];
      $agree = $_POST['agree'];
      
      
      $reg = new Register();

      if($reg->Reg($fname, $lname, $email, $ocpt, $country, $phoneNO, $pwd, $access, $agree, $pics)){
          echo("<script> alert('Your account was created successfully') </script>");
          header("Location: signin.php");
      }else{
          header("Location: signup.php?msg = Unexpected Error! Please try again");
      }
  }

?>
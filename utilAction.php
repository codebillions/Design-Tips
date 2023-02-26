<?php

require("funcSignin.php");

function protectPAge(){
    if(!isset($_SESSION['USERID']) || !isset($_SESSION['PASSWORD'])){
        header("Location: signin.php");
    }
}

if(isset($_GET['lgt']) && $_GET['lgt']=='out'){
    session_unset();
    session_destroy();
    header("Location: signin.php");
}

function knowUserPage(){
	$login = new Login();
    	if(isset($_POST['submit'])){
	   $email = $_POST['email'];
	   $pwd = $_POST['pwd'];
	   $usrID  = $_POST['usrID'];
	   echo $login->createLoginCrediential($usrID, $email, $pwd, "1");
    	}else{
	   echo "Something went wrong!";
        }
    }

?>
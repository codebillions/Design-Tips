<?php

    session_start();

    require("utilAction.php");

?>
<style>
* {
    margin: 0;
    padding: 0;
    font-family:  Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}


  body{
      background: linear-gradient(rgb(126, 214, 218), rgb(121, 137, 206));
  }

  #contaner{
      height: 95vh;
      width: 97%;
      margin-top: 20px;
      border: none; 
      border-radius: 20px;
  }


  /* menu bar */
#menuRow{
    margin: 4% 20px 0 20px;
    border: none;
    border-radius: 27px;
    background: rgb(126, 214, 218);
}

#munuCol #icon1 img{
    width: 25px;
}

#munuCol #icon1 img:hover{
    filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);
    transition: 0.5s;
}

#munuCol #icon {
    margin-left: 25px;
} 

#munuCol #icon img{
    width: 27px;
}

#munuCol #icon img:hover{
    filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);
    transition: 0.5s;
}

#btn{
    margin-left: 30px;
    background: rgb(121, 137, 206);
    border: 1px solid rgb(121, 137, 206);
}

#row h2{
    font-weight: bold;
    color: rgb(126, 214, 218);
}

#col{
    background: rgb(234, 235, 243);
}

#col p{
     color: black;
     font-weight: bold;
}

#name h5{
    font-weight: bold;
}



@media all and (max-width: 500px){


/* menu bar */
    #menuRow{
        margin-top: 11%;
        margin-left: 10px;
        width: 95%;
        border-radius: 15px;
    }

    #munuCol #icon {
        margin-left: 15px;
    }

    #contaner #btn{
        margin-top: -9%;
        margin-left: 35px;
        font-size: 15px;
    }

    #col p{
     font-weight: 300;
     font-size: 15px;
}
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iDesign.com||AccDetails</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="cdnjs/aos.css">
</head>
<body>
    
<!-- container div -->
<div id="contaner" class="container-fluid bg-white">

<div id="row" class="row p-5 ">


    <h2 class="text-center">USER DETAILS</h2>
    
    <div id="name" class="col-12">
        <?php echo"<h5 class='text-dark'>".$_SESSION['FNAME']." ".$_SESSION['LNAME']."</h5>" ?>
    </div>

    <div id="col" class="col-12 mt-3 pt-3">
        <?php echo"<p class='text-left'>userID: ".$_SESSION['USERID']."</p>"?>
    </div>

    <div id="col" class="col-12 mt-3 pt-3">
        <p class="text-left">password: *-*-********-*-*</p>
    </div>

    <div id="col" class="col-12 mt-3 pt-3">
         <?php echo"<p class='text-left'>Phone Number: ".$_SESSION['PHONENO']."</p>"?>
    </div>

    <div id="col" class="col-12 mt-3 pt-3">
        <?php echo"<p class='text-left'>Email: ".$_SESSION['EMAIL']."</p>"?>
    </div>
    
</div>

  <a id="btn" href="#" onclick="alertInfo()" class="btn btn-dark text-white btn-lg">Change Password</a>

<!-- menu bar-->
 <div id="menuRow" class="row shadow-sm p-2">

     <div id="munuCol" class="col-12-lg d-flex justify-content-center">
        <a id="icon1" href="userAcc.php" class="btn btn-sm"><img  src="images/home.png"></a>
        <a id="icon" href="tips.php" class="btn btn-sm"><img src="images/idea.png"></a>
        <a id="icon" href="contact.php" class="btn btn-sm "><img src="images/service.png"></a>
        <a id="icon" href="#" class="btn btn-sm shadow-lg"><img style="filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);" src="images/acc.png"></a>
        <a id="icon" href="utilAction.php?lgt=out" class="btn btn-sm"><img src="images/logout.png"></a>
     </div>

<!-- end of row  div -->
 </div>

<!-- end of container div -->
</div>

<script>
    let information = document.getElementById("btn");

    function alertInfo(){
       alert("Application to change password is not available now");
    }
</script>


<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init({

     });
 </script>
</body>
</html>
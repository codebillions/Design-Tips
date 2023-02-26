<?php

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
    margin: 10% 20px 0 20px;
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

 #row h2{
        font-weight: bold;
        color: rgb(126, 214, 218);
    }

#column{
     font-weight: bold;
}
#column a img{
    width:25px;
}

#column #link{
    margin-left: 50px;
}

#column1 a{
    text-decoration: none;
    color: black;
    margin-left: 39%;
    font-weight: bold;
}

#column2 a{
    text-decoration: none;
    color: black;
    margin-left: 38%;
    font-weight: bold;
}

@media all and (max-width: 500px){

    #column p{
      font-size: 14px;
      font-weight: 300;
   }

   #column1 a{
    margin-left: 33px;
    font-size: 14px;
    font-weight: 300;
  }

#column2 a{
    font-size: 14px;
    margin-left: 20px;
    font-weight: 300;
}

/* menu bar */
    #menuRow{
        margin-top: 18%;
        margin-left: 10px;
        width: 95%;
        border-radius: 15px;
    }

    #munuCol #icon {
        margin-left: 15px;
    }

   
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iDesign.com||Contact</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="cdnjs/aos.css">
</head>
<body>
    
<!-- container div -->
<div id="contaner" class="container-fluid bg-white">

<div id="row" class="row p-5">

        <h2 class="text-center">GET IN TOUCH</h2>

    <div style="background: rgb(234, 235, 243);" id="column" class="col-12 mt-5 pt-2">
        <p class="text-center">Send a text to +234 809 612 7768 </p>
    </div>

     <div style="background: rgb(234, 235, 243);" id="column1" class="col-12 mt-3 p-2">
         <a href="" >ideaDesignofficial@gmail.com</a>
    </div>

     <div style="background: rgb(234, 235, 243);" id="column2" class="col-12 mt-3 p-2">
       <a href="" class="text-center">ideaDeshelpcenter@gmail.com</a>
    </div>

     <div style="background: rgb(234, 235, 243);" id="column" class="col-12 mt-5 text-center p-2">
        <a href="#"><img src="Bootstrap/bootstrap-icons-1.9.1/facebook.svg"></a>
        <a href="#"><img id="link" src="Bootstrap/bootstrap-icons-1.9.1/instagram.svg"></a>
    </div>
</div>

<!-- menu bar-->
 <div id="menuRow" class="row shadow-sm p-2">

     <div id="munuCol" class="col-12-lg d-flex justify-content-center">
        <a id="icon1" href="userAcc.php" class="btn btn-sm"><img  src="images/home.png"></a>
        <a id="icon" href="tips.php" class="btn btn-sm"><img src="images/idea.png"></a>
        <a id="icon" href="#" class="btn btn-sm shadow-lg"><img style="filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);" src="images/service.png"></a>
        <a id="icon" href="accountDetails.php" class="btn btn-sm"><img src="images/acc.png"></a>
        <a id="icon" href="utilAction.php?lgt=out" class="btn btn-sm"><img src="images/logout.png"></a>
     </div>

<!-- end of row  div -->
 </div>

<!-- end of container div -->
</div>



<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init({

     });
 </script>
</body>
</html>
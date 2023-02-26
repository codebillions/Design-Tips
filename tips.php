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

  #dropdownBtn{
      width: 100%;
  }

  #links{
       width: 100%;
  }

  /* menu bar */
#menuRow{
    margin: 24% 20px 0 20px;
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


@media all and (max-width: 500px){


/* menu bar */
    #menuRow{
        margin-top: 65%;
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
    <title>iDesign.com||USER-tips</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="cdnjs/aos.css">
</head>
<body>
    
<!-- container div -->
<div id="contaner" class="container-fluid bg-white">
<!-- row div -->
<div class="row">

<!-- dropdown || Design tips -->
<div class="col-12 pt-5 px-3">

<div class="dropdown">
    <a id="dropdownBtn" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
        aria-expanded="false">
        Design Thinking
    </a>

    <ul id="links" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">---</a></li>
        <li><a class="dropdown-item" href="#">---</a></li>
        <li><a class="dropdown-item" href="#">---</a></li>
    </ul>
</div>

</div>

<!-- dropdown || Design tips -->
<div class="col-12 pt-5 px-3">

<div class="dropdown">
    <a id="dropdownBtn" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
        aria-expanded="false">
       Graphic Design
    </a>

    <ul id="links" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">---</a></li>
        <li><a class="dropdown-item" href="#">---</a></li>
        <li><a class="dropdown-item" href="#">---</a></li>
    </ul>
</div>

</div>

<!-- dropdown || Design tips -->
<div class="col-12 pt-5 px-3">

<div class="dropdown">
    <a id="dropdownBtn" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
        aria-expanded="false">
        UI/UX
    </a>

    <ul id="links" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">---</a></li>
        <li><a class="dropdown-item" href="#">---</a></li>
        <li><a class="dropdown-item" href="#">---</a></li>
    </ul>
</div>

</div>

<!-- end of row div -->
</div>

<!-- menu bar-->

 <div id="menuRow" class="row shadow-sm p-2">

     <div id="munuCol" class="col-12-lg d-flex justify-content-center">
        <a id="icon1" href="userAcc.php" class="btn btn-sm"><img  src="images/home.png"></a>
        <a id="icon" href="#" class="btn btn-sm shadow-lg"><img style="filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);" src="images/idea.png"></a>
        <a id="icon" href="contact.php" class="btn btn-sm"><img src="images/service.png"></a>
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
<?php

?>


<style>

* {
    margin: 0;
    padding: 0;
    font-family:  Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

    #navbarSupportedContent{
  border: none;
  margin-left: 30%;
}

#section1{
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.3)), url("images/computing.jpg");
    background-size: cover;
    background-position: center;
    height: 100vh;
}

/* contacts */
#row h2{
        font-weight: bold;
        margin-top: 13%;
        color: rgb(126, 214, 218);
    }

#columnA{
     font-weight: bold;
     margin-top: 55px;
     color: white;
}
#columnA a img{
    width:25px;
}

#columnA #link{
    margin-left: 50px;
}

#columnB{
     font-weight: bold;
}
#columnB a img{
    width:25px;
    filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);
}

#columnB #link{
    margin-left: 50px;
}

#column1 a{
    text-decoration: none;
    margin-left: 39%;
    font-weight: bold;
    color: white;
}

#column2 a{
    text-decoration: none;
    margin-left: 38%;
    font-weight: bold;
    color: white;
}

/* footer */
#footer{
    margin-top: 8%;
}



/* portrait */
@media all and (max-width: 500px){

        #navbarSupportedContent{
            margin: 10px 0 0 0;
        }
    
     /* contacts */

 #row h2{
     margin-top: 50%;
 }
     #columnA p{
      font-size: 14px;
      font-weight: 300;
   }

   #columnB p{
      font-size: 14px;
      font-weight: 300;
   }

   #column1 a{
    margin-left: 45px;
    font-size: 14px;
    font-weight: 300;
  }

    #column2 a{
        font-size: 14px;
        margin-left: 30px;
        font-weight: 300;
    }

      /* footer */
        #footer{
            margin-top: 12%;
            font-size: 12px;
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

<!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-4">
            <div class="container-fluid">

                <a href="#" class="navbar-brand">
                    <img class="img-fluid" src="images/logo.png" style="width: 80px;">
                   ideaDesign
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle-navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse  bg-dark" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="margin-left: 20px;" href="home.php" class="nav-link" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left: 20px;" href="about.php" class="nav-link"> About Us</a>
                        </li>

                        <li  class="nav-item dropdown">
                            <a style="margin-left: 20px;" href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="signup.php" class="dropdown-item">signUp</a></li>
                                 <li><a href="signin.php" class="dropdown-item">SignIn</a></li>
                            </ul>
                        </li>


                        <!-- first ul ends here -->
                    </ul>

                </div>
                <!-- first div end here -->
            </div>
    </nav>


    <!-- first section -->
<section id="section1" class="container-fluid">

      
<div id="row" class="row px-5">

        <h2 class="text-center">GET IN TOUCH</h2>

    <div  id="columnA" class="col-12 pt-2">
        <p class="text-center">Send a text to +234 809 612 7768 </p>
    </div>

     <div  id="column1" class="col-12 mt-3 p-2">
         <a href="" >ideaDesignofficial@gmail.com</a>
    </div>

     <div  id="column2" class="col-12 mt-3 p-2">
       <a href="" >ideaDesignhelpcenter@gmail.com</a>
    </div>

     <div  id="columnB" class="col-12 mt-5 text-center p-2">
        <a href="#"><img src="Bootstrap/bootstrap-icons-1.9.1/facebook.svg"></a>
        <a href="#"><img id="link" src="Bootstrap/bootstrap-icons-1.9.1/instagram.svg"></a>
    </div>
</div>
 

    <!-- footer -->
     <div id="footer" class="card-footer text-muted text-center text-white p-3">
         &copy: Codebillion$ 2022 All rights reserved
    </div>

</section>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>


 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init({

     });
 </script>
</body>
</html>
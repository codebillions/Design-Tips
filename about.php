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
    height: 115vh;
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.3)), url("images/computing.jpg");
    background-size: cover;
    background-position: center;
}


#row1{
    height: 50vh;
}

#column1{
    margin-top: 12%;
    margin-right: -20px;
}

#column2{
    margin-top: 30px;
}

#column3{
    margin-top: 30px;
}

#section1 a{
    margin-left: 39%;
    width: 23%;
    margin-top: 17%;
    background: rgb(126, 214, 218);
}

/* footer */
#footer{
    margin-top: 6%;
}



@media all and (max-width: 500px){

 #navbarSupportedContent{
     margin: 10px 0 0 0;
 }

 #section1{
    height: 145vh;
}

#column1{
    margin-top: 50%;   
}

#column1 h3{
    font-size: 16px;
}

#column2 h3{
    font-size: 16px;
}

#column3 h3{
    font-size: 16px;
}

#section1 a{
    margin-left: 25%;
    width: 50%;
    margin-top: 93%;
    font-size: 15px;
}

#footer{
    margin-top: 17%;
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
    <title>iDesign.com</title>
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
                            <a style="margin-left: 20px;" href="home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left: 20px;" href="#" class="nav-link active" aria-current="page"> About Us</a>
                        </li>

                        <li  class="nav-item dropdown">
                            <a style="margin-left: 20px;" href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                 More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a href="signin.php" class="dropdown-item">Sign in</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="contact2.php" class="dropdown-item">Contact Us</a></li>
                            </ul>
                        </li>


                        <!-- first ul ends here -->
                    </ul>
                    <!-- search
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </div>
                <!-- first div end here -->
            </div>
        </nav>

        <section id="section1" class="container-fluid">

            <div id="row1" class="row mx-5" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500" data-aos-once="false">
               <div id="column1" class="col">
                    <h3 class="text-center text-white">
                            To produce a successful user experience, every designer needs solid work flow patterns and organizational skills. Our group is here to assist designers in streamlining their workflow.
                    </h3>
               </div>

               <div id="column2" data-aos="fade-up" data-aos-delay="620" data-aos-duration="2500" data-aos-once="false">
                    <h3 class="text-center text-white">
                        To assist you in creating your design user experience for your projects, we provide free suggestions and online training with highly skilled designers.
                    </h3>
               </div>

                <div id="column3" data-aos="fade-up" data-aos-delay="700" data-aos-duration="3500" data-aos-once="false">
                    <h3 class="text-center text-white">
                        Our goal is to assist you in honing your design abilities in graphic design, motion graphics, and user experience design.

                            Do you find us to be helpful? Enhance your abilities! To begin going, click the icon below.
                    </h3>
               </div>
            </div>

            <a href="signup.php" class="btn btn-lg text-center text-white p-2" data-aos="fade-up" data-aos-delay="700" data-aos-duration="3700" data-aos-once="true">GET STARTED</a>

               
            <!-- footer div -->
            <div id="footer" class="card-footer text-muted text-center text-white p-3">
                 &copy:SMART TECH 2022 All rights reserved
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
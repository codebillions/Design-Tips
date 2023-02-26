<?php

?>

<style>
   * {
    margin: 0;
    padding: 0;
    font-family:  Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}

/* HEADER FONT: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; */

html {
    scroll-behavior: smooth black;
}

/* #image{
    width: 20px;
    filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);
    margin-top: -5px;
} */

#navbarSupportedContent{
  border: none;
  margin-left: 30%;
}

/* header section */
#section1{
    background: black;
    height: 100vh;
}

#row1{
    height: 50vh;
}

#headimg{
    margin-top: 6.5%;
    height: 300px;
    border: none;
    width: auto;
    position: relative;
}

#headimg img{
    object-fit: cover;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}

#callout{
    height: auto;
    width: 45%;
    margin-left: 50px;
}

#callout h1{
      font-weight: bold;
      text-align: left;
}

#callout h5{
      text-align: left;
      color: rgb(126, 214, 218);
}

#callout p{
      text-align: left;
      margin-top: 30px;
}
/* #column1{
    margin-top: 5%;
    margin-right: -20px;
}

#column2{
    background: linear-gradient(rgb(126, 214, 218), rgb(121, 137, 206));
     border: none;
     border-radius: 20px;
     margin-top: 8%;
     height: 50vh;
     margin-right: -5px;
} */

#column3{
     margin-top: 8%;

}

#column4{
     margin-top: 8%;
}

 /* video section */

#section2{
    height: 100vh;
    position: relative;
    overflow: hidden;
}

@media(min-width: 600px;){
    #section2{
        height: 100vh;
    }
}

#section2 video{
    object-fit: cover;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}



.callout{
    position: relative;
    display: block;
    justify-content: center;
    align-items: center;
    height: 100%;
    z-index: 10;
    margin-top: 60px;
}

/* .callout h1{
    margin-right: 100px;
}

.callout P{
    margin-right: 17%;
} */

.support{
    position: absolute;
    bottom: 60px;
    display: block;
    letter-spacing: 1px;
    z-index: 10;
    margin-left: 40%;
}

.support a{
    width: 150%;
    background: rgb(126, 214, 218);
}

/* section3 */
#section3{
    background: black;
    height: 100vh;
    position: relative;
    overflow: hidden;
}

#row3{
    margin-top: 30vh;
}

#column5{
    height: 50vh;
}

#column5 img{
 border: 5px solid;
 border-color: rgb(121, 137, 206);
 border-radius: 20px;
 height: 50vh;
}

#column6{
    background: linear-gradient(rgb(126, 214, 218), rgb(121, 137, 206));
    border: none;
    border-radius: 20px;
    height: auto;
    margin-left: -20px;
}

#column6 h1{
    margin-top: 80px;
}

/* section4 */
#section4{
    background: black;
    height: 100vh;
    position: relative;
    overflow: hidden;
}

#row4{
    margin-top: 30vh;
}

#column7{
    height: 50vh;
}

#column7 img{
 border: 5px solid;
 border-color: rgb(121, 137, 206);
 border-radius: 20px;
 height: 50vh;
}

#column8{
    background: linear-gradient(rgb(126, 214, 218), rgb(121, 137, 206));
    border: none;
    border-radius: 20px;
    height: auto;
    margin-left: -20px;
}

#column8 h1{
    margin-top: 80px;
}

/* section 5 */

#section5{
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.3)), url("images/computing.jpg");
    background-size: cover;
    background-position: center;
}

#column9 h3{
    padding-top: 13%; 
}

#section5 a{
    margin: 90px 0 0 38%;
     width: 25%;
     background: rgb(126, 214, 218);
}

/* footer */
#footer{
    margin-top: 17%;
}





/* portrait */
@media all and (max-width: 500px){

 #navbarSupportedContent{
     margin: 10px 0 0 0;
 }

 /* header section */
 #callout{
    width: 65%;
    margin-top: 23%;
    margin-left: 10px;
}

#callout h1{
    margin-top: 40%;
}

#callout p{
      text-align: left;
      margin-top: 15px; 
      font-size: 13px;
}

 #section1{
     height: 135vh;
 }

 #column1{
    display: none;
 }

 #column2{
     height: auto;
 }

 #row2{
     margin-top: 30px;
 }

 #column3{
     margin: 20px;
 }

 #column4{
     margin: 20px;
 }


 /* video section */
 .support a{
    width: 130%;
}

.support {
   margin-left: 20%;
}

.callout h1{
    font-size: 20px;
}

.callout p{
    font-size: 14px;
}

/* section 3 */
#section3{
        height: 110vh;
    }

    #row3{
     margin-top: 20vh;
   }

   #column5 img{
    height: 35vh;
}

#column6{
    margin:-10% 0 0 0;
}

#column6 h1{
    margin-top: 20px;
    font-size: 20px;
}

#column6 p{
    font-size: 14px;
}


/* section4 */
#section4{
        height: 110vh;
    }

    #row4{
     margin-top: 20vh;
   }

   #column7 img{
    height: 35vh;
}

#column8{
    margin:-10% 0 0 0;
}

#column8 h1{
    margin-top: 20px;
    font-size: 20px;
}

#column8 p{
    font-size: 14px;
}

  /* section5 */
#column9 h3{
    padding-top: 45%; 
    font-size: 17px;
}

#section5 a{
    margin: 80px 0 0 26%;
     width: 50%;
     font-size: 15px;
}

#footer{
    margin-top: 47%;
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
                            <a style="margin-left: 20px;" href="#" class="nav-link active" aria-current="page">Home</a>
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
                                <li><a href="#section3" class="dropdown-item">Design Thinking</a></li>
                                <li><a href="#section4" class="dropdown-item">UI/UX</a></li>
                                 <li><a href="signin.php" class="dropdown-item">Sign in</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="contact2.php" class="dropdown-item">Contact Us</a></li>
                            </ul>
                        </li>


                        <!-- first ul ends here -->
                    </ul>

                </div>
                <!-- first div end here -->
            </div>
        </nav>

        <!-- home section -->
            <section id="section1" class="container-fluid">

             <!-- Firs section div -->
                    <div id="row1" class="row">

                            <div id="headimg" class="col">

                                <img src="images/dh.jpg" class="img-fluid">

                                        <div id="callout" class="callout text-center">
                                            <h1 class="text-white" data-aos="fade-in" data-aos-delay="700" data-aos-duration="1000" data-aos-once="true">
                                                GET FREE DESIGN HACKS</h1>
                                            <h5 class="text-left" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1200" data-aos-once="true">
                                                Design like a pro</h5>

                                             <p class="text-white" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200" data-aos-once="true">
                                                To produce the greatest result every desgner
                                                must have a nice workflow and a positive user experience <br>
                                                Our
                                                hacks aid in the better creation of your designs.
                                            </p>   
                                        </div>

                            </div>

                        </div>

                        <div id="row2" class="row m-5">

                            <div id="column3" class="col-md-6 p-3 text-left text-white" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000" data-aos-once="true">
                                <h5 class="mt-3">Enhance your design thinking and pattern. Expand your understanding in this space.</h5>
                            </div>
                             <div id="column4" class="col-md-6 p-3 text-left text-white" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" data-aos-once="true">
                                 <h5 class="mt-3">Designers dont stop learning, they keep learnig and building. Recognize how users engage with you</h5>
                             </div>

                        </div>

               <!-- Firs section div ends here -->
                    </div>
            </section>


            <!-- video section -->

            <section id="section2" class="container-fluid video-container">

                    <video src="videos/girl.mp4" autoplay loop playsinline muted>

                    </video>

                  <div class="callout text-center">
                      <h1 class="text-white" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" data-aos-once="false">
                          DEVELOPE A PASSION FOR YOUR DESIGN</h1>
                      <p class="text-white" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1200" data-aos-once="false">
                          Make users or viewers fall in love with your design.</p>
                  </div>

                  <div class="support">
                        <a class="btn btn-lg text-center text-white"
                        data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-once="false" href="signup.php" >GET STARTED</a>
                  </div>

            </section>

            <!-- section 3 -->

            <section id="section3" class="container-fluid">

                <div id="row3" class="row mx-5">
                    <div id="column5" class="col-md-6"
                    data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" data-aos-once="false">
                        <img src="images/creative.jpg" class="img-fluid">
                    </div>

                    <div id="column6" class="col-md-6"
                    data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" data-aos-once="false">
                        <h1 class="text-center">DESIGN THINKING</h1>
                        <p class="text-center text-white mt-4 mx-3">Design thinking is a non-linear, iterative process that teams use to understand users, 
                            challenge assumptions, redefine problems and create innovative solutions to prototype and test.</p>
                    </div>
                </div>

            </section>

            <!-- section 4 -->

            <section id="section4" class="container-fluid">

               <div id="row4" class="row mx-5">
                    <div id="column7" class="col-md-6"
                    data-aos="fade-up" data-aos-delay="400" data-aos-duration="1100" data-aos-once="false">
                        <img src="images/draw.jpg" class="img-fluid">
                    </div>

                    <div id="column8" class="col-md-6"
                    data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200" data-aos-once="false">
                        <h1 class="text-center">UI/UX BASICS</h1>
                        <p class="text-center text-white mt-4 mx-3">Design focuses on anticipating what users might need to do and ensuring that the 
                            interface has elements that are easy to access, understand, and use to facilitate those actions.
                        </p>
                    </div>
                </div>

            </section>

            <!-- section5 -->
            <section id="section5" class="container-fluid">

                <div id="row5" class="row mx-5">
                    <div id="column9" class="col" 
                    data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" data-aos-once="false">
                        <h3 class="text-center text-white">Create an account and signin to begin receiving free weekly tips(hacks) 
                            to improve your pattern and design thinking</h3> 
                    </div>
                </div>

                 <a data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" data-aos-once="false"
                  class="btn btn-lg text-center text-white" href="signup.php" >GET STARTED</a>

                  <!-- footer div -->
                    <div id="footer" class="card-footer text-muted text-center text-white p-3">
                        &copy: Codebillion$ 2022 All rights reserved
                    </div>
            </section>


 <script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init();
 </script>

</body>
</html>
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

#row1{
    height: 100vh;
}

#column1{
    margin-top: 10%;
    width: 55%;
    margin-left: 22%;
}

#column2{
    width: 55%;
    margin-left: 22%;
    margin-top: -5%;
}

label{
    color: white;
}

#button{
    width: 20%;
    background: rgb(126, 214, 218);
    margin-left: 40%;
    margin-top: 20%;
}

/* footer */
#footer{
   margin-top: 23%;
}



/* portrait */
@media all and (max-width: 500px){


        #button{
        width: 60%;
        font-size: 18px;
        margin: 70% 0 0 20%;
      }

      /* footer */
        #footer{
            margin-top: 60%;
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

    <!-- first section -->
<section id="section1" class="container-fluid">

      
  <div id="btndiv" class="col-12">
   <a id="button" href="signin.php" name="submit" class="btn btn-lg text-white p-2" type="submit">Try Again</a>
</div>

    <!-- footer -->
     <div id="footer" class="card-footer text-muted text-center text-white p-3">
         &copy: Codebillion$ 2022 All rights reserved
    </div>


</section>

<script>
    alert("You have entered a wrong email or password Please try again with the correct details.");
</script>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init({

     });
 </script>
</body>
</html>
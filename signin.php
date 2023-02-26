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
}

/* footer */
#footer{
    margin-top: -8%;
}



/* portrait */
@media all and (max-width: 500px){

        #navbarSupportedContent{
            margin: 10px 0 0 0;
        }

        #section1{
        height: 100vh;
        }

        #column1{
        margin: 30% 0 0 0;
        width: 100%;
        }

        #column2{
        margin: -20% 0 0 0;
        width: 100%;
        }


        #button{
        width: 60%;
        font-size: 18px;
        margin: -20% 0 0 20%;
      }

      /* footer */
        #footer{
            margin-top: -26%;
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
    <title>iDesign.com||signin</title>
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
                                 <li><a href="signup.php" class="dropdown-item">Sign up</a></li>
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


    <!-- first section -->
<section id="section1" class="container-fluid">

         <!-- form section with validation -->

  <form action="alldata.php?lgn=Login" method="POST" id="row1" class="row g-3 m-5 needs-validation" novalidate >
        <div id="column1" class="col-12">
            <label for="validationCustom01" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="validationCustom01" required>

            <div class="invalid-feedback">
                provide a valid email
            </div>
        </div>

        <div id="column2" class="col-12">
            <label for="validationCustom02" class="form-label">Password</label>
            <input name="pwd" type="password" class="form-control" id="validationCustom02"  required>

            <div class="invalid-feedback">
                please provide a valid password
            </div>
        </div>
        
        <div class="col-12">
            <button id="button" name="submit" class="btn btn-lg text-white p-2" type="submit">Login</button>
        </div>
    </form>

    <!-- footer -->
     <div id="footer" class="card-footer text-muted text-center text-white p-3">
         &copy: Codebillion$ 2022 All rights reserved
    </div>

</section>

<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

<!-- form script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init({

     });
 </script>
</body>
</html>
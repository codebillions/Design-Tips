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
    height: 130vh;
}

#row1{
    height: 100vh;
}

#column1{
    margin-top: 12%;
}

#column2{
    margin-top: 12%;
}

#column3{
    margin-top: 12%;
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
    margin-top: 10%;
}



/* portrait */
@media all and (max-width: 500px){

        #navbarSupportedContent{
            margin: 10px 0 0 0;
        }

        #section1{
        height: 200vh;
        }

        #column1{
        margin-top: 30%;
        }

        #button{
        width: 60%;
        font-size: 18px;
        margin: 50px 0 0 20%;
      }

      /* footer */
        #footer{
            margin-top: 140%;
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
    <title>iDesign.com||signUp</title>
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

        <!-- first section -->
         <section id="section1" class="container-fluid">

         <!-- form section with validation -->

 <form action="alldata.php?rg=Register" method="POST" id="row1" class="row g-3 m-5 needs-validation" novalidate enctype="multipart/formm-data">
        <div id="column1" class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input name="fname" type="text" class="form-control" id="validationCustom01" required >
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="invalid-feedback">
                please provide your First Name
            </div>
        </div>

        <div id="column2" class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input name="lname" type="text" class="form-control" id="validationCustom02"  required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="invalid-feedback">
                please provide your Last Name
            </div>
        </div>

        <div id="column3" class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
                <input name="email" placeholder="mark@gmail.com" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                    required>
                <div class="invalid-feedback">
                    Please provide a valid email.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Occupation</label>
            <select name="ocpt" class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>Graphic Design</option>
                <option>UI/UX Design</option>
                <option>Web Development</option>
                <option>Motion Graphics</option>
            </select>
            <div class="invalid-feedback">
                Please select your occupation.
            </div>
        </div>

        <div  class="col-md-4">
            <label for="validationCustom03" class="form-label">Country</label>
            <input name="country" placeholder="Nigeria" type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid Country.
            </div>
        </div>
        
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Phone Number</label>
            <input name="phoneNO" placeholder="(+234) 002 030 0509" type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Please provide a valid Phone number.
            </div>
        </div>

        <div  class="col-md-4">
            <label for="validationCustom03" class="form-label">Password</label>
            <input name="pwd" placeholder="password must contain 6 to 8 characters" type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid password.
            </div>
        </div>

        <div  class="col-md-4">
            <label for="validationUserProfilePics" class="form-label">Upload a profile pictiure</label>
            <input name="picture" type="file" id="validationUserProfilePics" class="form-control" onchange="readURL(this)" accept="image/*" required>
            <div class="invalid-feedback">
                please upload a profile picture.
            </div>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input name="access" class="form-check-input" type="checkbox" value="send me email" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                   Access to send you email
                </label>
                <div class="invalid-feedback">
                    You must agree that we send you email. All notification are forwarded to your email.
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input name="agree" class="form-check-input" type="checkbox" value="agreed" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>

        
        <div class="col-12">
            <button id="button" name="submit" class="btn btn-lg text-white p-2" type="submit">REGISTER</button>
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
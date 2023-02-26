<?php
      session_start();
    require("utilAction.php");

     require("dspl-ProfilePicture-In-Useracc.php");
     require("funcSignup.php");
    

     protectPAge();

      $profile = new picture();
      $profile->usrID =  $_SESSION['USERID'];

      $users = new Register();
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

body{
    background: linear-gradient(rgb(126, 214, 218), rgb(121, 137, 206));
}

#textcolumn h1{
    margin-left: 30%;
    padding-top: 50px;
    font-weight: bold;
}

#textcolumn p{
    margin-left: 30%;
    font-weight: bold;
}


#imagecolumn{
    border: 3px solid black;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    margin-left: 20%;
    background: black;
    position: relative;
}

#imagecolumn img{
    object-fit: cover;
    position: absolute;
    width: 150px;
    height: 144px;
    border: none;
    border-radius: 50%;
    top: 0;
    left: 0;
}

#imagecolumn input{
     object-fit: cover;
    position: relative;
    object-fit: cover;
    top: 50%;
     width: 200px;
    left: 0;
    display: none;
}

#imagecolumn label{
    object-fit: cover;
    background: linear-gradient(rgb(126, 214, 218), rgb(121, 137, 206));
    position: relative;
    object-fit: cover;  
    width: 150px;
    margin-left: -15px;
    border-radius: 5px;
    border: 2px solid white;
    top: 77%;
    left: 0;
    font-weight: bold;
    color: white; 
    cursor: pointer;
    display: none;
}

#imagecolumn label:hover{
    font-size: 15px;
    transition: 0.5s;
}

#div2{
    height: 70vh;
    margin-top: 25px;
    width: 95%;
    border-radius: 15px;
    border: none;
}

/* cards */
#cardsColumn{
    margin-top: 70px;
}

#cards{
    width: 50%;
    border: 3px solid rgb(121, 137, 206);
    border-radius: 10px; 
    margin-left: 50%;
}

#cards img{
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
}

#cards #cardBody a{
    background: rgb(121, 137, 206);
    border: 1px solid rgb(121, 137, 206);
}

/* second card */
#cards2{
    width: 50%;
    border: 3px solid rgb(121, 137, 206);
    border-radius: 10px; 
    margin-left: 23%;
}

#cards2 img{
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
}

#cards2 #cardBody a{
    background: rgb(121, 137, 206);
    border: 1px solid rgb(121, 137, 206);
}

/* third card */
#cards3{
    width: 50%;
    border: 3px solid rgb(121, 137, 206);
    border-radius: 10px; 
    margin-left: -6%;
}

#cards3 img{
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
}

#cards3 #cardBody a{
    background: rgb(121, 137, 206);
    border: 1px solid rgb(121, 137, 206);
}

/* menu bar */
#menuRow{
    margin: 100px 20px 0 20px;
    border: none;
    border-radius: 27px;
    background: rgb(126, 214, 218);
}

#munuCol #icon1 img{
    width: 25px;
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





/* responsive */
@media all and (max-width: 500px){


/* menu bar */
#menuRow{
    margin-top: 85px;
    margin-left: 10px;
    width: 95%;
    border-radius: 15px;
}

#munuCol #icon {
    margin-left: 15px;
}

#div2{
    margin-top: 20px;
    border-radius: 10px;
}

#textcolumn{
    margin-top: 18px;
}

#textcolumn h1{
    margin-left: 13px;
    padding-top: 0;
    font-size: 20px;
}

#textcolumn p{
    margin-left: 13px;
    font-size: 15px;
}

#imagecolumn{
    width: 100px;
    height: 100px;
    margin-left: 15%;
    margin-top: 18px;
}

#imagecolumn img{
    width: 120px;
    height: 94px;
}

#imagecolumn label{
    width: 120px;
    font-size: 12px;
    margin-left: -25px;
}

#imagecolumn label:hover{
    width: 120px;
    font-size: 12px;
    margin-left: -25px;
}

/* cards */
#cardsColumn{
    margin-top: 50px;
   
}

#cards{
    width: 150%;
    border: 3px solid rgb(121, 137, 206);
    border-radius: 10px; 
    margin-left: 10%;
}

#cards h6{
    font-size: 15px;
}

#cardsColumn #cards2{
    display: block;
    margin:0;
    width: 150%;
     margin-left: 60%;
}

#cards3{
    display: none;
}

}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iDesign.com||USER</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="cdnjs/aos.css">
</head>
<body>

<!-- first div -->
<div class="container-fluid">

    <div id="roww1" class="row mt-3">
        <div id="textcolumn" class="col-6">
            <?php echo"<h1>Hi ".$_SESSION['FNAME']."</h1>"?>
            <p>All notification are forwarded to your email</p>
        </div>

        <div id="imagecolumn" class="col-6">

           <img id="photo" src="images/profile.jpg" class="img-fluid"> 
           <input name="picture" type="file" id="file" class="" onchange="readURL(this)" accept="image/*">
            <label for="file" class="text-center p-2" id="uploadBtn">Upload Photo</label>
            
        </div>
    </div>
<!-- first div ends here -->
</div>

<div id="div2" class="container-fluid bg-white shadow-lg">

<!-- CARDS -->
 <div class="row">

    <div id="cardsColumn" class="col-4">

     <div id="cards" class="cards bg-dark">
        <img src="images/think.jpg" class="card-img-top img-fluid">

        <div id="cardBody" class="card-body">
            <h6 class="card-title text-left text-white text-fluid">Design Thinking</h6>

            <a href="#" class="btn btn-primary btn-sm mt-2">Learn More</a>
        </div>

     </div>

    </div>

    <div id="cardsColumn" class="col-4">

      <div id="cards2" class="cards bg-dark">
        <img src="images/draw.jpg" class="card-img-top img-fluid">

        <div id="cardBody" class="card-body">
            <h6 class="card-title text-left text-white">UI Basics</h6>

            <a href="#" class="btn btn-primary btn-sm mt-2">Learn More</a>
        </div>

     </div>

    </div>

    <div id="cardsColumn" class="col-4">

      <div id="cards3" class="cards bg-dark">
        <img src="images/dev.jpg" class="card-img-top img-fluid">

        <div id="cardBody" class="card-body">
            <h6 class="card-title text-left text-white">Development</h6>

            <a href="#" class="btn btn-primary btn-sm mt-2">Learn More</a>
        </div>

     </div>

    </div>

    <!-- end of row  div -->
 </div>

 <!-- menu bar-->

 <div id="menuRow" class="row shadow-sm p-2">

     <div id="munuCol" class="col-12-lg d-flex justify-content-center">
        <a id="icon1" href="#" class="btn btn-sm shadow-lg"><img style="filter: invert(1) sepia(1) saturate(3) hue-rotate(275deg);" src="images/home.png"></a>
        <a id="icon" href="tips.php" class="btn btn-sm"><img src="images/idea.png"></a>
        <a id="icon" href="contact.php" class="btn btn-sm"><img src="images/service.png"></a>
        <a id="icon" href="accountDetails.php" class="btn btn-sm"><img src="images/acc.png"></a>
        <a id="icon" href="utilAction.php?lgt=out" class="btn btn-sm"><img src="images/logout.png"></a>
     </div>

<!-- end of row  div -->
 </div>
 
<!-- second div ends here -->
</div>



    
<script>
    // declaring html element
    const imgDiv = document.querySelector('#imagecolumn');
    const img = document.querySelector('#photo');
    const file = document.querySelector('#file');
    const uploadBtn = document.querySelector('#uploadBtn');

    //if user hover on the img

    imgDiv.addEventListener('mouseenter', function(){

        uploadBtn.style.display = "block";

    });

    //if user hover out of the img

    imgDiv.addEventListener('mouseleave', function(){

        uploadBtn.style.display = "none";

    });

    //when the user choosees an image
    file.addEventListener('change', function(){

        const choosedFile = this.files[0];

        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function(){
                img.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
        }

    });
</script>



<script src=" Bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>

 <script src="cdnjs/aos.js"></script>

 <script>
     AOS.init({

     });
 </script>
</body>
</html>
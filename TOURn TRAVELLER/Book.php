<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Here</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

       

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>
<?php include_once "nav.php"?>
   

    <div class="icons">
       
     <a href="login.php">  <i class="fas fa-user" id="login-btn">  </i> </a>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>



<!-- book section starts  -->

<section class="book" id="book">
    <div><br>
    <br><br></div>
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book.jpg" alt="">
        </div>

        <form action="#" method="POST">
            <div class="inputBox">
                <h3>Name</h3>
                <input type="text" name="txt_name" placeholder="Enter Name">
            </div>
            <div class="inputBox">
                <h3>Mobail</h3>
                <input type="number" name="txt_mob" placeholder="Enter Mobail No">
            </div>

            <div class="inputBox">
                <h3>Address</h3>
                <textarea name="txt_address" style="width: 100%;  border-radius: 10px"> </textarea>
            </div>

            <div class="inputBox">
                <h3>Destination</h3>
                <input type="text" name="txt_destination" placeholder="Place Name">
            </div>
            <div class="inputBox">
                <h3>How many peoples</h3>
                <input type="number" name="txt_number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>Arrivals date</h3>
                <input type="date" name="txt_sdate">
            </div>
            <div class="inputBox">
                <h3>leaving Date</h3>
                <input type="date" name="txt_edate">
            </div>
            <input type="submit" class="btn" value="book now" name="btn_save">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Mumbai</a>
            <a href="#">Pune</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">home</a>
            <a href="Book.php">book</a>
            <a href="packages.php">packages</a>
            <a href="services.php">services</a>
            <a href="#">gallery</a>
            <a href="about_us.php">About Us</a>
            <a href="contact.php">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com">facebook</a>
            <a href="http://www.instagram.com">instagram</a>
            <a href="http://www.twitter.com">twitter</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> @ </span> | BCA GROUP </h1>

</section>
</body>
</html>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<?php

   $cn = mysqli_connect("localhost","root","","turism");


    if(isset($_POST['btn_save']))
    {

        mysqli_query($cn, "insert into destination(name,mobail,address,destination,how_many_peoples,start_date,leaving_date)values('".$_POST['txt_name']."','".$_POST['txt_mob']."','".$_POST['txt_address']."','".$_POST['txt_destination']."','".$_POST['txt_number']."','".$_POST['txt_sdate']."','".$_POST['txt_edate']."');");
 
     echo "<script> window.location='show.php' </script>";

    }

?>

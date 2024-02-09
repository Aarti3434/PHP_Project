<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>

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

    <a href="#" class="logo"><span>J</span>ourney</a>

    <?php include_once "nav.php"?>
    <div class="icons">
       
<a href="login.php">  <i class="fas fa-user" id="login-btn">  </i> </a>    </div>

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

<!-- contact section starts  -->

<section class="contact" id="contact">
    <div><br>
        <br><br></div>
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contactus.jpg" alt="">
        </div>

        <form action="#" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="name" name="txt_name">
                <input type="email" placeholder="email" name="txt_email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" name="txt_mob">
                <input type="text" placeholder="subject" name="txt_sub">
            </div>
            <textarea placeholder="message" name="txt_msg" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message" name="btn_save">
            <a href="feedback.php" class="btn">See Feedback</a>
        </form>

    </div>
    
</section>

<!-- contact section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <!-- <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div> -->
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Vaijapur</a>
            <a href="#">Vp Collage</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">home</a>
            <a href="Book.php">book</a>
            <a href="packages.php">packages</a>
            <a href="services.php">services</a>
            <a href="Gallery.php">gallery</a>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<?php


   $con = mysqli_connect("localhost","root","","turism");

   if(isset($_POST['btn_save']))

   {

      mysqli_query($con,"insert into contact (name,email,mobail,subject,message) values('".$_POST['txt_name']."','".$_POST['txt_email']."','".$_POST['txt_mob']."','".$_POST['txt_sub']."','".$_POST['txt_msg']."')");

      echo "
<script>window.location='index.php' </script>
  ";

   }


?>
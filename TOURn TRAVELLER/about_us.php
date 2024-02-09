<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about_us</title>

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

<!-- <div class="box">
    <h3>about us</h3>
    <p>Lorem Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore rem quod ipsum excepturi mollitia fugit totam iure aut. Sed perferendis itaque modi vitae libero ipsum distinctio nam, vel illo nulla!ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
</div> -->

<!-- book section starts  -->

<section class="book" id="book">
    <div><br>
    <br><br></div>
    <h1 class="heading">
        <span>A</span>
        <span>B</span>
        <span>o</span>
        <span>U</span>
        <span>T</span>
        <span class="space"></span>
        <span>U</span>
        <span>S</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

         <form action="">
            <div class="inputBox">
                <!-- <h3>where to</h3> -->
                <!-- <input type="text" placeholder="place name"> -->
            </div>
            <div class="inputBox">
                <!-- <h3>how many</h3> -->
                <!-- <input type="number" placeholder="number of guests"> -->
            </div>
            <div class="inputBox">
                <!-- <h3>arrivals</h3> -->
                <!-- <input type="date"> -->
            </div>
            <div class="inputBox">
                <!-- <h3>leaving</h3> -->
                <!-- <input type="date"> -->
            </div>
            <!-- <input type="submit" class="btn" value="book now"> -->
        </form> -->

    </div>

</section>

<!-- book section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Mumbai</a>
            <a href="#">Pune</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">home</a>
            <a href="Book.php">book</a>
            <a href="#packages">packages</a>
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

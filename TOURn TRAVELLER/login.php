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
<style type="text/css">
  .form-control
  {
    padding: 10px;
    border: 1px solid black;
    margin: 5px;
  }
</style>
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
        <span>L</span>
        <span>O</span>
        <span>G</span>
        <span>I</span>
        <span>N</span>
        <span class="space"></span>
        
    </h1>

    <div class="container">

    <div class="row" style="">

      <div class="col-md-6">
        
      </div>

 <div class="col-md-6">
          <hr>
        
            <div style="width:300px;height: 300px;margin-top: 20px;">
              <form action="#" method="GET">
              <input type="text" name="user" placeholder="Enter Login Id" class="form-control">
              <br>
              <input type="password" name="pass" placeholder="Enter Password" class="form-control">
              <br>
              <input type="submit" name="btn_login" class="btn btn-border" value="Login">
            </div>

      </div>

        
         <!-- <h3>Login Admin Here...</h3> -->
        

    </div>
</div>
</section>

<!-- book section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Vaijapur</a>
            <a href="#">Vp Collage</a>
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
</form></div></div>
</section>
</body>
</html>
<?php
error_reporting(0);
$user =$_GET['user'];
$pass = $_GET['pass'];
if(isset($_GET['btn_login']))
{
  if(($user == "bca")&&($pass == "1234"))
  {
      echo "<script>window.location='show.php'</script>";
      exit();
  }
  else
  {
    echo "<script>alert('Wrong Credetials');</script>";
  }
}

?>
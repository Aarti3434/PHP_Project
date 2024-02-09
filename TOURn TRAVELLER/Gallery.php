<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY</title>

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

<!-- gallery section starts  -->

<section class="gallery" id="gallery">
    <div><br><br><br></div>
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
        
        <div class="box">
            <img src="images/shimla.jpeg" alt="">
            <div class="content">
                <h3>Shimla</h3>
                <p>The town is famous for pleasant walking experiences on hillsides surrounded by pine and oak forests.</p>
                <a href="Shimla.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/rajasthaan.jpg" alt="">
            <div class="content">
                <h3>Rajasthan</h3>
                <p>Rajasthan is known for its historical hill forts & palaces, it is claimed as the best place for tourism-related to palaces.</p>
                <a href="Rajasthan.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Jammu_Kashmir.jpg" alt="">
            <div class="content">
                <h3>Jammu-Kashmir</h3>
                <p>Cool off in the mesmerising Betaab Valley, enjoy the breeze by the Dal Lake and more.</p>
                <a href="jammu-Kashmir.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/Leh-ladhak.jpg" alt="">
            <div class="content">
                <h3><Leh-ladhak>leh-ladhak</Leh-ladhak></h3>
                <p>Ladakh is an adventure playground for rafting and high-altitude trekking. Note </p>
                <a href="leh-ladhak.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/Udaipur.jpg" alt="">
            <div class="content">
                <h3>Udaipur</h3>
                <p>Udaipur is a tourist destination and is known for its history, culture, scenic locations and the Rajput-era palaces.</p>
                <a href="Udaipur.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/goa.jpg" alt="">
            <div class="content">
                <h3>Goa</h3>
                <p>The coastal paradies,Goa is not unknown to anyone.Thia tiny state in West</p>
                <a href="Goa.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
       
        </div>

    </div>

</section>
<!-- gallery section ends -->



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

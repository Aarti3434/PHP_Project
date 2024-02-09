<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travel</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

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
                <i class="" id="search-btn"></i>

       
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Oh the Places You'll Go</h3>
        <p>"Life is JOURNEY ,not a DESTINATION !"</p>
        <!-- <a href="#" class="btn">discover more</a> -->
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- gallery section starts  -->

 <section class="gallery" id="gallery">

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
            <img src="images/Jammu_Kashmir.jpg" alt="">
            <div class="content">
                <h3>Jammu-Kashmir</h3>
                <p>Cool off in the mesmerising Betaab Valley, enjoy the breeze by the Dal Lake and more.</p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/Leh-ladhak.jpg" alt="">
            <div class="content">
                <h3><Leh-ladhak>leh-ladhak</Leh-ladhak></h3>
                <p>Ladakh is an adventure playground for rafting and high-altitude trekking. Note that Leh Ladakh is inaccessible by road outside the summer months.</p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/rajasthaan.jpg" alt="">
            <div class="content">
                <h3>rajasthaan</h3>
                <p>Rajasthan is known for its historical hill forts & palaces, it is claimed as the best place for tourism-related to palaces.</p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/goa.jpg" alt="">
            <div class="content">
                <h3>Goa</h3>
                <p>The coastal paradies,Goa is not unknown to anyone.Thia tiny state in West India is famous for beautiful beaches, gresat seafood,amazing nighttlife,and thrilling watersports.</p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p></p>
                <!-- <a href="#" class="btn">see more</a> -->
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
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <div class="box">
            <img src="images/shimla.jpeg" alt="">
            <div class="content">
                <h3>Shimla</h3>
                <p>The town is famous for pleasant walking experiences on hillsides surrounded by pine and oak forests.</p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        <!-- <div class="box">
            <img src="images/Udaipur.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div> -->
        </div>

    </div>

</section>
<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>John</h3>
                    <p>Thank you for a wonderful trip. You were excellent in communication and sorting out our tailor made holiday . You were very professional. All details were well ...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>john deo</h3>
                    <p>Thank you for a wonderful trip. You were excellent in communication and sorting out our tailor made holiday . You were very professional. All details were well ...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>john deo</h3>
                    <p>Thank you for a wonderful trip. You were excellent in communication and sorting out our tailor made holiday . You were very professional. All details were well ...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
            </div>
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
            <!-- <a href="#">linkedin</a> -->
        </div>

    </div>

    <h1 class="credit"> created by <span> @ </span> |   BCA GROUP </h1>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
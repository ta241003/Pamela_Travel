<?php
session_start();

if (!isset($_SESSION["username"])) {
    $_SESSION["msg"] = "You must log in first";
    header("location: login.php");
}
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home | Travel Website</title>

    <!-- font awesome cdn link  -->
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css Files -->
    <link rel="stylesheet" href="../src/style/home.css">
    <link rel="stylesheet" href="../src/style/base.css">
    <link rel="stylesheet" href="../src/style/grid.css">
    <link rel="stylesheet" href="../src/style/responsive.css">

   <!-- Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- JavaScript Files -->
    <script src="../src/javascript/script.js" defer></script>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="home.php" class="logo hide-on-mobile"> <i class="fas fa-paper-plane"></i> Pamela </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="home.php">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="destination.php">destination</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="service.php">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="blog.php">blog</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="aboutUs.html" target="_blank">about us</a>
    </nav>

    <!-- logged in user information -->

    <ul class="navbar--list">
        <li class="navbar--list-item hide-on-mobile">
            <a href="contact_form.php" class="navbar-item--link">
                <i class="navbar-item--icon bx bx-phone"></i>
                    Contact    
            </a>
        </li>
        <li class="navbar--list-item navbar-user">
            <!-- <a href="" class="navbar-item--link"> -->
            <i class="navbar-item--icon bx bxs-user"></i>
                <?php echo $_SESSION["username"]; ?>        
                <ul class="navbar-user-menu">
                    <li class="navbar-user-item">
                        <a href="cart_tour.php">My Cart</a>
                    </li>
                    <li class="navbar-user-item">
                        <a href="blog.php">Blogging</a>
                    </li>
                    <li class="navbar-user-item">
                        <a href="user_change-password.php">Change Password</a>
                    </li>
                    <li class="navbar-user-item navbar-user-item--separate">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>    
            </a>
        </li>  
    </ul>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Get Ready for</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Lifetime Journey</h3>
        <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quia illum quod perspiciatis harum in possimus? Totam consequuntur officia quia?</p>
        <a data-aos="fade-up" data-aos-delay="600" href="destination.php" class="btn">book now</a>
    </div>

</section>

<!-- home section ends -->

<!-- booking form section starts  -->

<section class="book-form" id="book-form">

    <form action="">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span class="heaing-text_form">Destinations</span>
            <div class="content-box">Diverse and attractive</div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span class="heaing-text_form">Quatity</span>
            <div class="content-box">Up to 100</div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span class="heaing-text_form">Support</span>
            <div class="content-box">Reservation 24/7</div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <a href="destination.php" class="btn">Find Now</a>
        </div>
    </form>

</section>

<!-- booking form section ends -->

<!-- about section starts  -->

<section class="about" id="about">
                <!-- data-aos="fade-right" data-aos-delay="300" -->
    <div class="video-container">
        <video src="../src/img/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="../src/img/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="../src/img/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="../src/img/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span class="content_heading-text">why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde fugit repellat error deserunt nam aperiam odit libero quos provident. Nostrum?</p>
        <a href="blog.php" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- destination section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>our destination</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="../src/img/des-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Ha Noi</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="hanoi.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="../src/img/des-2.png" alt="">
            </div>
            <div class="content">
                <h3>Sapa</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="sapa.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="../src/img/des-3.png" alt="">
            </div>
            <div class="content">
                <h3>Ha Long</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="halong.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="../src/img/des-4.png" alt="">
            </div>
            <div class="content">
                <h3>Hoi An</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="hoian.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="../src/img/des-5.png" alt="">
            </div>
            <div class="content">
                <h3>Hue</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="hue.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="../src/img/des-6.png" alt="">
            </div>
            <div class="content">
                <h3>Da Lat</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="../src/img/des-7.png" alt="">
            </div>
            <div class="content">
                <h3>Nha Trang</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="../src/img/des-8.png" alt="">
            </div>
            <div class="content">
                <h3>Sai Gon</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- destination section ends -->

<!-- services section starts  -->

<!-- <section class="services" id="services">

    <div class="heading">
        <span>our services</span>
        <h1>countless expericences</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>worldwide</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-utensils"></i>
            <h3>food & drinks</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>affordable price</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

    </div>

</section> -->

<!-- services section ends -->

<!-- gallery section starts  -->

<!-- <section class="gallery" id="gallery">

    <div class="heading">
        <span>our gallery</span>
        <h1>we record memories</h1>
    </div>
    
    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-1.jpg" alt="">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-2.jpg" alt="">
            <span>travel spot</span>
            <h3>greenland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-3.jpg" alt="">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-4.jpg" alt="">
            <span>travel spot</span>
            <h3>thailand</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-5.jpg" alt="">
            <span>travel spot</span>
            <h3>brazil</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-6.jpg" alt="">
            <span>travel spot</span>
            <h3>maldive</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-7.jpg" alt="">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-8.jpg" alt="">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-9.jpg" alt="">
            <span>travel spot</span>
            <h3>maldive</h3>
        </div>

    </div>

</section> -->

<!-- gallery section ends -->

<!-- review section starts  -->


<!-- blogs section starts  -->

<section class="blogs" id="blogs">
    
    <div class="heading">
        <span>blogs & posts</span>
        <h1>we untold stories</h1>
    </div>
    
    <div class="box-container">
        
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="../src/img/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, natus!</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
        
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="../src/img/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, natus!</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
        
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="../src/img/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, natus!</p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
        
    </div>
    
</section>

<!-- blogs section ends -->




<section class="customers" id="customers">

    <div class="heading">
        <span>customer's feedback</span>
        <h1>feeling after expericences</h1>
    </div>

    <div class="sec-width">
      <div class="customers-container">
        <!-- single customer -->
        <div class="customer" data-aos="fade-left" data-aos-delay="150">
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <h3>The food is good</h3>
          <p>Great taste! The food is cooked to perfection. Harmonious balance. A place worth experiencing.</p>
          <img src="../src/img/customers-1.jpg" alt="customer image">
          <span class="customer_name">Dawn, Singapore</span>
        </div>
        <!-- end of single customer -->
        <!-- single customer -->
        <div class="customer" data-aos="fade-left" data-aos-delay="300">
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <h3>Perfect View</h3>
          <p>Beautiful space with a large and cool swimming pool, nice rooms with a sea view.</p>
          <img src="../src/img/customers-2.jpg" alt="customer image">
          <span class="customer_name">Linda, America</span>
        </div>
        <!-- end of single customer -->
        <!-- single customer -->
        <div class="customer" data-aos="fade-left" data-aos-delay="150">
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <h3>Very good service</h3>
          <p>The service staff is very enthusiastic, dedicated to taking care of customers. The services here are
            diverse.</p>
          <img src="../src/img/customers-3.jpg" alt="customer image">
          <span class="customer_name">David, England</span>
        </div>
        <!-- end of single customer -->
      </div>
    </div>
  </section>

<!-- review section ends -->
<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>start your adventures</span>
        <h3>Let's Explore This World</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam officia suscipit odio.</p>
        <a href="#book-form" class="btn">about us</a>
    </div>

</div>

<!-- banner section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
            <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="logout.php" class="links"> <i class="fas fa-arrow-right"></i> logout </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> The Anh </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-envelope"></i> ngotheanh241003@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>about us</h3>
            <p>information for latest updates</p>
            <a data-aos="zoom-in-left" data-aos-delay="1300" href="aboutUs.html" target="_blank" class="btn-type_2">read more</a>
        </div>

    </div>

</section>

<div class="credit">created by <span>The Anh & Binh Minh</span> | Copyright © 2022  </div>

<!-- footer section ends -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>
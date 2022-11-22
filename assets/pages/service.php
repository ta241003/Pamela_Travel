<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service | Travel Website</title>

    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Css Files -->
    <link rel="stylesheet" href="../src/style/base.css"/>
    <link rel="stylesheet" href="../src/style/home.css"/>
    <link rel="stylesheet" href="../src/style/grid.css"/>
    <link rel="stylesheet" href="../src/style/responsive.css"/>
    <link rel="stylesheet" href="../src/style/service.css"/>

    <!-- Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

    <!-- JavaScript Files -->
    <script src="/assets/src/javascript/script.js" defer></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
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
        <!-- <a data-aos="zoom-in-left" data-aos-delay="1150" href=logout.php">Log out</a> -->
    </nav>

    <!-- logged in user information -->


    <!-- <a data-aos="zoom-in-left" data-aos-delay="1300" href="home.php?logout='1'" class="btn-type_2">Logout</a> -->

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
                        <a href="change_password.php">Change Password</a>
                    </li>
                    <li class="navbar-user-item navbar-user-item--separate">
                        <a href="home.php?logout='1'">Logout</a>
                    </li>
                </ul>    
            </a>
        </li>  
    </ul>

    </header>

    <section class="home" id="home">
        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">Get Ready for</span>
            <h3 data-aos="fade-up" data-aos-delay="300">Exciting Travel</h3>
            <p data-aos="fade-up" data-aos-delay="450">We are here to give you the best experience. No need to worry too much, come here with us, you will get answers to your questions about the places you are interested in. Booking now and enjoy it.</p>
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

    <section class="room wrapper2 top" id="room">
        <div class="container">
          <div class="heading">
            <h5 data-aos="fade-up" data-aos-delay="150">OUR SERVICES</h5>
            <h2 data-aos="fade-up" data-aos-delay="300">Fascinating services & offers </h2>
          </div>
          <div data-aos="fade-up" data-aos-delay="450" class="content flex mtop">
            <div class="left grid2">
              <div class="box">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <p>Booking Now</p>
                <h3>No booking fee</h3>
              </div>
              <div class="box">
                <i class="fas fa-dollar-sign"></i>
                <p>Booking Now</p>
                <h3>Best rate guarantee</h3>
              </div>
              <div class="box">
                <i class="fab fa-resolving"></i>
                <p>Booking Now</p>
                <h3>Reservations 24/7</h3>
              </div>
              <div class="box">
                <i class="fa-solid fa-clock"></i>
                <p>Booking Now</p>
                <h3>Save time</h3>
              </div>
              <div class="box">
                <i class="fa-solid fa-bus"></i>
                <p>Booking Now</p>
                <h3>Convinience to move</h3>
              </div>
              <div class="box">
                <i class="fa-solid fa-sack-dollar"></i>
                <p>Booking Now</p>
                <h3>Get more offers</h3>
              </div>
            </div>
            <div class="right slide_image">
            </div>
          </div>
        </div>
    </section>

    <section class="wrapper2" style="margin-bottom: 16rem">
        <div class="container">
          <div class="heading mtop">
            <h5>TRAVELLING</h5>
            <h2>Giving you great benefits</h2>
          </div>
    
          <div class="content grid mtop">
            <div class="box">
                <i class="fa-solid fa-person-hiking"></i>
              <h3>Explore The World</h3>
              <p>Go to everywhere you want to go</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-train-tram"></i>
              <h3>Find Unique Way</h3>
              <p>Express your personality and interests in your own way</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-users"></i>
              <h3>Working In Group</h3>
              <p>Improve social skills, adapt to the environment</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-heart"></i>                
                <h3>Be Healthier</h3>
                <p>Improve health with expedition trips that require endurance</p>
            </div>
          </div>
        </div>
      </section>


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
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
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
            <a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn-type_2">read more</a>
        </div>
  
    </div>
  
  </section>
  
  <div class="credit">created by <span>The Anh & Binh Minh</span> | all rights reserved!</div>
  
  <!-- footer section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>

</body>
</html>
<?php 
  session_start(); 
?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Destination | Travel Website</title>

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
        <link rel="stylesheet" href="../src/style/destination.css"/>

        <!-- Animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

        <!-- JavaScript Files -->
        <script src=../javascript/script.js" defer></script>

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

        <section class="home" id="home">
            <div class="content">
                <span data-aos="fade-up" data-aos-delay="150">Get Ready for</span>
                <h3 data-aos="fade-up" data-aos-delay="300"> Exciting Travel </h3>
                <p data-aos="fade-up" data-aos-delay="450">
                    We are here to give you the best experience. No need to worry too much, come here with us, you will get answers to your questions about the places you are interested in. Booking now and enjoy it. 
                </p>
                <a data-aos="fade-up" data-aos-delay="600" href="#services" class="btn">book now</a>
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

        <section class="offer mtop" id="services">
            <div class="container">
                <div class="heading">
                    <h5 data-aos="fade-up" data-aos-delay="50">EXCLUSIVE OFFERS</h5>
                    <h3 data-aos="fade-up" data-aos-delay="100">You can get an exclusive offer</h3>
                </div>

                <div class="content grid2 mtop flex">

                  <div class="box_hidden" data-aos="fade-up" data-aos-delay="150">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-1.jpg" alt="" />
                        </div>
                        <div class="right">
                            <h4>Ha Noi</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>
                                Hoàn Kiếm Lake, also known as Sword Lake, is a fresh water lake, measuring some 12 ha in the historical center of Hanoi, the capital city of Vietnam.
                            </p>
                            <h5>From $100/tour</h5>
                            <a href="hanoi.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-2.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Sapa</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <!-- <i class="fas fa-star"></i> -->
                            </div>
                            <p>
                                Fansipan is a mountain in Vietnam. The height of the mountain is 3,147.3 metres. It is the highest mountain in the Indochinese Peninsula.
                            </p>
                            <h5>From $300/tour</h5>
                            <a href="sapa.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-3.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Ha Long Bay</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>
                                Hạ Long Bay, in northeast Vietnam, is known for its emerald waters and thousands of towering limestone islands topped by rainforests. 
                            </p>
                            <h5>From $250/tour</h5>
                            <a href="halong.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-4.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Hoi An</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <!-- <i class="fas fa-star"></i> -->
                            </div>
                            <p>
                                a mix of eras and styles from wooden Chinese shophouses and temples to colorful French colonial buildings, ornate Vietnamese tube houses.
                            </p>
                            <h5>From $150/tour</h5>
                            <a href="hoian.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-5.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Hue</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <!-- <i class="fas fa-star"></i> -->
                            </div>
                            <p>
                                Surrounded by a moat and thick stone walls. It encompasses the Imperial City, with palaces and shrines; the Forbidden Purple City (Tử cấm thành).
                            </p>
                            <h5>From $120/tour</h5>
                            <a href="hue.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-6.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Da Lat</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>
                                Surrounded by hills, pine forests, lakes and waterfalls. Known as the “City of Eternal Spring” for its distinctive temperate climate.
                            </p>
                            <h5>From $200/tour</h5>
                            <a href="dalat.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-7.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Nha Trang</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>
                                Known for its beaches, diving sites and offshore islands. Aerial cable cars cross over to Hòn Tre Island, reachable by boat, have coral reefs. 
                            </p>
                            <h5>From $280/tour</h5>
                            <a href="nhatrang.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>

                  <div class="box_hidden">
                    <div class="box flex">
                        <div class="left">
                            <img src="../src/img/des-8.png" alt="" />
                        </div>
                        <div class="right">
                            <h4>Sai Gon</h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>
                                Landmark 81 is a supertall skyscraper in Ho Chi Minh City, Vietnam. The tallest building in Vietnam, the second tallest building in Southeast Asia.
                            </p>
                            <h5>From $210/tour</h5>
                            <a href="saigon.php">
                                <button class="flex1">
                                    <span>Check Availability</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                  </div>
            </div>
            
            <div class="btn_loadmore" data-aos="fade-up" data-aos-delay="450">
              <button class="btn loadMore">Load More</button>
            </div>
            <script src=../javascript/jquery-latest.min.js"></script>
            <script>
                $(".box_hidden").slice(0, 4).show(); //showing 3 div

                $(".loadMore").on("click", function () {
                    $(".box_hidden:hidden").slice(0, 4).show(); //showing 3 hidden div on click

                    if ($(".box_hidden:hidden").length == 0) {
                        $(".loadMore").fadeOut(); //this will hide
                        //button when length is 0
                    }
                });
            </script>
        </section>

        <section class="offer2 about wrapper timer top" id="voucher">
            <div class="container">
                <div class="heading">
                    <h5 data-aos="fade-up" data-aos-delay="50">EXCLUSIVE OFFERS</h5>
                    <h3 data-aos="fade-up" data-aos-delay="100">You can get an exclusive offer</h3>
                </div>

                <div class="content grid top">
                    <div class="box" data-aos="fade-up" data-aos-delay="150">
                        <h5 class="glowing-text">UP TO 10% OFF</h5>
                        <h3>group of 6 people</h3>
                        <p>
                            Get voucher 10% when registering more 6 people
                        </p>
                        <div class="flex">
                            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
                            <i class="far fa-dot-circle"> 18+ years</i>
                        </div>
                        <a href="#services">
                            <button class="flex1">
                                <span>Check Availability</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </a>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <h5 class="glowing-text">UP TO 20% OFF</h5>
                        <h3>package subscription</h3>
                        <p>
                            Get voucher 20% when registering with transportation
                        </p>
                        <div class="flex">
                            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
                            <i class="far fa-dot-circle"> 18+ years</i>
                        </div>
                        <a href="#services">
                            <button class="flex1">
                                <span>Check Availability</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </a>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="450">
                        <h5 class="glowing-text">UP TO 30% OFF</h5>
                        <h3>group of more 20 people</h3>
                        <p>
                            Get voucher 10% when registering from 20 people
                        </p>
                        <div class="flex">
                            <i class="fal fa-alarm-clock"> Duration: 2Hours</i>
                            <i class="far fa-dot-circle"> 18+ years</i>
                        </div>
                        <a href="#services">
                            <button class="flex1">
                                <span>Check Availability</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </a>
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

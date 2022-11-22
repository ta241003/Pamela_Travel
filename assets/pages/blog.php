<?php 
  session_start(); 
  include('db_config.php');
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | Travel Website</title>

    <!-- font awesome cdn link  -->
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Css Files -->
    <link rel="stylesheet" href="../src/style/base.css">
    <link rel="stylesheet" href="../src/style/grid.css">
    <link rel="stylesheet" href="../src/style/responsive.css">
    <link rel="stylesheet" href="../src/style/intro.css">
    <link rel="stylesheet" href="../src/style/blog.css">

   <!-- Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- JavaScript Files -->
    <script src="../src/javascript/script.js" defer></script>
</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
    
        <a data-aos="zoom-in-left" data-aos-delay="150" href="home.php" class="logo"> <i class="fas fa-paper-plane"></i> Pamela </a>
    
        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="home.php">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="destination.php">destination</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="service.php">services</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="blog.php">blogs</a>
            <a data-aos="zoom-in-left" data-aos-delay="900" href="aboutUs.html" target="_blank">about us</a>
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
    
    <!-- header section ends -->
    
    <!-- home section starts  -->
    
    <section class="home" id="home">
        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">Get Ready for</span>
            <h3 data-aos="fade-up" data-aos-delay="300">
                Exciting Travel
            </h3>
            <p data-aos="fade-up" data-aos-delay="450">
                We are here to give you the best experience. No need to worry too much, come here with us, you will get answers to your questions about the places you are interested in. Booking now and enjoy it. 
            </p>
            <a data-aos="fade-up" data-aos-delay="600" href="destination.php" class="btn">book now</a >
        </div>
    </section>
    <!-- blogs section starts  -->

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

<section class="blogs" id="blogs">
    
    <div class="heading">
        <span>blogs & posts</span>
        <h1>we untold stories</h1>
    </div>
    
    <div class="box-container">
    <?php
        $query = "SELECT * FROM blog ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
        ?>    
        <div class="box_hidden">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="../src/img/<?php echo $row["img_blog"]; ?>" alt="Image Tour">
                </div>
                <div class="content" style="height: 240px;">
                    <a href="" style="pointer-events: none" class="link"><?php echo $row["destination_blog"]; ?></a>
                    <p><?php echo $row["content_blog"]; ?></p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i> <?php echo $row["create_time"]; ?></a>
                        <a href="#"><i class="fas fa-user"></i> <?php echo $row["poster"]; ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
            }
        }
    ?>       
    </div>

    <div class="btn_loadmore" data-aos="fade-up" data-aos-delay="450">
        <button class="btn loadMore">Load More</button>
    </div>

    <script src="../src/javascript/jquery-latest.min.js"></script>
    <script>
        $(".box_hidden").slice(0, 3).show(); //showing 3 div

        $(".loadMore").on("click", function () {
            $(".box_hidden:hidden").slice(0, 3).show(); //showing 3 hidden div on click

            if ($(".box_hidden:hidden").length == 0) {
                $(".loadMore").fadeOut(); //this will hide
                //button when length is 0
            }
        });
    </script>

    <!-- Comment -->
    <div class="comment">
        <div class="title-cmt"> Comment About Us </div>

        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" class="name-cmt" required>
        
            <textarea name="message" placeholder="Write The Message" class="message-cmt" required></textarea>
    
            <input type="submit" name="submit" value="SEND" class="button-cmt">

        <!-- PHP -->
        <?php
        // Database connection
        $conn = new mysqli('localhost','root','','travel_web');

        if(isset($_POST['submit'])) {
            if(!empty($_POST['name']) && !empty($_POST['message'])) {

                $name = $_POST['name'];
                $message = $_POST['message'];

                $query = "insert into comment(name, message) values('$name', '$message')";

                $run = mysqli_query($conn,$query) or die(mysqli_error());

                if($run && isset($_POST['submit'])) {
                    
                }
                else {
                    echo "Form not submitted successfully";
                }
            }
            else {
                echo "All fields are required";
            }
        }

        ?>
        
        </form>

    </div>

</section>

<!-- blogs section ends -->

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
            <a data-aos="zoom-in-left" data-aos-delay="1300" href="about.html" class="btn-type_2">read more</a>
        </div>

    </div>

</section>

<div class="credit">created by <span>The Anh & Binh Minh</span> | all rights reserved!</div>

<!-- footer section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>

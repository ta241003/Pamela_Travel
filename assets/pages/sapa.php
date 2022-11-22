<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "", "travel_web");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>alert("Tour Booking Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Tour Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sa Pa | Travel Website</title>
    <link rel="stylesheet" type="text/css" href="../src/style/base.css"/> 
    <link rel="stylesheet" type="text/css" href="../src/style/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="../src/style/intro.css"/>
    <link rel="stylesheet" type="text/css" href="../src/style/grid_tour.css"/>
    <link rel="stylesheet" type="text/css" href="../src/style/tour.css"/>
    <!-- font awesome cdn link  -->
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- JavaScript Files -->
    <script src="../src/javascript/script.js" defer></script>

    <style>
        @media (max-width: 991px) {
    html {
        font-size: 65%;
    }
    .header {
        padding: 1.5rem 2rem;
    }
    section {
        padding: 3rem 2rem;
    }
    }
    
@media (max-width: 768px) {
    #menu-btn {
        display: inline-block;
    }

    .btn-type_2 {
        margin-bottom: 1rem;
    }

    .header .navbar {
        position: absolute;
        top: 99%;
        left: 0;
        right: 0;
        background: #222;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }
    .header .navbar.active {
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
    .header .navbar a {
        margin: 2rem;
        font-size: 2rem;
        display: block;
    }
    .home {
        margin-top: 10rem;
    }
    .home .content span {
        font-size: 8vw;
    }
    .home .content h3 {
        font-size: 9vw;
    }
 }
    
 @media (max-width: 450px) {
    html {
        font-size: 50%;
    }
    .about .content h3 {
        font-size: 3.5rem;
    }
    .banner .content h3 {
        font-size: 2.7rem;
    }

    .hide-on-mobile {
        display: none;
    }

    }

    /* Customer */

    @media(min-width: 992px){
        .customers-container{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 30px;
        }
    }

    @media(min-width: 1370px){
        .customers-container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media(max-width: 992px) {
        .customer {
            margin: 1.4rem 0;
        }
    }

    @media(max-width: 500px){
        .customer p{
            width: 100%;
        }
        .customer img{
            width: 100px;
            height: 100px;
        }
    }

    .form-control {
        display: block;
        margin-top: 2rem;
        width: 100%;
        height: 34px;   
        padding: 18px 12px;
        font-size: 14px;
        line-height: 2;
        color: #000;
        background-color: #fff;
        border: 2px solid #6fd1d0;
        border-radius: 12px;
        text-align: center; 
        outline: none;
    }

    ::placeholder {
        color: #c3bebe;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #c3bebe;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #c3bebe;
    }

    </style>
</head>


<body>

<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo hide-on-mobile"> <i class="fas fa-paper-plane"></i> Pamela </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="home.php">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="destination.php">destination</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="service.php">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="blog.html">blog</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="aboutUs.html" target="_blank">about us</a>
    </nav>

    <!-- logged in user information -->


    <!-- <a data-aos="zoom-in-left" data-aos-delay="1300" href="home.php?logout='1'" class="btn-type_2">Logout</a> -->

    <ul class="navbar--list">
        <li class="navbar--list-item hide-on-mobile">
            <a href="contact_form.php
            " class="navbar-item--link">
                <i class="navbar-item--icon bx bx-phone"></i>
                    Contact    
            </a>
        </li>
        <li class="navbar--list-item navbar-user">
            <!-- <a href="" class="navbar-item--link"> -->
            <i class="navbar-item--icon bx bxs-user"></i>
                <?php echo $_SESSION['username']; ?>        
                <ul class="navbar-user-menu">
                    <li class="navbar-user-item">
                        <a href="cart_tour.php">My Cart</a>
                    </li>
                    <li class="navbar-user-item">
                        <a href="">Blogging</a>
                    </li>
                    <li class="navbar-user-item navbar-user-item--separate">
                        <a href="home.php?logout='1'">Logout</a>
                    </li>
                </ul>    
            </a>
        </li>  
    </ul>

</header>


    <section class="about" id="about">
        <div class="container">
          <div class="heading">
            <h5 data-aos="fade-up" data-aos-delay="150">EXPLORE</h5>
            <h2 data-aos="fade-up" data-aos-delay="300">Explore the world in your own way</h2>
          </div>
    
          <div data-aos="fade-up" data-aos-delay="450" class="content flex top">
            <div class="left">
              <h3 class="text-tour">Sapa - mountain in the mist</h3>
              <p>Hanoi, the capital of Vietnam, is known for its centuries-old architecture and a rich culture with Southeast Asian, Chinese and French influences. At its heart is the chaotic Old Quarter, where the narrow streets are roughly arranged by trade. There are many little temples, including Bach Ma, honoring a legendary horse, plus Đồng Xuân Market, selling household goods and street food.</p>
              <p>Cat Cat village is a crowded place where the H'Mong ethnic people live. Coming here, visitors can rent costumes of the H'Mong ethnic group and take pictures in the village scenery with nature.
                Ham Rong flower garden was built according to the natural terrain of Ham Rong peak, to visit the flower garden, visitors have to climb a long way of thousands of stone steps. Every short distance, the scene spreads out in front of your eyes, which is a natural orchid garden, a European garden, a peach blossom forest... the last point is the highest point of Ham Rong peak arranged as an observatory, From here, visitors can zoom in on all of Sapa. Sa Pa has Ham Rong mountain close to the town center, any visitor can go there to see the whole mountain town, Muong Hoa valley, Sa Pa, Ta Phin hidden in the fog. Currently, with human hands embellishing, Ham Rong is really a fruit-filled landscape of Sapa.</p>
              <a href="">
                  <button class="flex1">
                    <span>Check Availability</span>
                    <i class="fas fa-arrow-circle-right"></i>
                  </button>
              </a>
            </div>
            <div class="right">
              <div class="video-container">
                <video src="../src/img/about-vid-6.mp4" muted autoplay loop class="video"></video>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="grid wide tour--card">
        <div class="heading">
            <h5 data-aos="fade-up" data-aos-delay="150">ready to book now</h5>
            <h2 data-aos="fade-up" data-aos-delay="300" style="margin: 0 2rem;">our popular tours around the world</h2>
       </div> 
        <div class="row">
        <?php
            $query = "SELECT * FROM tour_destination ORDER BY id ASC";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
            ?>

            <div class="container--card l-4 m-6 c-12">
                <form method="post" action="sapa.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div class="card">
                        <img src="../src/img/<?php echo $row["image"]; ?>" alt="Tour" class="card-img">
                        <div class="header-tour">
                            <div class="main">
                                <div class="box-name">
                                    <h3 class="name">
                                    <?php echo $row["tour"]; ?></h3>
                                </div>
                            </div>
                        </div>
            
                        <div class="content-tour">
                            <div class="left">
                                <div class="about-container">
                                    <h3 class="title text-tour">Information</h3>
                                    <div class="card__details">
                                        <ul>
                                            <li class="text"><?php echo $row["price"]; ?>$ / tour</li>
                                            <li class="text"><?php echo $row["num_day"]; ?> day tour</li>
                                            <li class="text">Provide transportation: <?php echo $row["trans"]; ?></li>
                                            <li class="text"><?php echo $row["num_guide"]; ?> tour guides</li>
                                            <input name="quantity" type="text" class="form-control" placeholder="Enter Number Of People" required/>

                                            <input type="hidden" name="hidden_name" value="<?php echo $row["tour"]; ?>" />

                                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                        </ul>
                                    </div>
                                </div>
                                <button class="flex2" type="submit" name="add_to_cart" value="Add to Cart">
                                    <span>Book Now</span>
                                    
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        <?php
                }
            }
        ?>    
        </div>

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
<?php 
session_start();

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Tour Removed")</script>';
				echo '<script>window.location="cart_tour.php"</script>';
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tour Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- font awesome cdn link  -->
		<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		<!-- Boxicons CSS -->
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

		<link rel="stylesheet" type="text/css" href="../src/style/base.css"/>
		<link rel="stylesheet" type="text/css" href="../src/style/responsive.css"/>
		<link rel="stylesheet" type="text/css" href="../src/style/cart_tour.css"/>

		<!-- JavaScript Files -->
		<script src="../src/javascript/script.js" defer></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../src/javascript/sweetalert.js"></script>
		<?php
			if(isset($_SESSION['message']))
			{
				?>
				<script>
					swal({
						title: <?php echo $_SESSION['message'] ?>,
						text: "hjjhgj",
						icon: "success",
					});
				</script>
				<?php
					unset($_SESSION['message']);
			}
			
									
		?>
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
					<?php echo $_SESSION['username']; ?>        
					<ul class="navbar-user-menu">
						<li class="navbar-user-item">
							<a href="cart_tour.php">My Cart</a>
						</li>
						<li class="navbar-user-item">
							<a href="">Blogging</a>
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
	<section class="cart-tour">
		<div class="heading_cart-tour">My Cart</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th scope="col">Tour</th>
					<th scope="col">Number of people</th>
					<th scope="col">Price</th>
					<th scope="col">Total</th>
					<th scope="col"></th>
				</tr>
				<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					$total = 0;
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
				?>
				<tr>
					<form action="booking.php" method="GET">

						<td data-label="Item Name">
							<span><?php echo $values["item_name"]; ?></span>
							<input name="tour_name" type="hidden" value="<?php echo $values["item_name"]; ?>">
						</td>
						<td data-label="Number of people">
							<span><?php echo $values["item_quantity"]; ?></span>
							<input name="number_people" type="hidden" value="<?php echo $values["item_quantity"]; ?> ">
						</td>
						<td data-label="Price">
							<span>$ <?php echo $values["item_price"]; ?></span>
						</td>
						<td data-label="Total">
							<span>$ <?php echo number_format($values["item_quantity"] * $values["item_price"]);?></span>
							<input name="tour_price" type="hidden" value="<?php echo number_format($values["item_quantity"] * $values["item_price"]);?>">
						</td>
						<td data-label="">
							<a href="cart_tour.php?action=delete&id=<?php echo $values["item_id"]; ?>">
								<span class="text-danger">Remove</span>
							</a>
							<input class="input-book" type="submit" name="book" value="Book">
						</td>

					</form>
				</tr>
					<?php
						$total = $total + ($values["item_quantity"] * $values["item_price"]);
					}
				}
				else
				{
					?>
						<tr>
							<td colspan="5">No Tour Ticket Book</td>
						</tr>		
				</tr>
						</tr>		
					<?php
				}
					?>
					
			</table>
		</div>
	</section>
		
	
	<!-- <section class="footer">

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

	</section>		 -->
	</body>
</html>
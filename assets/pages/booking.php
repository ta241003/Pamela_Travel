<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../src/style/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../src/style/booking.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<section id="booking" class="booking-now">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Booking Now</h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p> -->
							</div>
						</div>
						<form action="insert-booking.php" method="POST">
							<div class="form-group">
								<span class="form-label">Name</span>
								<input name="name" class="form-control" type="text" required>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input name="email" class="form-control" type="email" required>
							</div>
							<div class="form-group">
								<span class="form-label">Phone Number</span>
								<input name="phone" class="form-control" type="tel" pattern="[0-9]{10}" required>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input name="check_in" class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Price Total</span>
										<span class="form-control"><?php echo $_GET["tour_price"]; ?> $</span>
										<input name="price_total" type="hidden" value="<?php echo $_GET["tour_price"]; ?>" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">People</span>
										<span class="form-control"><?php echo $_GET["number_people"]; ?></span>
										<input name="people" class="form-control" type="hidden" value="<?php echo $_GET["number_people"]; ?>" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Place</span>
										<span class="form-control"><?php echo $_GET["tour_name"]; ?></span>
										<input name="place" class="form-control" type="hidden" value="<?php echo $_GET["tour_name"]; ?>" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Bank Account Number</span>
								<input name="num_acc" class="form-control" type="number" required>
							</div>
							<div class="form-btn">
								<button type="submit" name="finish" class="submit-btn">Finish</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>

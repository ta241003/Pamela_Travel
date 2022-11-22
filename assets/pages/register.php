<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../src/style/login_users.css">
</head>
<body>


	<div class="container">
		<section class="sign-up-in">
			<div class="header">
				<h2>Create An Account</h2>
			</div>
			
			<form method="post" action="register.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
				<input type="text" name="username" placeholder="Account Name" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
				<input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group">
				<input type="password" name="password_1" placeholder="Password">
				</div>
				<div class="input-group">
				<input type="password" name="password_2" placeholder="Repeat your password">
				</div>
				<div class="input-group">
				<button type="submit" class="btn" name="reg_user">Register</button>
				</div>
				<p class="more--link">
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>
		</section>
	</div>	
</body>
</html>
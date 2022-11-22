<?php include('server_admin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../src/style/login_admins.css">
</head>
<body>


	<div class="container">
		<section class="sign-up-in">
			<div class="header">
				<h2>Create An Admin Account</h2>
			</div>
			
			<form method="post" action="register_admin.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
				<input type="text" name="admin" placeholder="Account Name" value="<?php echo $admin; ?>">
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
				<button type="submit" class="btn" name="reg_admin">Register</button>
				</div>
			</form>
		</section>
	</div>	
</body>
</html>
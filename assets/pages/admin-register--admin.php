<?php include('server--register-admin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Admin Account</title>
  <link rel="stylesheet" type="text/css" href="../src/style/login_admins.css">
</head>
<body>


	<div class="container">
		<section class="sign-up-in">
			<div class="header">
				<h2>Create An Admin Account</h2>
			</div>
			
			<form method="post" action="admin-register--admin.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
				    <input type="text" name="acc_admin" placeholder="Account Name" value="<?php echo $acc_admin; ?>">
				</div>
				<div class="input-group">
				    <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>">
				</div>
                <div class="input-group">
				    <input type="text" name="position" placeholder="Position" value="<?php echo $position; ?>">
				</div>
				<div class="input-group">
				    <input type="password" name="password_1" placeholder="Password">
				</div>
				<div class="input-group">
				    <input type="password" name="password_2" placeholder="Repeat your password">
				</div>
				<div class="input-group">
				    <button type="submit" class="btn" name="admin-reg_admin">Register</button>
				</div>
                <p class="more--link">
					You can go back! <a href="account--admin.php">Previous Page</a>
				</p>
			</form>
		</section>
	</div>	
</body>
</html>
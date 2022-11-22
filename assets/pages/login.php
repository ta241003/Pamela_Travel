<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>	
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="../src/style/login_users.css">
</head>
<body>


	<div class="container">

		<section class="sign-up-in">
	
			<div class="header">
				<h2>Login Account</h2>
			</div>
			   
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<input type="text" name="username" placeholder="Username" >
				</div>
				<div class="input-group">
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="login_user">Login</button>
				</div>
				<p class="more--link">
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
	
		</section>

	</div>	
</body>
</html>
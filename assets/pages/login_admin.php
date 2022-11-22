<?php include('server_admin.php') ?>
<!DOCTYPE html>
<html>
<head>	
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="../src/style/login_admins.css">
</head>
<body>


	<div class="container">

		<section class="sign-up-in">
	
			<div class="header">
				<h2>Login Admin</h2>
			</div>
			   
			<form method="post" action="login_admin.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<input type="text" name="admin" placeholder="Username" >
				</div>
				<div class="input-group">
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="login_admin">Login</button>
				</div>
			</form>
	
		</section>

	</div>	
</body>
</html>
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>	
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="../src/style/login_admins.css">
</head>
<body>


	<div class="container">

		<section class="sign-up-in">
	
			<div class="header">
				<h2>Change Password</h2>
			</div>

			<form method="post" action="server_admin.php">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                    <div class="input-group">
                        <input type="password" name="old_password" placeholder="Old Password" >
                    </div>
                    <div class="input-group">
                        <input type="password" name="new_password" placeholder="New Password">
                    </div>
                    <div class="input-group">
                        <input type="password" name="confirm_new_password" placeholder="Confirm New Password">
                    </div>  
                    <div class="input-group">
                        <button type="submit" class="btn" name="change_password">Change</button>
                    </div>
                    <p class="more--link">
                        Back to <a href="login_admin.php">Login</a>
                    </p>
			</form>
	
		</section>

	</div>	
</body>
</html>

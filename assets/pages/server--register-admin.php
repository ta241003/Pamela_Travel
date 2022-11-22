<?php
session_start();

// initializing variables
$acc_admin = "";
$email    = "";
$position    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel_web');

// REGISTER ADMIN
if (isset($_POST['admin-reg_admin'])) {
  // receive all input values from the form
  $acc_admin = mysqli_real_escape_string($db, $_POST['acc_admin']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($acc_admin)) { array_push($errors, "Admin is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); } 
  if (empty($position)) { array_push($errors, "Position required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same admin and/or email
  $admin_check_query = "SELECT * FROM admins WHERE admin='$acc_admin' OR email='$email' OR position='$position' LIMIT 1";
  $result = mysqli_query($db, $admin_check_query);
  $admin = mysqli_fetch_assoc($result);
  
  if ($admin) { // if admin exists
    if ($admin['acc_admin'] === $acc_admin) {
      array_push($errors, "Admin already exists");
    }

    if ($admin['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admins (admin, email, position, password) 
  			  VALUES('$acc_admin', '$email', '$position', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['acc_admin'] = $acc_admin;
  	header('location: account--admin.php');
  }
}

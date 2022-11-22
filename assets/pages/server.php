<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel_web');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$result = mysqli_query($db, $query);
  	if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['username'] === $username && $row['password'] === $password) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php');
        exit();
  	  }else {
        header("Location: login.php?error=Incorect User name or password");
        exit();
  	  }
    }
  }
}

// CHANGE PASSWORD
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

  include "db_config.php";

  if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $old_password = validate($_POST['old_password']);
  $new_password = validate($_POST['new_password']);
  $confirm_new_password = validate($_POST['confirm_new_password']);
    
    if(empty($old_password)){
      header("Location: user_change-password.php?error=Old Password is required");
    exit();
    }else if(empty($new_password)){
      header("Location: user_change-password.php?error=New Password is required");
    exit();
    }else if($new_password !== $confirm_new_password){
      header("Location: user_change-password.php?error=The confirmation password  does not match");
    exit();
    }else {
      // hashing the password
      $old_password = md5($old_password);
      $new_password = md5($new_password);
      $id = $_SESSION['id'];

        $sql = "SELECT password FROM users WHERE id='$id' AND password='$old_password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
          
          $sql_2 = "UPDATE users SET password='$new_password' WHERE id='$id' ";
          mysqli_query($conn, $sql_2);
          header("Location: user_change-password.php?success=Your password has been changed successfully");
          exit();

        }else {
          header("Location: user_change-password.php?error=Incorrect password");
          exit();
        }

    }  
  
  }
}


?>
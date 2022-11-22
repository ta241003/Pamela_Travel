<?php
session_start();

// initializing variables
$admin = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travel_web');

// LOGIN ADMIN
if (isset($_POST['login_admin'])) {
  $admin = mysqli_real_escape_string($db, $_POST['admin']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($admin)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM admins WHERE admin='$admin' AND password='$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['admin'] === $admin && $row['password'] === $password) {
        $_SESSION['admin'] = $row['admin'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['success'] = "You are now logged in";
        header('location: admin.php');
      }else {
        array_push($errors, "Wrong username / password combination");
        exit();
      }
    }
  }
  }

// CHANGE PASSWORD
if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {

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
      header("Location: admin-change--password.php?error=Old Password is required");
    exit();
    }else if(empty($new_password)){
      header("Location: admin-change--password.php?error=New Password is required");
    exit();
    }else if($new_password !== $confirm_new_password){
      header("Location: admin-change--password.php?error=The confirmation password does not match");
    exit();
    }else {
      // hashing the password
      $old_password = md5($old_password);
      $new_password = md5($new_password);
      $id = $_SESSION['id'];

        $sql = "SELECT password FROM admins WHERE id='$id' AND password='$old_password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
          
          $sql_2 = "UPDATE admins SET password='$new_password' WHERE id='$id' ";
          mysqli_query($conn, $sql_2);
          header("Location: admin-change--password.php?success=Your password has been changed successfully");
          exit();

        }else {
          header("Location: admin-change--password.php?error=Incorrect password");
          exit();
        }

    }  
  
  }
}

?>
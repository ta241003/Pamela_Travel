<?php
session_start();
require 'db_config.php';

if(isset($_POST['delete_acc-user']))
{
    $acc_admin_id = mysqli_real_escape_string($conn, $_POST['delete_acc-user']);

    $query = "DELETE FROM users WHERE id='$acc_admin_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Account User Deleted Successfully";
        header("Location: account--user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Account User Not Deleted";
        header("Location: account--user.php");
        exit(0);
    }
}

// if(isset($_POST['delete_acc-admin']))
// {
//     $acc_admin_id = mysqli_real_escape_string($conn, $_POST['delete_acc-admin']);

//     $query = "DELETE FROM admins WHERE id='$acc_admin_id' ";
//     $query_run = mysqli_query($conn, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Account Admin Deleted Successfully";
//         header("Location: account--admin.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Account Admin Not Deleted";
//         header("Location: account--admin.php");
//         exit(0);
//     }
// }

if(isset($_POST['update_acc_user']))
{
    $acc_user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_new_password = $_POST['user_new_password'];
    $user_new_password = md5($user_new_password);

    $query = "UPDATE users SET username='$user_name', email='$user_email', password='$user_new_password' WHERE id='$acc_user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Account User Updated Successfully";
        header("Location: account--user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Account User Not Updated";
        header("Location: account--admin.php");
        exit(0);
    }

}

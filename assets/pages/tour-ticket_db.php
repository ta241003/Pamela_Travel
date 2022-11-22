<?php
session_start();
require 'db_config.php';

if(isset($_POST['delete_ticket']))
{
    $ticket_id = mysqli_real_escape_string($conn, $_POST['delete_ticket']);

    $query = "DELETE FROM booking_form WHERE id='$ticket_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Tour Ticket Deleted Successfully";
        header("Location: admin_tour.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Tour Ticket Not Deleted";
        header("Location: admin_tour.php");
        exit(0);
    }
}

if(isset($_POST['update_ticket']))
{
    $ticket_id = mysqli_real_escape_string($conn, $_POST['ticket_id']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_in = date('Y-m-d', strtotime($_POST['check_in']));
    $price_total = $_POST['price_total'];
    $people = $_POST['people'];
    $place = $_POST['place'];
    $num_acc = $_POST['num_acc'];

    $query = "UPDATE booking_form SET name='$name', email='$email', phone='$phone', check_in='$check_in', price_total='$price_total', people='$people', place='$place', num_acc='$num_acc' WHERE id='$ticket_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Tour Ticket Updated Successfully";
        header("Location: admin_tour.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Tour Ticket Not Updated";
        header("Location: admin_tour.php");
        exit(0);
    }

}

if(isset($_POST['save_ticket'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['check_in']) && !empty($_POST['price_total']) && !empty($_POST['people']) && !empty($_POST['place']) && !empty($_POST['num_acc'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $check_in = date('Y-m-d', strtotime($_POST['check_in']));
        $month = date('F', strtotime($_POST['check_in']));
        $price_total = $_POST['price_total'];
        $people = $_POST['people'];
        $place = $_POST['place'];
        $num_acc = $_POST['num_acc'];

        $query = "insert into booking_form(name, email, phone, check_in, month, price_total, people, place, num_acc) values('$name', '$email' , '$phone' , '$check_in', '$month', '$price_total', '$people', '$place', '$num_acc')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run && isset($_POST['save_ticket'])) {
            $_SESSION['message'] = "Tour Ticket Created Successfully";
            header('Location: tour-ticket_create.php');
            exit(0);
        }
        else {
            $_SESSION['message'] = "Tour Ticket Not Created";
            header('Location: tour-ticket_create.php');
            exit(0);
        }
    }
    else {
        echo "All fields are required";
    }
}

?>
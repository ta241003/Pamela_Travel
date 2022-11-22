<?php

// Database connection
$conn = new mysqli('localhost','root','','travel_web');

if(isset($_POST['finish'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['check_in']) && !empty($_POST['price_total']) && !empty($_POST['people']) && !empty($_POST['place']) && !empty($_POST['num_acc'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $check_in = date('Y-m-d', strtotime($_POST['check_in']));
        $month = date('F', strtotime($_POST['check_in']));
        $price_total = (int)$_POST['price_total'];
        $people = $_POST['people'];
        $place = $_POST['place'];
        $num_acc = $_POST['num_acc'];

        $query = "insert into booking_form(name, email, phone, check_in, month, price_total, people, place, num_acc) values('$name', '$email' , '$phone' , '$check_in', '$month', '$price_total', '$people', '$place', '$num_acc')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run && isset($_POST['finish'])) {
            header('Location: home.php');
        }
        else {
            echo "Form not submitted successfully";
        }
    }
    else {
        echo "All fields are required";
    }
}

?>

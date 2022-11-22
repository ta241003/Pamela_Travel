<?php
session_start();
require 'db_config.php';

if(isset($_POST['delete_tour']))
{
    $tour_id = mysqli_real_escape_string($conn, $_POST['delete_tour']);

    $query = "DELETE FROM tour_destination WHERE id='$tour_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Tour Deleted Successfully";
        header("Location: admin_detailed--tour.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Tour Not Deleted";
        header("Location: admin_detailed--tour.php");
        exit(0);
    }
}

if(isset($_POST['update_tour']))
{
    $tour_id = mysqli_real_escape_string($conn, $_POST['tour_id']);
    $tour = $_POST['tour'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $num_day = $_POST['num_day'];
    $trans = $_POST['trans'];
    $num_guide = $_POST['num_guide'];

    $query = "UPDATE tour_destination SET tour='$tour', image='$image', price='$price', num_day='$num_day', trans='$trans', num_guide='$num_guide' WHERE id='$tour_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Tour Updated Successfully";
        header("Location: admin_detailed--tour.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Tour Not Updated";
        header("Location: admin_detailed--tour.php");
        exit(0);
    }

}

if(isset($_POST['save_tour'])) {
    if(!empty($_POST['tour']) && !empty($_POST['image']) && !empty($_POST['price']) && !empty($_POST['num_day']) && !empty($_POST['trans']) && !empty($_POST['num_guide'])) {

        $tour = $_POST['tour'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $num_day = $_POST['num_day'];
        $trans = $_POST['trans'];
        $num_guide = $_POST['num_guide'];

        $query = "insert into tour_destination(tour, image, price, num_day, trans, num_guide) values('$tour', '$image' , '$price', '$num_day', '$trans', '$num_guide')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run && isset($_POST['save_tour'])) {
            $_SESSION['message'] = "Tour Created Successfully";
            header('Location: tour-detailed_create.php');
            exit(0);
        }
        else {
            $_SESSION['message'] = "Tour Not Created";
            header("Location: tour-detailed_create.php");
            exit(0);
        }
    }
    else {
        echo "All fields are required";
    }
}

?>
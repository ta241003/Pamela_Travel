<?php
session_start();
require 'db_config.php';

if(isset($_POST['delete_blog']))
{
    $blog_id = mysqli_real_escape_string($conn, $_POST['delete_blog']);

    $query = "DELETE FROM blog WHERE id='$blog_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Blog Tour Deleted Successfully";
        header("Location: admin_blog--tour.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Blog Tour Not Deleted";
        header("Location: admin_blog--tour.php");
        exit(0);
    }
}

if(isset($_POST['update_blog']))
{
    $blog_id = mysqli_real_escape_string($conn, $_POST['blog_id']);
    $place_blog = $_POST['destination_blog'];
    $img_blog = $_POST['img_blog'];
    $content_blog = $_POST['content_blog'];
    $poster = $_POST['poster_blog'];
    $create_time = $_POST['timer_blog'];

    $query = "UPDATE blog SET destination_blog='$place_blog', img_blog='$img_blog', content_blog='$content_blog', poster='$poster', create_time='$create_time' WHERE id='$blog_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Blog Updated Successfully";
        header("Location: admin_blog--tour.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Blog Not Updated";
        header("Location: admin_blog--tour.php");
        exit(0);
    }

}

if(isset($_POST['save_blog'])) {
    if(!empty($_POST['destination_blog']) && !empty($_POST['img_blog']) && !empty($_POST['content_blog']) && !empty($_POST['poster_blog']) && !empty($_POST['timer_blog'])) {

        $place_blog = $_POST['destination_blog'];
        $img_blog = $_POST['img_blog'];
        $content_blog = $_POST['content_blog'];
        $poster = $_POST['poster_blog'];
        $create_time = $_POST['timer_blog'];

        $query = "insert into blog(destination_blog, img_blog, content_blog, poster, create_time) values('$place_blog', '$img_blog' , '$content_blog', '$poster', '$create_time')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run && isset($_POST['save_blog'])) {
            $_SESSION['message'] = "Blog Tour Created Successfully";
            header('Location: tour-blog_create.php');
            exit(0);
        }
        else {
            $_SESSION['message'] = "Blog Tour Not Created";
            header('Location: tour-blog_create.php');
            exit(0);
        }
    }
    else {
        echo "All fields are required";
    }
}

?>
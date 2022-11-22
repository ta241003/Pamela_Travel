
<?php

// Database connection
$conn = new mysqli('localhost','root','','travel_web');

if(isset($_POST['submit'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "insert into contact_form(name, email, subject, message) values('$name', '$email' , '$subject' , '$message')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run && isset($_POST['submit'])) {
            header('Location: contact_form.php');
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

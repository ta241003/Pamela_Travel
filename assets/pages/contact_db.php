<?php        
    session_start();
    require 'db_config.php';

    if(isset($_POST['delete_contact']))
    {
            $contact_id = mysqli_real_escape_string($conn, $_POST['delete_contact']);
            $query = "DELETE FROM contact_form WHERE id='$contact_id' ";
            $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['message'] = "Contact Information Deleted Successfully";
            header("Location: admin_contact.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Contact Information Not Deleted";
            header("Location: admin_contact.php");
            exit(0);
        }
    }
?>
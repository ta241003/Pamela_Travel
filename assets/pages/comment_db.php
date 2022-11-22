<?php        
    session_start();
    require 'db_config.php';

    if(isset($_POST['delete_comment']))
    {
            $comment_id = mysqli_real_escape_string($conn, $_POST['delete_comment']);
            $query = "DELETE FROM comment WHERE id='$comment_id' ";
            $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['message'] = "Comment Information Deleted Successfully";
            header("Location: admin_comment.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Comment Information Not Deleted";
            header("Location: admin_comment.php");
            exit(0);
        }
    }
?>
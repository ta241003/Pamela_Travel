<?php
session_start();
require 'db_config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin | Edit Blog Information</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog Information Edit 
                            <a href="admin_blog--tour.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $blog_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM blog WHERE id='$blog_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $blog = mysqli_fetch_array($query_run);
                                ?>
                                <form action="tour-blog_db.php" method="POST">
                                    <input type="hidden" name="blog_id" value="<?= $blog['id']; ?>">

                                    <div class="mb-3">
                                        <label class="form-label">Place Tour</label>
                                        <input type="text" name="destination_blog" value="<?=$blog['destination_blog'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Image of Tour</label>
                                        <input type="text" name="img_blog" value="<?=$blog['img_blog'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content Blog</label>
                                        <input type="text" name="content_blog" value="<?=$blog['content_blog'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">People Post Blog</label>
                                        <input type="text" name="poster_blog" value="<?=$blog['poster'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Create At</label>
                                        <input type="date" name="timer_blog" value="<?=$blog['create_time'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_blog" class="btn btn-primary">
                                            Update Blog Information
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
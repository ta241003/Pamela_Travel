<?php
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

    <title>Admin | View Blog Information</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Blog Information Details 
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
                                     <div class="mb-3">
                                        <label class="form-label">ID Blog</label>
                                        <p class="form-control">
                                            <?=$blog['id'];?>
                                        </p>
                                    </div>                               
                                    <div class="mb-3">
                                        <label class="form-label">Place Tour</label>
                                        <p class="form-control">
                                            <?=$blog['destination_blog'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Image of Blog</label>
                                        <p class="form-control">
                                            <img width="100%" height="100%" src="../src/img/<?=$blog['img_blog'];?>" alt="Image Tour">
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content Blog</label>
                                        <p class="form-control">
                                            <?=$blog['content_blog'];?>$
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">People Post</label>
                                        <p class="form-control">
                                            <?=$blog['poster'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Post At</label>
                                        <p class="form-control">
                                            <?=$blog['create_time'];?>
                                        </p>
                                    </div>

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
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin | Create a Blog</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add a Blog
                            <a href="admin_blog--tour.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="tour-blog_db.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Place Tour</label>
								<input name="destination_blog" class="form-control" type="text" required> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image of Tour</label>
								<input name="img_blog" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content Blog</label>
								<input name="content_blog" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Poster</label>
                                <input name="poster_blog" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Create At</label>
                                <input name="timer_blog" class="form-control" type="date" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_blog" class="btn btn-primary">Save Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
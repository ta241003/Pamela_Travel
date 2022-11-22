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

    <title>Admin | Edit Tour Information</title>
</head>
<body>
  
    <div class="container mt-5">
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tour Information Edit 
                            <a href="admin_detailed--tour.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $tour_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM tour_destination WHERE id='$tour_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $tour = mysqli_fetch_array($query_run);
                                ?>
                                <form action="tour-detailed_db.php" method="POST">
                                    <input type="hidden" name="tour_id" value="<?= $tour['id']; ?>">

                                    <div class="mb-3">
                                        <label class="form-label">Tour Name</label>
                                        <input type="text" name="tour" value="<?=$tour['tour'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Image of Tour</label>
                                        <input type="text" name="image" value="<?=$tour['image'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Price of Tour</label>
                                        <input type="number" name="price" value="<?=$tour['price'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number of Days</label>
                                        <input type="number" name="num_day" value="<?=$tour['num_day'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Transport of Tour</label>
                                        <input type="text" name="trans" value="<?=$tour['trans'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number of Guide</label>
                                        <input type="number" name="num_guide" value="<?=$tour['num_guide'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_tour" class="btn btn-primary">
                                            Update Tour Information
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
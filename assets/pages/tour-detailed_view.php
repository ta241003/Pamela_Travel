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

    <title>Admin | View Tour Information</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Tour Details 
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
                                     <div class="mb-3">
                                        <label class="form-label">ID Tour</label>
                                        <p class="form-control">
                                            <?=$tour['id'];?>
                                        </p>
                                    </div>                               
                                    <div class="mb-3">
                                        <label class="form-label">Tour Name</label>
                                        <p class="form-control">
                                            <?=$tour['tour'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Image of Tour</label>
                                        <p class="form-control">
                                            <img width="100%" height="100%" src="../src/img/<?=$tour['image'];?>" alt="Tour">
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Price of Tour</label>
                                        <p class="form-control">
                                            <?=$tour['price'];?>$
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number of Days</label>
                                        <p class="form-control">
                                            <?=$tour['num_day'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Transport of Tour</label>
                                        <p class="form-control">
                                            <?=$tour['trans'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number of Guide</label>
                                        <p class="form-control">
                                            <?=$tour['num_guide'];?>
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
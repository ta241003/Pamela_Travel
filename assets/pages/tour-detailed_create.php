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

    <title>Admin | Create a Tour</title>
</head>
<body>
  
    <div class="container mt-5">
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add a Tour 
                            <a href="admin_detailed--tour.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="tour-detailed_db.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Tour Name</label>
								<input name="tour" class="form-control" type="text" required> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image of Tour</label>
								<input name="image" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price of Tour</label>
								<input name="price" class="form-control" type="number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number of Days</label>
                                <input name="num_day" class="form-control" type="number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Transport of Tour</label>
                                <input name="trans" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number of Guide</label>
                                <input name="num_guide" class="form-control" type="number" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_tour" class="btn btn-primary">Save Tour</button>
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
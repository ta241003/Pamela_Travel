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

    <title>Admin | Create Ticket Tour</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Tour Ticket 
                            <a href="admin_tour.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="tour-ticket_db.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Customer Name</label>
								<input name="name" class="form-control" type="text" required> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Customer Email</label>
								<input name="email" class="form-control" type="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Customer Phone</label>
								<input name="phone" class="form-control" type="tel" pattern="[0-9]{10}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Check In</label>
                                <input name="check_in" class="form-control" type="date" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price Tour</label>
                                <input name="price_total" class="form-control" type="number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number of People</label>
                                <input name="people" class="form-control" type="number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Place</label>
                                <?php 
                                        include("db_config.php");
                                        $query ="SELECT tour FROM tour_destination ORDER BY id ASC";
                                        $result = $conn->query($query);
                                        if($result->num_rows> 0){
                                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                    }
                                ?>

                                <select class="form-control" name="place" required>   
                                    <?php 
                                        foreach ($options as $option) {
                                        ?>
                                        <option><?php echo $option['tour']; ?> </option>
                                <?php 
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bank Account Number</label>
                                <input name="num_acc" class="form-control" type="number" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_ticket" class="btn btn-primary">Save Tour</button>
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
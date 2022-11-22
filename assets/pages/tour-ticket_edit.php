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

    <title>Admin | Edit Tour Ticket</title>
</head>
<body>
  
    <div class="container mt-5">
        <?php include('message.php'); ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tour Ticket Edit 
                            <a href="admin_tour.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $ticket_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM booking_form WHERE id='$ticket_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $ticket = mysqli_fetch_array($query_run);
                                ?>
                                <form action="tour-ticket_db.php" method="POST">
                                    <input type="hidden" name="ticket_id" value="<?= $ticket['id']; ?>">

                                    <div class="mb-3">
                                        <label class="form-label">Customer Name</label>
                                        <input type="text" name="name" value="<?=$ticket['name'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Customer Email</label>
                                        <input type="email" name="email" value="<?=$ticket['email'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Customer Phone</label>
                                        <input type="tel" pattern="[0-9]{10}" name="phone" value="<?=$ticket['phone'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Check In</label>
                                        <input type="date" name="check_in" value="<?=$ticket['check_in'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Price Tour</label>
                                        <input type="number" name="price_total" value="<?=$ticket['price_total'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number of People</label>
                                        <input type="number" name="people" value="<?=$ticket['people'];?>" class="form-control" required>
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

                                        <select class="form-control" name="place" value="<?=$ticket['place'];?>" required>   
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
                                        <input type="number" name="num_acc" value="<?=$ticket['num_acc'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_ticket" class="btn btn-primary">
                                            Update Ticket Information
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
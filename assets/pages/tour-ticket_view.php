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

    <title>Admin | View Ticket Tour Information</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Tour Ticket Details 
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
                                
                                    <div class="mb-3">
                                        <label class="form-label">Customer Name</label>
                                        <p class="form-control">
                                            <?=$ticket['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Customer Email</label>
                                        <p class="form-control">
                                            <?=$ticket['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Customer Phone</label>
                                        <p class="form-control">
                                            <?=$ticket['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Check In</label>
                                        <p class="form-control">
                                            <?=$ticket['check_in'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Price Tour</label>
                                        <p class="form-control">
                                            <?=$ticket['price_total'];?>$
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number of People</label>
                                        <p class="form-control">
                                            <?=$ticket['people'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Place</label>
                                        <p class="form-control">
                                            <?=$ticket['place'];?> 
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Bank Account Number</label>
                                        <p class="form-control">
                                            <?=$ticket['num_acc'];?>
                                        </p>
                                    </div> 
                                    <div class="mb-3">
                                        <label class="form-label">Tour Ticket are created at</label>
                                        <p class="form-control">
                                            <?=$ticket['created_at'];?>
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
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

    <title>Admin | Edit Account User</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Account Edit 
                            <a href="account--user.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $acc_user_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$acc_user_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $acc_user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="admin-account_db.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $acc_user['id']; ?>">

                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="user_name" value="<?=$acc_user['username'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Customer Email</label>
                                        <input type="email" name="user_email" value="<?=$acc_user['email'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Customer New Password</label>
                                        <input type="password" name="user_new_password" value="<?=$acc_user['password'];?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_acc_user" class="btn btn-primary">
                                            Update User Account Information
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
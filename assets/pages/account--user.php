<?php 
    session_start();
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../src/style/home_admin.css"/>
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!----===== Iconscout CSS ===== -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin | Manage Account Users</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Pamela</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="statistic_tour.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Revenue Tour</span>
                </a></li>
                <li><a href="admin_tour.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Tour Ticket</span>
                </a></li>
                <li><a href="admin_detailed--tour.php">
                    <i class="fa-regular fa-clipboard"></i>
                    <span class="link-name">Detailed Tour</span>
                </a></li>
                <li><a href="admin_blog--tour.php">
                    <i class="fa fa-pen-to-square"></i>
                    <span class="link-name">Blog Tour</span>
                </a></li>
                <li><a href="admin_contact.php">
                    <i class="fa fa-address-book"></i>
                    <span class="link-name">Contact</span>
                </a></li>
                <li><a href="admin_comment.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <div class="separator_line"></div>
                <li><a href="account--user.php">
                    <i class="fa fa-users"></i>
                    <span class="link-name">Account Users</span>
                </a></li>
                <li><a href="account--admin.php">
                    <i class="fa fa-user-shield"></i>
                    <span class="link-name">Account Admin</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li>
                    <a href="admin-change--password.php">
                    <i class="fa fa-user-gear"></i>
                        <span class="link-name">Change Password</span> 
                    </a>
                </li>   
                <li>
                    <a href="login_admin.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span> 
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="avatar--login">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION["admin"]; ?>                 
            </div>
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">

            <div class="activity">
                <div class="title">
                <i class="fa fa-rectangle-list"></i>
                    <span class="text">List Of Account Users</span>
                </div>

                <?php include('message.php'); ?>

                <div class="card-header" style="border-radius: 20px; margin-bottom: 1rem;">
                        <h4>Account Users Details
                            <a href="admin-register--user.php" class="btn btn-primary float-end">Add Account User</a>
                        </h4>
                </div>

                <table class="table table-bordered activity-data">
                    <thead>
                        <tr>
                            <th class="data-title">ID User</th>
                            <th class="data-title">Username</th>
                            <th class="data-title">Email</th>
                            <th class="data-title">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $conn = mysqli_connect("localhost","root","","travel_web");

                        $query = "SELECT * FROM users";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $acc_user)
                                {
                                    ?>
                                    <tr>
                                        <td class="data-list"><?= $acc_user['id']; ?></td>
                                        <td class="data-list"><?= $acc_user['username']; ?></td>
                                        <td class="data-list"><?= $acc_user['email']; ?></td>
                                        <td class="data-list"><?= $acc_user['password']; ?></td>
                                        <td>
                                            <a href="admin-edit--user.php?id=<?= $acc_user['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="admin-account_db.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_acc-user" value="<?=$acc_user['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="9">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../src/javascript/admin.js"></script>
</body>
</html>
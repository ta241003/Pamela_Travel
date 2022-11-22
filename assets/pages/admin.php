<?php
session_start();

if (!isset($_SESSION["admin"])) {
    $_SESSION["msg"] = "You must log in first";
    header("location: login_admin.php");
}
// if (isset($_GET["logout"])) {
//     session_destroy();
//     unset($_SESSION["admin"]);
//     header("location: login_admin.php");
// }       
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
    <title>Admin Dashboard Panel</title>
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
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-money-withdraw"></i>
                        <span class="text">Total revenue</span>
                        <span class="number"></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-shopping-cart"></i>
                        <span class="text">Tour Tickets sold</span>
                        <?php
                            $con = mysqli_connect("localhost","root","","travel_web");
                            $query = "SELECT people FROM booking_form";
                            $query_run = mysqli_query($con, $query);
                            $total_ticket = 0;

                            while($result = mysqli_fetch_array($query_run)) {
                                $total_ticket += $result['people'];
                            }
                        ?>
                        <span class="number"><?php echo $total_ticket ;?></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-usd-circle"></i>
                        <span class="text">Total Profits</span>
                        <?php
                            $con = mysqli_connect("localhost","root","","travel_web");
                            $query = "SELECT price_total FROM booking_form";
                            $query_run = mysqli_query($con, $query);
                            $total_price = 0;

                            while($result = mysqli_fetch_array($query_run)) {
                                $total_price += (double)$result['price_total'];
                            }
                        ?>
                        <span class="number"><?php echo $total_price ;?>$</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Customer Book Tour Recently</span>
                </div>

                <table class="table table-bordered activity-data">
                    <thead>
                        <tr>
                            <th class="data-title">Name</th>
                            <th class="data-title">Email</th>
                            <th class="data-title">Check In</th>
                            <th class="data-title">Place</th>
                            <th class="data-title">Total Tour Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $con = mysqli_connect("localhost","root","","travel_web");

                        $query = "SELECT * FROM booking_form ORDER BY id DESC";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td class="data-list"><?= $row['name']; ?></td>
                                        <td class="data-list"><?= $row['email']; ?></td>
                                        <td class="data-list"><?= $row['check_in']; ?></td>
                                        <td class="data-list"><?= $row['place']; ?></td>
                                        <td class="data-list"><?= $row['price_total']; ?>$</td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="5">No Record Found</td>
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
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

<?php
require 'db_config.php';
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin | Statistic Revenue per Month</title>

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
                    <i class="uil uil-chart"></i>
                    <span class="text">Statistic Revenue per Month in 2022</span>
                </div>
                
                <?php
                    $query_1 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='January'";
                    $query_run_1 = $conn->query($query_1);
                    $record_1 = $query_run_1->fetch_array();
                    $total_1 = $record_1['total_revenue'];
                    $query_month_1 = "UPDATE revenue_month SET total_revenue='$total_1' WHERE month='January'";
                    $query_run_month_1 = mysqli_query($conn, $query_month_1);
                    
                    // echo $total_1;

                    $query_2 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='February'";
                    $query_run_2 = $conn->query($query_2);
                    $record_2 = $query_run_2->fetch_array();
                    $total_2 = $record_2['total_revenue'];
                    $query_month_2 = "UPDATE revenue_month SET total_revenue='$total_2' WHERE month='February'";
                    $query_run_month_2 = mysqli_query($conn, $query_month_2);
                    
                    // echo $total_2;

                    $query_3 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='March'";
                    $query_run_3 = $conn->query($query_3);
                    $record_3 = $query_run_3->fetch_array();
                    $total_3 = $record_3['total_revenue'];
                    $query_month_3 = "UPDATE revenue_month SET total_revenue='$total_3' WHERE month='March'";
                    $query_run_month_3 = mysqli_query($conn, $query_month_3);
                    
                    // echo $total_3;

                    $query_4 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='April'";
                    $query_run_4 = $conn->query($query_4);
                    $record_4 = $query_run_4->fetch_array();
                    $total_4 = $record_4['total_revenue'];
                    $query_month_4 = "UPDATE revenue_month SET total_revenue='$total_4' WHERE month='April'";
                    $query_run_month_4 = mysqli_query($conn, $query_month_4);
                    
                    // echo $total_4;

                    $query_5 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='May'";
                    $query_run_5 = $conn->query($query_5);
                    $record_5 = $query_run_5->fetch_array();
                    $total_5 = $record_5['total_revenue'];
                    $query_month_5 = "UPDATE revenue_month SET total_revenue='$total_5' WHERE month='May'";
                    $query_run_month_5 = mysqli_query($conn, $query_month_5);
                    
                    // echo $total_5;

                    $query_6 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='June'";
                    $query_run_6 = $conn->query($query_6);
                    $record_6 = $query_run_6->fetch_array();
                    $total_6 = $record_6['total_revenue'];
                    $query_month_6 = "UPDATE revenue_month SET total_revenue='$total_6' WHERE month='June'";
                    $query_run_month_6 = mysqli_query($conn, $query_month_6);
                    
                    // echo $total_6;

                    $query_7 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='July'";
                    $query_run_7 = $conn->query($query_7);
                    $record_7 = $query_run_7->fetch_array();
                    $total_7 = $record_7['total_revenue'];
                    $query_month_7 = "UPDATE revenue_month SET total_revenue='$total_7' WHERE month='July'";
                    $query_run_month_7 = mysqli_query($conn, $query_month_7);
                    
                    // echo $total_7;

                    $query_8 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='August'";
                    $query_run_8 = $conn->query($query_8);
                    $record_8 = $query_run_8->fetch_array();
                    $total_8 = $record_8['total_revenue'];
                    $query_month_8 = "UPDATE revenue_month SET total_revenue='$total_8' WHERE month='August'";
                    $query_run_month_8 = mysqli_query($conn, $query_month_8);
                    
                    
                    // echo $total_8;

                    $query_9 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='September'";
                    $query_run_9 = $conn->query($query_9);
                    $record_9 = $query_run_9->fetch_array();
                    $total_9 = $record_9['total_revenue'];
                    $query_month_9 = "UPDATE revenue_month SET total_revenue='$total_9' WHERE month='September'";
                    $query_run_month_9 = mysqli_query($conn, $query_month_9);
                    
                    // echo $total_9;

                    $query_10 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='October'";
                    $query_run_10 = $conn->query($query_10);
                    $record_10 = $query_run_10->fetch_array();
                    $total_10 = $record_10['total_revenue'];
                    $query_month_10 = "UPDATE revenue_month SET total_revenue='$total_10' WHERE month='October'";
                    $query_run_month_10 = mysqli_query($conn, $query_month_10);
                    
                    // echo $total_10;

                    $query_11 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='November'";
                    $query_run_11 = $conn->query($query_11);
                    $record_11 = $query_run_11->fetch_array();
                    $total_11 = $record_11['total_revenue'];
                    $query_month_11 = "UPDATE revenue_month SET total_revenue='$total_11' WHERE month='November'";
                    $query_run_month_11 = mysqli_query($conn, $query_month_11);
                    
                    // echo $total_11;

                    $query_12 = "SELECT SUM(price_total) AS total_revenue FROM booking_form WHERE month='December'";
                    $query_run_12 = $conn->query($query_12);
                    $record_12 = $query_run_12->fetch_array();
                    $total_12 = $record_12['total_revenue'];
                    $query_month_12 = "UPDATE revenue_month SET total_revenue='$total_12' WHERE month='December'";
                    $query_run_month_12 = mysqli_query($conn, $query_month_12);
                    
                    // echo $total_12;
                ?>

                <?php
                // Insert sql statement
                    //  $query = "insert into revenue_month(month, total_revenue) values
                    // ('January', '$total_1'), ('February', '$total_2'),
                    // ('March', '$total_3'), ('April', '$total_4'),
                    // ('May', '$total_5'), ('June', '$total_6'),
                    // ('July', '$total_7'), ('August', '$total_8'),
                    // ('September', '$total_9'), ('October', '$total_10'),
                    // ('November', '$total_11'), ('December', '$total_12')";

                // Get date table from revenue_month database
                    $query = $conn->query("
                    SELECT month, total_revenue FROM revenue_month
                    ");
                
                    foreach($query as $data)
                    {
                    $month[] = $data['month'];
                    $total_revenue[] = $data['total_revenue'];
                    }
                ?>

                    <div style="width: 1620px; height: 720px;">
                    <canvas id="myChart"></canvas>
                    </div>
                    
                    <script>
                    // === include 'setup' then 'config' above ===
                    const labels = <?php echo json_encode($month) ?>;
                    const data = {
                        labels: labels,
                        datasets: [{
                        label: 'Total Revenue (dolar $)',
                        data: <?php echo json_encode($total_revenue) ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)',                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)',
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                        }]
                    };

                    const config = {
                        type: 'bar',
                        data: data,
                        options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                        },
                    };

                    var myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );
                    </script>                
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../src/javascript/admin.js"></script>
</body>
</html>
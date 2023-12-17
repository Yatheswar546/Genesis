<?php 
    session_start();
    // include_once('./database.php');
    // if (($_SESSION['user_role']=='admin')) {
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    
    <title>Admin Dashboard | Registration and Login System </title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="../images/tablogo.png" type="image/x-icon">

    <!-- Custom CSS Link -->
    <link href="../css/admin.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once('./includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('./includes/sidebar.html');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <?php
                            // $query=mysqli_query($con,"select id from users");
                            // $totalusers=mysqli_num_rows($query);
                        ?>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Total Registered Users
                                    <span style="font-size:22px;">
                                        <?php //echo $totalusers;?>
                                    </span>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="./users/read.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <?php
                            // $query1=mysqli_query($con,"select id from users where date(posting_date)=CURRENT_DATE()-1");
                            // $yesterdayregusers=mysqli_num_rows($query1);
                        ?>
                    </div>


                    <div class="row">

                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-info text-white mb-4" style="text-align:center">
                                <div class="card-body">Post a Job</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="text-align:center"
                                        href="./post_job/post_job.php">Post a Job</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
        </main>
        <?php //include_once('../includes/footer.php'); ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
<?php 
    // }
    // else{
    //     header('location:logout.php');
    // }    
?>
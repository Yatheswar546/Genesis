<?php// session_start();
//include_once('../includes/config.php');
//if (($_SESSION['user_role']=='admin')) {

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Between Dates report date selection | Registration and Login System</title>

    <!-- Custom CSS Link -->
    <link href="../../css/admin.css" rel="stylesheet" />

    <!-- Font Awesome Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

</head>

<body class="sb-nav-fixed"> 
    <?php  include_once('../includes/navbar1.php');?>
    <div id="layoutSidenav">
        <?php include_once('../includes/sidebar1.html');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">B/w Dates Report Date Selection</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sort the Users</li>
                    </ol>

                    <div class="card mb-4">
                        <form method="post" name="bwdatesreport" action="./bwdates-report-result.html">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>From Date</th>
                                        <td><input class="form-control" id="fromdate" name="fromdate" type="date"
                                                value="" required /></td>
                                    </tr>
                                    <tr>
                                        <th>To Date</th>
                                        <td><input class="form-control" id="todate" name="todate" type="date" value=""
                                                required /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align:center ;"><button type="submit"
                                                class="btn btn-primary btn-block" name="submit">Submit</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <?php // include('../includes/footer.php');?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>
    <script src="../../js/datatables-simple-demo.js"></script>

</body>

</html>
<?php  
    // }
    // else{
    //     header('location:logout.php');
    // }    
?>
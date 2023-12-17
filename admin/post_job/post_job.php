<?php 
    session_start();
    
    include_once('../../config.php');
    
    // if (($_SESSION['user_role']!='admin')) {
    //   header('location:logout.php');
    // } 
    // else{
    //     // for deleting user
    //     if(isset($_GET['id']))
    //     {
    //         $adminid=$_GET['id'];
    //         $msg=mysqli_query($con,"DELETE from users WHERE id='$adminid'");
    //         if($msg)
    //         {
    //         echo "<script>alert('Data deleted');</script>";
    //         }
    //     }

    if($_SERVER["REQUEST_METHOD"] ==  "POST")
    {
        $job_title = $_POST['job_title'];
        $job_description = addslashes( $_POST['job_description']);
        $job_location = $_POST['job_location'];
        $contact_email = $_POST['contact_email'];
    
        $jobid = md5(substr($job_title,0,3).substr($contact_email,0,3).random_int(10000,99999));

        $sql = mysqli_query($db,"INSERT INTO `jobs`(`title`, `description`, `location`, `email`, `jobid`)  VALUES ('$job_title','$job_description','$job_location','$contact_email','$jobid')");

        if($sql){
            echo "<script>alert('Job Successfully Posted');</script>";
            // echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            header("Location: ../dashboard.php");
        }
        else{
            echo "<script>alert('Something went wrong');</script>";
        }

    }

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

    <title>GENESIS IT SOLUTIONS-Jobs</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="../../images/tablogo.png" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/post_job.css">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <style>
        li a{
            text-decoration: none;
            color: #000;
        }
    </style>

</head>

<body class="sb-nav-fixed">
    <?php  include_once('../includes/navbar1.php');?>
    <div id="layoutSidenav">
        <?php include_once('../includes/sidebar1.html');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Post a Job</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Post a Job</li>
                    </ol>

                    <div class="job-posting-section">
                        <h2>Post a Job</h2>
                        <!-- <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>" method="POST"> -->
                        <form action="#" method="post">
                            <label for="job_title">Job Title:</label>
                            <input type="text" name="job_title" required>

                            <label for="job_description">Job Description:</label>
                            <textarea name="job_description" rows="4" required></textarea>

                            <label for="job_location">Job Location:</label>
                            <input type="text" name="job_location" required>

                            <label for="contact_email">Contact Email</label>
                            <input type="email" name="contact_email" required>

                            <button type="submit">Add Job</button>
                        </form>
                    </div>
                </div>
            </main>
            <?php // include('../includes/footer.php');?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../../js/datatables-simple-demo.js"></script>

    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>


</body>

</html>
<?php //} ?>
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
    
        $adminid = md5(substr($name,0,3).substr($email,0,3).random_int(10000,99999));

        $sql = mysqli_query($db,"INSERT INTO `admins`(`name`, `email`, `phone`, `adminid`, `password`) VALUES ('$name','$email','$phone','$adminid', '$password')");

        if($sql){
            echo "<script>alert('Admin Added Successfully ');</script>";
            // echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            header("Location: ./read.php");
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

  <title>Manage Admins</title>

  <!-- Webiste Icon -->
  <link rel="shortcut icon" href="../../images/tablogo.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="stylesheet" href="../../css/post_job.css">

  <style>
    a{
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
          <h1 class="mt-4">Add Admins</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="./read.php">Manage Admins</a></li>
          </ol>

          <div class="job-posting-section">
            <h2>Add a Admin</h2>
            <form action="#" method="post">
              <label for="name">Name:</label>
              <input type="text" name="name" required>

              <label for="email">Email:</label>
              <input type="email" name="email" required>

              <label for="phone">Phone:</label>
              <input type="phone" name="phone" required>

              <label for="password">Password:</label>
              <input type="password" name="password" required>

              <button type="submit">Add Admin</button>
            </form>
          </div>
        </div>
      </main>
      <?php // include('../includes/footer.php');?>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Script -->
  <script src="../../js/scripts.js"></script>


</body>

</html>
<?php //} ?>
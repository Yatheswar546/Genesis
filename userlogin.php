<?php 
    session_start();

    include_once('./config.php');

    // Code for login
    if($_SERVER["REQUEST_METHOD"] ==  "POST")
    {       
        $useremail = $_POST['uemail'];
        $password = $_POST['password'];
        
        $sql = mysqli_query($db, "SELECT * FROM `users` WHERE email='$useremail' and password='$password'");
        
        $row = mysqli_fetch_array($sql);
        if ($row > 0) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['fname'];
            $_SESSION['role'] = $row['role']; 

            // echo "<script>alert('Login successfully');</script>";

            header("Location: ./index.php");

        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }

    }
?>

<!-- Your existing HTML content and the rest of the code below -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>GENESIS IT SOLUTIONS | User Login</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="./images/tablogo.png" type="image/x-icon">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./css/userlogin.css">
    
    <!-- Font Awesome Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">

                                <div class="card-header">
                                    <h2 style="text-align:center">Genesis Login System</h2>
                                    <hr />
                                    <h3 class="text-center font-weight-light my-4">User Login</h3>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="#">

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="uemail" type="email"
                                                placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>


                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password"
                                                placeholder="Password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>


                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password-recovery.php">Forgot Password?</a>
                                            <button class="btn btn-primary" name="login" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./usersignup.php">Need an account? Sign up!</a></div>
                                    <div class="small"><a href="./index.php">Back to Home</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <?php //include('includes/footer.php');?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
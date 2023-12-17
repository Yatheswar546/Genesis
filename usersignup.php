<?php 
    
    session_start();

    include_once('./config.php');


    // //Code for Registration 
    if($_SERVER["REQUEST_METHOD"] ==  "POST")
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
    
        $userid = md5(substr($fname,0,3).substr($contact,0,3).random_int(10000,99999));
    
        if($password != $cpassword){
            echo "<script>alert('Password should Match');</script>";
        }
    
        $sql = mysqli_query($db,"SELECT * FROM `users` WHERE email='$email'");
    
        $row = mysqli_num_rows($sql);
    
        if($row>0)
        {
            echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
        } else{
            $msg = mysqli_query($db,"INSERT INTO `users`(`fname`, `lname`, `email`, `phone`, `password`, `userid`)  VALUES ('$fname','$lname','$email','$contact','$password','$userid')");
        }
        if($msg)
        {
            echo "<script>alert('Registered successfully');</script>";
            // echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            header("Location: userlogin.php");
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

    <title>GENESIS IT SOLUTIONS | User Signup</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="./images/tablogo.png" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/usersignup.css" />

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 form">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h2 style="text-align:center">Registration and Login System</h2>
                                    <hr />
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="#" name="signup" onsubmit="return checkpass();">

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="fname" name="fname" type="text"
                                                        placeholder="Enter your first name" required />
                                                    <label for="inputFirstName">First name</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="lname" name="lname" type="text"
                                                        placeholder="Enter your last name" required />
                                                    <label for="inputLastName">Last name</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="phpgurukulteam@gmail.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>


                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="contact" name="contact" type="text"
                                                placeholder="1234567890" required pattern="[0-9]{10}"
                                                title="10 numeric characters only" maxlength="10" required />
                                            <label for="inputcontact">Contact Number</label>
                                        </div>



                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" name="password"
                                                        type="password" placeholder="Create a password"
                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                        title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                                                        required />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="confirmpassword"
                                                        name="confirmpassword" type="password"
                                                        placeholder="Confirm password"
                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                        title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                                                        required />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pattern">
                                            All Fields are Mandatory
                                            <br>
                                            Password should be in this format
                                            <ul style="list-style: none">
                                                <li>Atleast a number</li>
                                                <li>Atleast a LowerCase Letter & UpperCase Letter</li>
                                                <li>Minimum length of 6 </li>
                                            </ul>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block"
                                                    name="submit">Create Account</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./userlogin.php">Have an account? Go to login</a></div>
                                    <div class="small"><a href="./index.php">Back to Home</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php //include_once('includes/footer.php');?>
    </div>
    
    <!------------------------ Bootstrap JS -------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>


    <!------------------------ Font Awesome JS -------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>

    <!------------------------ Custom JS -------------------->
    <script src="./js/scripts.js"></script>


</body>

</html>
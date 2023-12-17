<?php

  session_start();

  if(isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
  }


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">


    <title>GENESIS IT SOLUTIONS-Location</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="./images/tablogo.png" type="image/x-icon">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/location.css">

</head>

<body>

    <!----------------------------------- NAVBAR ----------------------------------->
    <div class="topnav" id="myTopnav">
        <a href="./index.php" class="active"><img src="./images/logo.png" height="50px" width="inherit"></a>
        <input type="checkbox" id ="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./jobs.php">Find Jobs</a></li>
            <li><a href="./location.php">Location</a></li>

            <?php if(isset($_SESSION['role']) && ($_SESSION['role']=='user')): ?>
            <li><a href="#">Welcome
                    <?php echo $_SESSION['name']; ?>
                </a></li>
            <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>

            <?php elseif(isset($_SESSION['role']) && ($_SESSION['role']=='admin')): ?>
            <li><a href="#">Welcome
                    <?php echo $_SESSION['name']; ?>
                </a></li>
            <li><a href="./admin/dashboard.php">Admin Panel</a></li>
            <li><a href="./logout.php" style="font-weight: 600; color: red;">Logout</a></li>

            <?php else: ?>
            <li><a href="./adminlogin.php">Admin Login</a></li>
            <li><a href="./userlogin.php">User Login</a></li>

            <?php endif; ?>
        </ul>
        </a>
    </div>

    <!------------------------------ MAIN SECTION ------------------------>

    <h2 class="heading">Directory of Genisis IT Solutions location</h2>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3418.4236831659914!2d-96.751469!3d33.157973!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c3df8fa9587cb%3A0xbaf25e7c9abf4299!2s9753%20Brackenfield%20Ln%2C%20Frisco%2C%20TX%2075035%2C%20USA!5e1!3m2!1sen!2sin!4v1690270325102!5m2!1sen!2sin"
        width="90%" height="650" style="border:0;margin-left: 5%;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <!---------------------------- Footer Section ---------------------------->
    <footer class="footer location-footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="image"><img src="./images/logo.png" alt=""></div>
                <div>
                    <nav class="footer-nav">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#services">Services</a>
                        <a href="#contact">Contact</a>
                    </nav>
                </div>
                <div class="company-name">
                    <p>&copy; 2023 <a href="http://pravishree.com">pravishree design co. All rights reserved</a></p>
                </div>
            </div>
        </div>
    </footer>


    <!----------- CUSTOM Script ------------------------>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }


    </script>

</body>

</html>
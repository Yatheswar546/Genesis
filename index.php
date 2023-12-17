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
    <meta name="description"
        content="GENESIS IT SOLUTIONS provides outsourcing, staffing, consulting, and workforce solutions within various industries. Find jobs and career opportunities here.">
    <meta name="keywords"
        content="GENESIS IT SOLUTIONS, outsourcing, staffing, consulting, workforce solutions, jobs, career opportunities">
    <link rel="canonical" href="https://example.com/homepage.html">
    <meta property="og:title" content="GENESIS IT SOLUTIONS - Homepage">
    <meta property="og:description"
        content="GENESIS IT SOLUTIONS provides outsourcing, staffing, consulting, and workforce solutions within various industries. Find jobs and career opportunities here.">
    <meta property="og:image" content="https://example.com/og-image.jpg">
    <meta property="og:url" content="https://example.com/homepage.html">


    <title>GENESIS IT SOLUTIONS</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="./images/tablogo.png" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>


    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/index.css">


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

    <!----------------------- BANNER -------------------------------->
    <div class="banner">
        <div class="slider slider1" style="background-image: url('./images/banner.jpg');">
            <h2 class="heading">Find Your Career to <br>Make a Better Life</h2>
            <div class="form">
                <form action="#" method="post">
                    <h2>Contact Us</h2>
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="email" name="email" placeholder="Your Email">
                    <input type="text" name="phone" placeholder="Your Phone">
                    <textarea name="message" placeholder="Your Message"></textarea>
                    <input type="submit" value="Send Message">
                </form>
           </div>
        </div>
        <div class="overlay"></div>
    </div>

    <!--------------------------------- ABOUT SECTION -------------------------------------------->
    <div class="container-img-para about-section">
        <div class="image-section">
            <img src="./images/about.jpg">
        </div>
        <div class="content-section">
            <h2>ABOUT GENESIS?</h2>

            <p>We provide outsourcing, staffing, consulting
                and workforce solutions within the areas of engineering, accounting and finance, health-care, human
                resources,
                IT, legal, life sciences,</span> manufacturing and logistics, office and administration and sales and
                marketing.
                We can’t wait to tell you all about it.

            </p>
            <button><a href="./about.php">Read More</a></button>
        </div>
    </div>

    <!------------------------ Find Jobs Section ------------------------->
    <div class="img-2 find-jobs">

        <img src="./images/find-jobs.jpg" alt="office">

        <div class="content">
            <div class="heading">
                <h2 class="heading1">
                    Career Search underway?
                </h2>
                <br>
                <h2 class="heading2">
                    look no further!
                </h2>
            </div>

            <button class="btn-2"><a href="./jobs.php">Find Jobs</a></button>
        </div>
    </div>

    <!------------------------------- Footer Section ----------------------->
    <footer class="footer">
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


    <!------------------- Custom Script  --------------------------->
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
<?php

    // Check if the user is logged in
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

    <title>GENESIS IT SOLUTIONS</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="./images/tablogo.png" type="image/x-icon">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/about.css" />

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

    <!----------------------------------- ABOUT SECTION ----------------------------------->
    <div class="about-page">
        <div class="container">
            <div class="content-section">
                <p class="content">
                    <span class="sub-heading">ABOUT GENESIS</span>
                    <br>
                    Genesis IT Solutions is an consulting IT recruitment management and staffing organization. We serve
                    clients from various geographies with our dedicated team of professionals in US and India. With our
                    deep
                    domain experience, staffing expertise and efficient processes, we provide placement, temporary
                    staffing
                    and IT solutions to our customers.

                    <br>

                    Commitment to Quality and Customer Satisfaction, Long term value are at the core of Genesis IT
                    Solutions´s culture. We have created a perfect process which enables us to take care of all your
                    staffing needs in most efficient manner. Our specialized teams of HR and Functional specialists are
                    available to assist your organization to identify, recruit and place the winners at the right time
                    and
                    place.
                </p>
            </div>

            <div class="image-section">
                <img src="./images/about-logo.png" style="align-self: center;" alt="office" class="about-logo">
            </div>
        </div>

        <div class="container container2">
            <div class="image-section">
                <img src="./images/about-logo.png" style="align-self: center;" alt="office" class="about-logo">
            </div>

            <div class="content-section">
                <p>
                    Genesis IT Solutions presents a unique IT staffing offering which is fully process oriented and
                    efficient, while being flexible to meet your requirements. We working with hundreds of satisfied
                    customers, earning the tag of THE recruitment partner who understands YOU. We are a prominent
                    Executive
                    Search and Staffing Company, providing a wide range of recruitment solutions for various IT
                    requirements. We take pride in understanding our customers and providing exactly what they are
                    looking
                    for, reducing their staffing lead time to the minimum. That´s why companies across the globe
                    consider us
                    as their recruitment partners who take care for them.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="content-section">
                <p>
                    When you work with Genesis IT Solutions, you have a one-stop staffing source. We work with companies
                    of
                    all sizes, from start-ups to Fortune 500 organizations, connecting the right talents for the right
                    requirements. Our professional database is constantly tested, trained, up skilled and certified to
                    ensure only the good ones reach for both permanent and project based recruitment. Our result
                    oriented
                    approach gives you the transparency in terms of why we feel a particular candidate is suitable for
                    your
                    requirement as well as the metrics to measure their performance on an ongoing basis.

                    <br>
                </p>
            </div>

            <div class="image-section">
                <img src="./images/about-logo.png" style="align-self: center;" alt="office" class="about-logo">
            </div>
        </div>

        <div class="container container2">
            <div class="image-section">
                <img src="./images/about-logo.png" style="align-self: center;" alt="office" class="about-logo">
            </div>

            <div class="content-section">
                <p>
                    <span class="sub-heading">QUALITY PROCESS</span>

                    <br>

                    Our certified consultants work closely with your team to understand the application requirements
                    clearly, presenting an agile cost effective plan of action. We are a costumer focused enterprise,
                    providing our best practices to align with your goals and expectations. Our consultants collaborate
                    with
                    the customer representatives to ensure the application is constantly being reviewed, accepted as we
                    fully understand the importance of spotting mismatches early in the project cycle. Genesis IT
                    Solutions,
                    your trusted development partner presents a series of customizable offerings to suit your every
                    application / product development needs.

                    <br>
                    <span class="sub-heading">QUALITY POLICY</span>

                    <br>

                    Genesis IT Pledges to provide the right specialized candidates that meet customer requirements
                    efficiently and consistently, and is committed to its organizational goal for continuous growth
                    without
                    loss of quality or customer satisfaction.

                </p>
            </div>
        </div>
        <div class="directors">
            <p class="director">Founder: Sridhar</p>
            <p class="director">Co-Founder: Vijay </p>
        </div>
    </div>

    <!------------------------------- Footer Section ----------------------->
    <footer class="footer about-footer">
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

    <!-- Custom Script -->
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

<!-- 
                    <p class="directors">
                <p class="director">Founder : SRIDHAR</p>
                <p class="director">Co-Founder : VIJAY KUMAR sir</p>
                </p>
 -->
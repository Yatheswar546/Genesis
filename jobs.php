<?php

  session_start();

  include_once('./config.php');

  if(isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
    // echo $user_id."<br>";
    // $result = mysqli_query($db,"SELECT * FROM `users` WHERE id='$user_id'");
    // $row = mysqli_fetch_assoc($result);
    // $userid = $row['userid'];
    // echo $userid;

  }


  //////////////////////// Uploading the Resume ///////////////////   
  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["resume"])){
    // $target = './resumes/';
    // $filename = $_FILES["resume"]["name"];
    // $filetype = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    // $target_file = $target.basename(md5("resumeid".$filename).".".$filetype);
    // $file = md5("resumeid".$filename).".".$filetype;
    
    $target = './resumes/';
    $target_file = $target.basename($_FILES["resume"]["name"]);
    $filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $result = mysqli_query($db,"SELECT * FROM `users` WHERE id='$user_id'");
    // echo $result;
    $row = mysqli_fetch_assoc($result);
    $userid = $row['userid'];

    $resumeid = md5(substr($userid,0,10).random_int(10000,99999));

    if(($filetype == "pdf" || $filetype == "doc" || $filetype == "docx")){
        if(move_uploaded_file($_FILES["resume"]["tmp_name"],$target_file)){

            // chmod("./resumes/" . $file, 0777);
            $file = $_FILES["resume"]["name"];
            
            $sql = "INSERT INTO `resumes`(`userid`, `resume`, `resumeid`, `filetype`, `path`) VALUES ('$userid','$file','$resumeid','$filetype','$target')";
            $result = mysqli_query($db, $sql);

            if($result){
                echo "<script>alert('Uploaded successfully');</script>";
            
            }
            else{
                echo "<script>alert('Something Went Wrong');</script>";
            
            }
        }
        else{
            echo "<script>alert('File not Moved');</script>";
        }
    }
    else{
        echo "<script>alert('File not Accepted');</script>";
    }
  }

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>GENESIS IT SOLUTIONS-Jobs</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="./images/tablogo.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <!-- Jquery CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/jobs.css">

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

    <!------------------ RESUME UPLOAD FORM MODAL -------------------->
    <div class="modal fade resume-modal" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="resumeModalLabel">Upload Your Resume</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Resume Form here -->
                    <?php if(!isset($_SESSION['id'])): ?>
                        <h4>You need to login for uploading your resume</h4>
                    <?php endif; ?>

                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="Resume" class="form-label">Resume</label>
                            <input type="file" class="form-control" id="resume" name="resume">
                        </div>

                        <?php if(isset($_SESSION['id'])): ?>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!------------------------ RESUME SECTION ---------------------------->
    <div class="resume-section">
        <div class="content-section">
            <p class="paragraph">
                Your NEW RESUME is just seconds away.
            </p>
            <p class="caption">Fill in your contact information so we can build a new professional resume that you can
                use to start applying for jobs today.</p>
            
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#resumeModal">
                Upload your Resume
            </button>
        </div>
        <div class="image-section">
            <img src="./images/resume.svg" class="responsive">
        </div>
    </div>

    <!-------------------------- NEW JOBS SECTION ----------------------->
    <div class="jobs-section">
        <div class="job">
            <div class="job-lists">
                <div class="container">
                    <div class="heading">
                        <h2>NEW JOBS</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Display Saved Job Postings -->
        <div class="jobs">
            <div class="container">
                <i class="fa-solid fa-chevron-left prev"></i>
                <i class="fa-solid fa-chevron-right next"></i>

                <div class="job-postings">

                    <?php

                        $jobs = mysqli_query($db,"SELECT * FROM `jobs`");
                        $count = mysqli_num_rows($jobs);

                        if(!$jobs){
                            die("Query Failed.....".mysqli_error($db));
                        }
                        else{
                            if($count<1){
                                echo "<h4>No Jobs are Posted</h4>";
                            }
                            else{
                                while($row = mysqli_fetch_assoc($jobs)){
                                    $description = $row['description'];
                                    $substring = substr($description,0,10);
                                    $description = $substring."...";
                                    // <p>$description</p>
                                    // 
                                    //
                                    //    
                                    //         <div id='popup' class='popup'>
                                    //             <span class='popup-content'>Successfully applied</span>
                                    //         </div>
                                    echo "
                                        <div class='job-item'>
                                            <h3>$row[title]</h3>
                                            <p class='location'>Location: $row[location]</p>
                                            <p class='email'>Email: $row[email]</p> 
                                            <div class='button'><a href='./single-job.php?id=$row[id]' id='popup'>Read More</a></div>
                                        </div>
                                    ";
                                }
                            }
                            
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------- Footer Section ----------------------->
    <footer class="footer jobs-footer">
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


    <!-- Jquery Script Tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Slick JS -->
    <script src="./js/slick.min.js"></script>

    <script src="./js/slick.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!----------- NAVBAR RESPONSIVE --------------->
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

    <!------------------------------- For Jobs Refreshing ------------------------>
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const refreshButton = document.getElementById("refresh-btn");
            refreshButton.addEventListener("click", function () {
                fetchJobs(); // Fetch updated job listings from the server
            });
        });

        function fetchJobs() {
            // Perform AJAX request to fetch the latest job listings from the server
            fetch("path/to/your/api/endpoint.php") // Replace with the actual path to your server-side script that retrieves job listings
                .then((response) => response.json())
                .then((data) => {
                    // Update the job listings section with the new data
                    const jobListings = document.querySelector(".job-listings");
                    jobListings.innerHTML = ""; // Clear existing job listings

                    // Loop through the new job data and create HTML elements for each job listing
                    data.forEach((job) => {
                        const jobListingElement = createJobListingElement(job);
                        jobListings.appendChild(jobListingElement);
                    });
                })
                .catch((error) => {
                    console.error("Error fetching job data:", error);
                });
        }

        function createJobListingElement(job) {
            // Create HTML elements for each job listing
            const jobListing = document.createElement("div");
            jobListing.classList.add("job-listing");
            jobListing.innerHTML = `
                <div class="job-title">${job.title}</div>
                <div class="job-description">${job.description}</div>
                <div class="contact-info">Contact: ${job.location}</div>
                <form action="${window.location.href}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="job_id" value="${job.id}">
                  <input type="text" name="name" placeholder="Your Name" required>
                  <input type="email" name="email" placeholder="Your Email" required>
                  <input type="file" name="resume" accept=".pdf,.doc,.docx" required>
                  <button type="submit" name="apply_job" class="btn-1">Apply Now</button>
                </form>
            `;

            return jobListing;
        }
    </script> -->

    <!--  
    <script>
        document.getElementById('popupButton').addEventListener('click', function () {
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
            setTimeout(function () {
                popup.style.display = 'none';
            }, 2000); // Hide the popup after 2 seconds (2000 milliseconds)
        });
    </script>
    -->

</body>

</html>
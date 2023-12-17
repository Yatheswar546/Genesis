<?php 
    session_start();

    include_once('../../config.php');

    $users = mysqli_query($db,"SELECT * FROM `users` LEFT JOIN `resumes` ON users.userid = resumes.userid");

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

    <title>Manage Users | Registration and Login System</title>

    <!-- Webiste Icon -->
    <link rel="shortcut icon" href="../../images/tablogo.png" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/admin.css">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <style>
        a{
            text-decoration: none;
            color: #000;
        }
        button{
           background-color: #0047AB;
           border-radius: 5px;
           color: #fff; 
        }
        button:hover{
            background-color: #032250;
        }
    </style>

</head>

<body class="sb-nav-fixed">
    <?php include_once('../includes/navbar1.php');?>
    <div id="layoutSidenav">
        <?php include_once('../includes/sidebar1.html');?>
        <div id="layoutSidenav_content">
            <main> 
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manage Users</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Users</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Users Details
                        </div>
                        <div class="card-body">
                            <table class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Resume</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                        if(!$users){
                                            die("Invalid Query !!!".mysqli_error($db));
                                        }
                                        else{   
                                            $count = 1;
                                            while($row = mysqli_fetch_assoc($users)){

                                                if(isset($row['resume'])){
                                                    $file_path = '../../resumes/' . $row['resume'];
                                                    $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                                                    // Set the appropriate MIME type based on the file extension
                                                    $mime_type = '';
                                                    switch ($file_extension) {
                                                        case 'pdf':
                                                            $mime_type = 'application/pdf';
                                                            break;
                                                        case 'doc':
                                                            $mime_type = 'application/msword';
                                                            break;
                                                        case 'docx':
                                                            $mime_type = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
                                                            break;
                                                        // Add more cases for other file types if needed
                                                        default:
                                                            // Set a default MIME type for unknown file types    <td><a href='../../resumes/$row[resume]' download><button>Download</button></a></td>
                                                            $mime_type = 'application/octet-stream';
                                                            break;
                                                    }
                                                    
                                                    echo "
                                                        <tr>
                                                            <th scope='row'>$count</th>
                                                            <td>$row[fname]</td>
                                                            <td>$row[lname]</td>
                                                            <td>$row[email]</td>
                                                            <td>$row[phone]</td>
                                                            <td><a href='$file_path' download='resume.$file_extension' target='_blank' rel='noopener noreferrer' type='$mime_type'><button>Download</button></a></td>
                                                        </tr>     
                                                    ";
                                                }
                                                else{
                                                    echo "
                                                        <tr>
                                                            <th scope='row'>$count</th>
                                                            <td>$row[fname]</td>
                                                            <td>$row[lname]</td>
                                                            <td>$row[email]</td>
                                                            <td>$row[phone]</td>
                                                            <td><button style='background-color:red;'>No resume</button></td>
                                                        </tr>     
                                                    ";
                                                }
                                                $count+=1;
                                            }
                                        }
                                        // // <td><a href='./?file_id=$row[userid]'><button>Download</button></td>

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php // include('../includes/footer.php');?>
        </div>
    </div>

    <!-- Bootstarp Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../../js/datatables-simple-demo.js"></script> -->

    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>


</body>

</html>
<?php //} ?>
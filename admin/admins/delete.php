<?php

    include_once('../../config.php');

    if(isset($_GET["id"])){

        $id = $_GET["id"];

        $sql = mysqli_query($db,"DELETE FROM `admins` WHERE id=$id");

        if($sql){
            header("Location: read.php");
            exit;
        }
        else{
            die("Something went wrong".mysqli_error($db));
        }
    }



?>
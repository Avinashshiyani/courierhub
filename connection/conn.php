<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name  = "couriersoftware_db";

    $con = mysqli_connect($hostname,$username,$password,$db_name);
    // Check connection
    if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>
<?php

    include '../connection/conn.php';

    $circular = $_POST['admin_circular'];

    $query = "INSERT INTO `add_circular`(`ac_message`) VALUES ('$circular')";

    $insert = mysqli_query($con,$query);

    if($insert){
        echo "<script>alert('Circular Posted')</script>";
        echo "<script>window.location.href = '../components/admin_addcircular.php'</script>";
    }
    else{
        echo "<script>alert('Something Went Wrong')</script>";
    }

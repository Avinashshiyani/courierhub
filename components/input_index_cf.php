<?php

include '../connection/conn.php';

$i_name  = $_POST['index_name'];
$i_email = $_POST['index_email'];
$i_subject = $_POST['index_subject'];
$i_message = $_POST['index_message'];

$query = "INSERT INTO `index_contact`(`ic_name`, `ic_email`, `ic_subject`, `ic_message`) VALUES ('$i_name','$i_email','$i_subject','$i_message')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>window.load=alert('Form Submitted')</script>";
    echo "<script>window.location.href='../index.php'</script>";
}

?>
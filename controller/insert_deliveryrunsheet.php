<?php

include '../connection/conn.php';

$document_no  = $_POST['document_no'];
$recievers_no = $_POST['recievers_no'];
$to_city      = $_POST['to_city'];

$query = "INSERT INTO `delivery_run_sheet`(`drs_recievers_name`, `drs_recieving_city`, `drs_documentno`) VALUES ('$recievers_no','$to_city','$document_no')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>window.location.href='../components/deliveryrunsheet.php'</script>";
}else{
    echo "<script>alert('Something Went Wrong');</script>";
}

?>
<?php

include '../connection/conn.php';
$from_name = $_POST['from_name'];
$from_phno = $_POST['from_phno'];
$document_no = $_POST['document_no'];
$to_name = $_POST['to_name'];
$to_city = $_POST['to_city'];
$to_courier_type = $_POST['to_courier_type'];
$to_weight = $_POST['to_weight'];
$to_address = $_POST['to_address'];
$to_total_amt = $_POST['to_total_amt'];
$user_id = $_POST['user_id'];

$query = "INSERT INTO `cash_booking`(`cb_from_name`, `cb_from_phno`, `cb_documentno`, `cb_to_name`, `cb_to_city`, `cb_couriertype`, `cb_weight`, `cb_address`, `cb_totalamt`,`user_id`)
 VALUES ('$from_name','$from_phno','$document_no','$to_name','$to_city','$to_courier_type','$to_weight','$to_address','$to_total_amt','$user_id')";
$insert = mysqli_query($con,$query);

if($insert){
     echo "<script>window.location.href='../components/printinfo/cashbooking_print.php'</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>
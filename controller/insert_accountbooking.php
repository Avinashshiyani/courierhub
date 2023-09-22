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

$query = "INSERT INTO `account_booking`(`ab_from_name`, `ab_from_phno`, `ab_documentno`, `ab_to_name`, `ab_to_city`, `ab_couriertype`, `ab_weight`, `ab_address`, `ab_totalamt`,`user_id`)
 VALUES ('$from_name','$from_phno','$document_no','$to_name','$to_city','$to_courier_type','$to_weight','$to_address','$to_total_amt','$user_id')";
$insert = mysqli_query($con,$query);

if($insert){
     echo "<script>window.location.href='../components/printinfo/accountbooking_print.php'</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>
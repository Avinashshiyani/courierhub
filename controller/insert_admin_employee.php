<?php
include '../connection/conn.php';
$employee_name = $_POST['employee_name'];
$employee_role = $_POST['employee_role'];
$employee_salary = $_POST['employee_salary'];

$query = "INSERT INTO `admin_employee`(`ae_name`, `ae_role`, `ae_salary`)
 VALUES ('$employee_name','$employee_role','$employee_salary')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>window.load=alert('Employee Added Successfully')</script>";
    echo "<script>window.location.href = '../components/admin_employee.php'</script>";
}
else{
    echo "<script>alert('Something Went Wrong')</script>";
}


?>
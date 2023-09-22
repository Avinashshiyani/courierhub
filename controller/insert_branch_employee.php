<?php
include '../connection/conn.php';
$employee_name = $_POST['employee_name'];
$employee_role = $_POST['employee_role'];
$employee_salary = $_POST['employee_salary'];
$user_id = $_POST['user_id'];


$query = "INSERT INTO `branch_employee`(`be_name`, `be_role`, `be_salary`,`user_id`)
 VALUES ('$employee_name','$employee_role','$employee_salary','$user_id')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>alert('Employee Added Successfully')</script>";
    echo "<script>window.location.href = '../components/employee.php'</script>";
}
else{
    echo "<script>alert('Something Went Wrong')</script>";
}


?>
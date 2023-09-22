<?php
include '../connection/conn.php';
$delete_employee = $_GET['delete'];
echo $delete_employee;
$query = "DELETE FROM `branch_employee` WHERE be_id='$delete_employee'";
$delete = mysqli_query($con,$query);

if($delete){
    echo "<script>window.onload=alert('Employee Deleted')</script> ";
    echo "<script>window.location.href = '../components/employee.php'</script>";
}else{
    echo "<script>window.onload=alert('Something Went Wroung')</script> ";
}

?>
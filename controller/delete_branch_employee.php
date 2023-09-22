<?php
include '../connection/conn.php';
$delete_employee = $_GET['delete'];
echo $delete_employee;
$query = "DELETE FROM `admin_employee` WHERE ae_id='$delete_employee'";
$delete = mysqli_query($con,$query);

if($delete){
    echo "<script>window.onload=alert('Employee Deleted')</script> ";
    echo "<script>window.location.href = '../components/admin_employee.php'</script>";
}else{
    echo "<script>window.onload=alert('Something Went Wroung')</script> ";
}

?>
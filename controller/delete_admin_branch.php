<?php
include '../connection/conn.php';
$delete_id = $_GET['delete'];

$query = "DELETE FROM `add_branch` WHERE ab_id='$delete_id'";

$delete = mysqli_query($con,$query);

if($delete){
    echo "<script>window.onload=alert('Branch Deleted')</script> ";
    echo "<script>window.location.href = '../components/admin_branchoperations.php'</script>";
}
else{
    echo "<script>window.onload=alert('Something Went Wrong')</script> ";
}
?>
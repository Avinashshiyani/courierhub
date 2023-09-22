<?php 

include '../connection/conn.php';

$branch_name            = $_POST['branch_name'];
$branch_manager_name    = $_POST['branch_manager_name'];
$branch_address         = $_POST['branch_address'];
$branch_city            = $_POST['branch_city'];
$branch_mobno           = $_POST['branch_mobno'];
$branch_create_email    = $_POST['branch_create_email'];
$branch_create_password = $_POST['branch_create_password'];

// to lower case for city
$branch_city = strtolower($branch_city);

$query = "INSERT INTO `add_branch`(`ab_branch_name`, `ab_manager_name`, `ab_branch_address`, `ab_branch_city`, `ab_phno`, `ab_createmail`, `ab_createpassword`)
 VALUES ('$branch_name','$branch_manager_name','$branch_address','$branch_city','$branch_mobno','$branch_create_email','$branch_create_password')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>alert('Branch Added Successfully')</script>";
    echo "<script>window.location.href = '../components/admin_addbranch.php'</script>";
}else{
    echo "<script>alert('Something Went Wrong')</script>";
}

?>
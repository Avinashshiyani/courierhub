<?php
session_start();
include '../connection/conn.php';
$branch_email = $_POST['branch_email'];
$branch_password = $_POST['branch_password'];
$query = "SELECT * FROM `add_branch` where ab_createmail='$branch_email'";
$data = mysqli_query($con, $query);
if ($data) {
    $rows = mysqli_fetch_assoc($data);
    if ($rows) {
        $_SESSION['branch_user'] = $rows;
        if ($branch_password == $rows['ab_createpassword']) {
            header("Location:../Dashboard/branch_dashboard.php");
        } else {
            echo "<script>window.onload=alert('Wrong Password')</script> ";
            echo "<script>window.location = '../Login/branch_login.php'</script> ";
        }
    } else {
        echo "<script> alert('User Not Found')</script> ";
        echo "<script>window.location = '../Login/branch_login.php'</script> ";
    }
} else {
    echo "Query failed: " . mysqli_error($con);
}

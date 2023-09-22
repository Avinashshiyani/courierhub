<?php
session_start();
include '../connection/conn.php';
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];
$query = "SELECT * FROM `admin_login` where al_email='$admin_email'";
$data = mysqli_query($con, $query);
if ($data) {
    $rows = mysqli_fetch_assoc($data);
    if ($rows) {
        $_SESSION['admin_user'] = $rows;
        if ($admin_password == $rows['al_password']) {
            header("Location:../Dashboard/admin_dashboard.php");
        } else {
            echo "<script>window.load=alert('Wrong Password')</script> ";
            echo "<script>window.location='../Login/admin_login.php'</script> ";
        }
    } else {
        echo "<script> alert('User Not Found')</script> ";
        echo "<script>window.location = '../Login/admin_login.php'</script> ";
    }
} else {
    echo "Query failed: " . mysqli_error($con);
}

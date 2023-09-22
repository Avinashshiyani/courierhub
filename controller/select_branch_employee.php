<?php

include '../connection/conn.php';
$query = "SELECT * FROM `branch_employee` WHERE user_id =". $_SESSION['branch_user']['ab_id'];
$select = mysqli_query($con, $query);
?>

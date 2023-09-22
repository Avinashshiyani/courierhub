<?php
session_start();
if (isset($_SESSION['branch_user']))
{
    unset($_SESSION['branch_user']);
}
header("location:../index.php");
?>
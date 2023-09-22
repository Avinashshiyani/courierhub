<?php

include '../connection/conn.php';
$drs_city = $_POST['drs_city'];
$query = "INSERT INTO `delivery_sheet`(`ds_city`) VALUES ('$drs_city')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>window.location.href='../components/deliveryrunsheet.php'</script>";
}
else{
 echo "<script>alert('Something Went Wrong');</script>";
}
?>

?>
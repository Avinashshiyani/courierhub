<?php
include '../connection/conn.php';
$date = $_POST['date'];
$from_city= $_POST['from_city'];
$to_city = $_POST['to_city'];
$user_id = $_POST['user_id'];
$query = "INSERT INTO `document_incoming`(`di_incomingdate`, `di_incoming_city`, `di_recieving_city`,`user_id`) VALUES ('$date','$from_city','$to_city','$user_id')";
$insert = mysqli_query($con , $query);

if($insert){
        echo "<script>window.location.href = '../components/doc_incoming.php'</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>
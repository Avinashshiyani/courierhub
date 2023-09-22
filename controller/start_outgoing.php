<?php
include '../connection/conn.php';
$date = $_POST['date'];
$from_city= $_POST['from_city'];
$to_city = $_POST['to_city'];
$query = "INSERT INTO `document_outgoing`(`do_outgoing_date`, `do_outgoing_city`, `do_outgoingto_city`) VALUES ('$date','$from_city','$to_city')";
$insert = mysqli_query($con , $query);

if($insert){
        echo "<script>window.location.href = '../components/doc_outgoing.php'</script>";
}else{
  echo "<script>alert('Something Went Wrong');</script>";
}

?>
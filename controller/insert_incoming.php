<?php
include '../connection/conn.php';
$doc_no = $_POST['doc_no'];

$query = "INSERT INTO `document_inner_incoming`(`dii_documentno`) VALUES ('$doc_no')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>window.location.href = '../components/doc_incoming.php'</script>";
}
else{
    echo "<script>alert('Something Went Wrong')</script>";

}
?>
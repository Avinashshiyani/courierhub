<?php
include '../connection/conn.php';
$doc_no = $_POST['doc_no'];

$query = "INSERT INTO `document_outer_outgoing`(`doo_documentno`) VALUES ('$doc_no')";

$insert = mysqli_query($con,$query);

if($insert){
    echo "<script>window.location.href = '../components/doc_outgoing.php'</script>";
}
else{
    echo "<script>alert('Something Went Wrong')</script>";

}
?>
<?php 
include '../db_connn.php';
session_start();
$sid = $_SESSION['id'];

if (isset($_POST['submit'])) {
	$bid = $_POST['bid'];
	$bdate = $_POST['bdate'];
	$rdate = $_POST['rdate'];

$sql="Insert into history (std_id,book_id,Borrow_date,return_date) values( $sid,$bid, '$bdate','$rdate')";
 $result = mysqli_query($conn,$sql);
 if ($result) {
 	header("location:../rqstbooks.php");
 }
 else{
 	echo "error";
 }
}
?>
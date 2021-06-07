<?php 
include '../../db_connn.php';

$bookid = $_GET['id'];
$sql = "delete from books where book_id=$bookid";

$result = mysqli_query($conn, $sql);
if($result){
	header("location:../books.php?sucess=Deleted Sucessfully");
}
else{
	header("location:../books.php?error=Unable to delete");
}
?>
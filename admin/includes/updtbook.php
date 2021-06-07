<?php 
include '../../db_connn.php';

if(isset($_POST['submit'])){
	$id= $_POST['id'];
	$code=$_POST['bookcode'];
	$title=$_POST['bookname'];
	$author=$_POST['authorname'];
	$des=$_POST['des'];

	$sql = "update books set book_code ='$code',
							 Book_Title='$title',
							 Author='$author',
							 Description='$des' where book_id = $id";

	
	
	$result = mysqli_query($conn,$sql);
	if($result){
		header("location:../books.php?updtmsg=Updated");
	}
	else{
		header("location:../books.php?updtmsg=Error while updating");
	}
}

?>
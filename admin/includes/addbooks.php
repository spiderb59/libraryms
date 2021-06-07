<?php
include '../../db_connn.php';

if(isset($_POST['submit'])){

	$bCode= $_POST['bookcode'];
	$bTitle= $_POST['booktitle'];
	$author= $_POST['author'];
	$desc= $_POST['description'];
	$date= $_POST['cdate'];

	$sql= "INSERT into books(book_code,book_title,Author,Description,Entry_Date) values ('$bCode','$bTitle','$author','$desc','$date') ";
	
	$result = mysqli_query($conn,$sql);
	if ($result) {
		header("location:../add-book.php?msg=sucess");
	}
	else{
		header("location:../add-book.php?msg=error");
	}

}
?>
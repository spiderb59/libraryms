<?php 
include'db_connn.php';
$id= $_GET['id'];

$sql= "delete from history where id = '$id' ";

$result = mysqli_query($conn,$sql);

if ($result) {
	header("location:../issuebooks.php?msg=deleted");
}
else{
	header("location:../issuebooks.php?msg=unable to delete");
}

?>
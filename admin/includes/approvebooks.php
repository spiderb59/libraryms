<?php 
include'db_connn.php';

$id= $_GET['id'];

$sql= "Update history set status = 1 where id='$id'";

$result = mysqli_query($conn,$sql);

if ($result) {
	header("location:../issuebooks.php?msg=Approved");
}
else{
	header("location:../issuebooks.php?msg=Error while approving");

}

?>
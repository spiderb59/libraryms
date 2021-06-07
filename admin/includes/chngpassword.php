<?php
 include 'db_connn.php';
$id= $_GET['id'];
$suffix = "username";
$suf=str_shuffle($suffix);
$pass=$id.$suf.rand(1,1000);
$temp= $pass;
$pass = md5($pass);
$msg="Your new password is ";

$sql = "update users set password = '$pass' where id = '$id'";
$result = mysqli_query($conn,$sql);
if ($result) {
	header("location:../regstd.php?msg=$msg$temp");
}
else{
	header("location:../regstd.php?error=Unable to change");
}
?>
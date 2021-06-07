<?php
 include 'db_connn.php';
if (isset($_POST['submit'])) {
	$fName= $_POST['fname'];
	$Username= $_POST['Username'];
	$Password= $_POST['password'];
	$Password = md5($Password);

	$sql = "Insert into users (role,username,password,name) values (2,'$Username','$Password','$fName')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		header("location:../regstd.php?msg=Added");
		
	}
	else{
			header("location:../regstd.php?error=Unable");
	}
}

?>
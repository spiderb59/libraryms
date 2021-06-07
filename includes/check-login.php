<?php 
session_start();
include '../db_connn.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){

	$username = ($_POST['username']);
	$password = ($_POST['password']);
	$password = md5($password);
	$role = ($_POST['role']);
	
	$sql = "select * from users where username= '$username' and password = '$password' and role = '$role'";
	$result = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_assoc($result);
	$_SESSION['id']=$rows['id'];
	$_SESSION['name']=$rows['name'];

	if (mysqli_num_rows($result) == 1) {
		if ($role == '1') {
			header("location:../admin/dashboard.php?id=$rows[id]&name=$rows[name]");
		}
		else{
			header("location:../udashboard.php");			
		}
	}
	else{
		 header("Location:../index.php?error=invalid details");
	}

	#code
}

?>
<?php 
include 'db_connn.php';
session_start();
$sid = $_SESSION['id'];
$sname = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Dahsboard</title>
</head>
<body>

	<div class="container"><br>
		<h4>Welcome <?php echo $sname?></h4><hr>	
	</div>
	<div class="container">
		<a href=""><button class="btn btn-primary">Home</button></a>

		<a href="rqstbooks.php"><button class="btn btn-primary">Request Books</button></a>
		<a href=""><button class="btn btn-primary">Change Password</button></a>
		<a href="history.php"><button class="btn btn-primary">History</button></a>
		<a href="index.php"><button class="btn btn-dark">LogOut</button></a>

		
	</div>
	<div class=" container p-3">
		<P> This is user dashboard</P>
			</div>
		</div>
		</body>
		</html>

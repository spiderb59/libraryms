<?php
session_start();
$sid= $_SESSION["id"];
$bookid=$_GET['id'];
$name=$_GET['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Request Books</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body><br><br><br>
	<div class="container">
		<form action="storebooks.php" method="post">
			<div class="form-group">
				<label class="form-label">Book Id</label>
				<input type="text" name="bid" value="<?php echo $bookid ?>" readonly>
			</div>
			<div class="form-group">
				<label class="form-label">Book Name</label>
				<input type="text" name="bname" value="<?php echo $name ?>" disabled>
			</div>
			<div class="form-group">
				<label class="form-label">Borrow Date</label>
				<input type="date" name="bdate" value="">
			</div>
			<div class="form-group">
				<label class="form-label">Return Date</label>
				<input type="date" name="rdate" value="">
			</div>
			<a><button type="submit" name="submit" class="btn btn-primary">Request</button></a>
		</form>
	</div>

</body>
</html>
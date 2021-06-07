<?php 
include '../db_connn.php';

$id= $_GET['id'];
$code = $_GET['code'];
$title= $_GET['title'];
$author= $_GET['author'];
$des= $_GET['des'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Update books</title>
</head>
<body>
	<?php
	include 'includes/header.php'; 
	 ?><br>
	<div class="container mb-4 p-3">
		<form class="class=border shadow p-3 rounded" method="post" style="width: 450px;" action="includes/updtbook.php">
			  <?php if(isset($_GET['error'])) {?>
      	      	<div class=" container alert alert-info alert-dismissible" role="alert">
      	      	<?=$_GET['error'] ?>
      	      </div>
      	      <?php
      	 	 }
      	      ?>
			<div class="mb-3">
				<label class="form-label">Book ID</label>
				<input type="text" name="id" value="<?php echo $id ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Book Code</label>
				<input type="text" name="bookcode" value="<?php echo $code ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Book Name</label>
				<input type="text" name="bookname" value="<?php echo $title ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Author Name</label>
				<input type="text" name="authorname" value="<?php echo $author ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Description</label>
				<input type="text" name="des" value="<?php echo $des ?>">	
			</div>
			<button class="btn btn-primary" type="submit" name="submit" value="submit">Update</button>
		</form>
	</div>
</body>
</html>

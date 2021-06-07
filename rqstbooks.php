<?php
include 'db_connn.php';
session_start();
$sid= $_SESSION['id'];
$sql = "select * from books ";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<h1>Request  Books page</h1>
</body>
<form class=" container form-inline" action="" method="post" style="width:500px;">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
			    <button class="btn btn-success my-2 my-sm-0" type="submit" name="submit" hidden="">Search</button>
		  </form>
<table class=" container table">
		<thead>
			<th>ID</th>
			<th>Book Code</th>
			<th>Book Name</th>
			<th>Author Name</th>	
			<th>Description</th>
			<th colspan="2" align="centre">Operations</th>
		</thead>
		
			<?php //for searched content
			if (isset($_POST['submit'])) {
				$item = $_POST['search'];
				$sql1= "select * from books where book_id ='$item' or book_code ='$item' or Book_Title like'%$item%' or 	Author like'%$item%' or Description like'%$item%';";
	$result1 = mysqli_query($conn, $sql1);
			if( mysqli_num_rows($result1) > 0) {
				while($rows1 = mysqli_fetch_assoc($result1)){
					$rqstbook = "includes/requestbooks.php?id=$rows1[book_id]&name=$rows1[Book_Title]";?>
				<tr>
					<td> <?=$rows1['book_id']?> </td>
					<td> <?=$rows1['book_code']?> </td>
					<td> <?=$rows1['Book_Title']?> </td>
					<td> <?=$rows1['Author']?> </td>
					<td> <?=$rows1['Description']?> </td>
					<td>
					<a href="<?php echo "$rqstbook" ?>"><button type="submit" class="btn btn-danger" >Request</button></a>
					</td>
				</tr>	
				<?php } ?>
				<?php } ?>
	
			<?php }
			else{
			if(mysqli_num_rows($result) > 0) {
				while($rows = mysqli_fetch_assoc($result)){
					$rqstbook = "includes/requestbooks.php?id=$rows[book_id]&name=$rows[Book_Title]";
					?>
				<tr>
					<td> <?=$rows['book_id']?> </td>
					<td> <?=$rows['book_code']?> </td>
					<td> <?=$rows['Book_Title']?> </td>
					<td> <?=$rows['Author']?> </td>
					<td> <?=$rows['Description']?> </td>
					<td>
					<a href="<?php echo "$rqstbook" ?>"><button type="submit" class="btn btn-danger" >Request</button></a>

					</td>
				</tr>
				<?php }?>
			<?php } ?>
			<?php }  ?>
		</tbody>	
</html>
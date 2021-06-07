<?php 
	include '../db_connn.php';
	$sql = "select * from books ";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Books</title>
</head>
<body>
	<?php 
		include'includes/header.php';?>
		<?php if (isset($_GET['updtmsg'])){ ?>
                <div class=" container alert alert-success alert-dismissible ">
                <?=$_GET['updtmsg']?>
                </div>
            <?php } ?>
		<?php if (isset($_GET['sucess'])){ ?>
                <div class=" container alert alert-success  alert-dismissible">
                <?=$_GET['sucess']?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['error'])){ ?>
                <div class=" container alert alert-danger alert-dismissible ">
                <?=$_GET['error']?>
                </div>
            <?php } ?>
		
		<br><div class="container">
			<div>
			<a href="add-book.php"><button type="button" class="btn btn-success">Add Books</button></a>

			<form class=" container form-inline" action="" method="post" style="width:500px;">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
			    <button class="btn btn-success my-2 my-sm-0" type="submit" name="submit" hidden="">Search</button>
		  </form>
							
			</div>
		

	<table class="table">
		<thead>
			<th>ID</th>
			<th>Book Code</th>
			<th>Book Name</th>
			<th>Author Name</th>	
			<th>Description</th>
			<th colspan="2" align="centre">Operations</th>
		</thead>
		<tbody>

			<?php //for searched content
			if (isset($_POST['submit'])) {
				$item = $_POST['search'];
				$sql1= "select * from books where book_id ='$item' or book_code ='$item' or Book_Title like'%$item%' or 	Author like'%$item%' or Description like'%$item%';";
	$result1 = mysqli_query($conn, $sql1);
			if( mysqli_num_rows($result1) > 0) {
				while($rows1 = mysqli_fetch_assoc($result1)){
					$delbook = "includes/deletebooks.php?id=$rows1[book_id]";
					$updtbook = "updatebooks.php?id=$rows1[book_id]&code=$rows1[book_code]&title=$rows1[Book_Title]&author=$rows1[Author]&des=$rows1[Description]";?>
				<tr>
					<td> <?=$rows1['book_id']?> </td>
					<td> <?=$rows1['book_code']?> </td>
					<td> <?=$rows1['Book_Title']?> </td>
					<td> <?=$rows1['Author']?> </td>
					<td> <?=$rows1['Description']?> </td>
					<td>
					<a href="<?php echo "$delbook" ?>"><button type="submit" 					class="btn btn-danger" >Delete</button></a>
					<a href="<?php echo $updtbook ?>"><button type="submit" class="btn btn-info">Update</button></a>
					</td>
				</tr>	
				<?php } ?>
				<?php } ?>
	
			<?php }
			else{
			if(mysqli_num_rows($result) > 0) {
				while($rows = mysqli_fetch_assoc($result)){
					$delbook = "includes/deletebooks.php?id=$rows[book_id]";
					$updtbook = "updatebooks.php?id=$rows[book_id]&code=$rows[book_code]&title=$rows[Book_Title]&author=$rows[Author]&des=$rows[Description]";?>
				<tr>
					<td> <?=$rows['book_id']?> </td>
					<td> <?=$rows['book_code']?> </td>
					<td> <?=$rows['Book_Title']?> </td>
					<td> <?=$rows['Author']?> </td>
					<td> <?=$rows['Description']?> </td>
					<td>
					<a href="<?php echo "$delbook" ?>"><button type="submit" class="btn btn-danger" >Delete</button></a>
					<a href="<?php echo $updtbook ?>"><button type="submit" class="btn btn-info">Update</button></a>

					</td>
				</tr>
				<?php }?>
			<?php } ?>
			<?php }  ?>
		</tbody>					
	</table>
	</div>
</body>
</html>
<?php









<?php
include 'db_connn.php';
include 'header.php';


if (isset($_POST['submit'])) {
	$item = $_POST['search'];

	$sql = "SELECT * FROM books WHERE book_code like '%$item%' or Book_Title like '%$item%' or Author like '%$item%' or Description like '%$item%'";
	$result = mysqli_query($conn,$sql);?>
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
			<?php if(mysqli_num_rows($result) > 0) {
				while($rows = mysqli_fetch_assoc($result)){
					$delbook = "deletebooks.php?id=$rows[book_id]";
					$updtbook = "updatebooks.php?id=$rows[book_id]&code=$rows[book_code]&title=$rows[Book_Title]&author=$rows[Author]&des=$rows[Description]";?>
				<tr>
					<td> <?=$rows['book_id']?> </td>
					<td> <?=$rows['book_code']?> </td>
					<td> <?=$rows['Book_Title']?> </td>
					<td> <?=$rows['Author']?> </td>
					<td> <?=$rows['Description']?> </td>
					<td>
					<a href="<?php echo "$delbook" ?>"><button type="submit" class="btn btn-danger" >Delete</button></a>
					<a href="<?php echo $updtbook ?>"><button type="submit" class="btn btn-secondary">Update</button></a>

					</td>
				</tr>
				<?php } ?>
			<?php } ?>
		</tbody>					
	</table>
	</div>
</body>
</html>
<?php

 }
?>




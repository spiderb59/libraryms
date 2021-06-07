<?php 
session_start();
$sid = $_SESSION['id'];
include 'db_connn.php';

$sql = "SELECT users.username as StudentName,books.Book_Title as BookName,history.Borrow_date as bDate,history.return_date as rDate
 	from history join users on users.id = history.std_id
				join books on books.book_id = history.book_id where history.std_id = '$sid' and history.status = 1";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
		<a href=""><button class="btn btn-primary">Home</button></a>

		<a href="rqstbooks.php"><button class="btn btn-primary">Request Books</button></a>
		<a href=""><button class="btn btn-primary">Change Password</button></a>
		<a href="history.php"><button class="btn btn-primary">History</button></a>
		<a href="index.php"><button class="btn btn-dark">LogOut</button></a>
	</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table container" style="">
	<thead>
		<th>Student Name</th>
		<th>Book Name</th>
		<th>Requested Date</th>
		<th>Return Date</th>
	</thead>
	<tbody>
		<?php if (mysqli_num_rows($result)> 0) {
			while($rows = mysqli_fetch_assoc($result)){?>
				<tr>
					<td><?=$rows['StudentName']?></td>
					<td><?=$rows['BookName']?></td>
					<td><?=$rows['bDate']?></td>
					<td><?=$rows['rDate']?></td>
				</tr>

			<?php  }?>
			
		<?php } ?>
	</tbody>
</table>	


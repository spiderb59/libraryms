<?php 
include 'includes/header.php';
include'includes/db_connn.php';
$sql= "SELECT history.id as id,users.username as StudentName,books.Book_Title as BookName,history.Borrow_date as bDate,history.return_date as rDate,
	case 
	when history.status = 0 then 'Pending'
	when history.status = 1 then 'Approved'
	END AS Status
 	from history join users on users.id = history.std_id
				join books on books.book_id = history.book_id";
$result = mysqli_query($conn, $sql);
?>

<table class="table container" style="">
		<thead>
			<th>ID</th>
			<th>Student Name</th>
			<th>Book Name</th>
			<th>Requested Date</th>	
			<th>To Return Date</th>
			<th>Status</th>
			<th colspan="2" align="centre"></th>

		</thead>
		<tbody>
			<?php if(mysqli_num_rows($result) > 0) {
				while($rows = mysqli_fetch_assoc($result)){
					$approve = "includes/approvebooks.php?id=$rows[id]";
					$cancel = "includes/cancelbooks.php?id=$rows[id]";?>
				<tr>
					<td> <?=$rows['id']?> </td>
					<td> <?=$rows['StudentName']?> </td>
					<td> <?=$rows['BookName']?> </td>
					<td> <?=$rows['bDate']?> </td>
					<td> <?=$rows['rDate']?> </td>
					<td> <?=$rows['Status']?> </td>
					<td>
					<a href="<?php echo "$approve" ?>"><button type="submit" class="btn btn-success" name="approve" >Approve</button></a>
					<a href="<?php echo $cancel ?>"><button type="submit" class="btn btn-danger" name="delete">Cancel</button></a>
					</td>
					
				</tr>
				<?php } ?>
			<?php } ?>
		</tbody>

<?php

	include '../db_connn.php';
	$sql = "select * from users where role = 2 ";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Registered Students</title>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div class=" container p-3">
		<div>
		</div><br>
		
    			<a href="add-std.php"><button type="button" class="btn btn-success">Add Student</button></a>
    			<?php if (isset($_GET['msg'])){ ?>
      <div class="alert alert-success ">
                <?=$_GET['msg']?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['error'])){ ?>
                <div class="alert alert-danger ">
                <?=$_GET['error']?>
                </div>
 <?php } ?>
                  
				<table class="table" 
				       style="width: 50rem;">
				  <thead>
				    <tr>
				      <th scope="col">SN</th>
				      <th scope="col">Id</th>
				      <th scope="col">Full Name</th>
				      <th scope="col">Username</th>
				      <th scope="col" colspan="2">Operations</th>

				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($result)) {
				  		$changepass="includes/chngpassword.php?id=$rows[id];"
				  		?>
				    <tr>
				      <th scope="row"><?=$i?></th>
				      <td><?=$rows['id']?></td>
				      <td><?=$rows['name']?></td>
				      <td><?=$rows['username']?></td>
				      <td>
				      	<a href="<?php echo $changepass ?>"><button type="submit" class="btn btn-success" name="chngpass" >Change Password</button></a>
								<a href=""><button type="submit" class="btn btn-danger" name="delete">Delete</button></a>
				      </td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>			
			</div>
		</div>
		</body>
		</html>

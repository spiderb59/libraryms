<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php include'includes/header.php'; ?>
	<div class="container d-flex justify-content-center align-items-center" style="min-height: 40vh">

		<form class="border shadow p-3 rounded" method="post" action="includes/addstd.php" style="width: 450px;">
			<div class="mb-3">
				<label class="form-label">Full Name</label>
				<input type="text" name="fname">
			</div>
			<div class="mb-3">
				<label class="form-label">Username</label>
				<input type="text" name="Username">
			</div>
			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>	
		</form>
		
	</div>

</body>
</html>
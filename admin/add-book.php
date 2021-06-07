<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Book</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <div>
      	<?php include 'includes/header.php'; ?>
      </div>
      <div class="container">
        <form class="border shadow p-3 rounded" method="post" action="includes/addbooks.php" style="width: 450px;">
            <?php if (isset($_GET['msg'])){ ?>
                <div class="alert alert-info ">
                <?=$_GET['msg']?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Book Code</label>
                <input type="text" name="bookcode" required="">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Title</label>
                <input type="text" name="booktitle" required="">
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" required="">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description"></textarea required> 
            </div><div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="cdate" required="">
            </div>
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>  
        </form>
      </div>
</body>
</html>


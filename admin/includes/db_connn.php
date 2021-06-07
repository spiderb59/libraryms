<?php

$sname = "localhost";
$uname = "root";
$password= "";
$dbname= "my_db";

$conn= mysqli_connect($sname, $uname, $password,$dbname);


if (!$conn) {
	echo "Connection Unsuccessful";
	exit();
}

?>
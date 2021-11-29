<?php  

$sname = "localhost:3308";
$uname = "root";
$password = "";

$db_name = "tienda2";

$mysqli = mysqli_connect($sname, $uname, $password, $db_name);

if (!$mysqli) {
	echo "Connection Failed!";
	exit();
}
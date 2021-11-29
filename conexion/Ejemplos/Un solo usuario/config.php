<?php
$user = 'root';
$password = '';
$db = 'tienda2';
$host = 'localhost';
$port = 3308;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_error;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

 
?>
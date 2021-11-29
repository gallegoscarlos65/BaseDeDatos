<?php

$user = 'root';
$password = '';
$db = 'cuusports';
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
// echo "Esta conectado";

?>

<?php
//   $db_host = '127.0.0.1';
//   $db_user = 'root';
//   $db_password = 'root';
//   $db_db = 'proyecto';
//   $db_port = 8889;

//   $mysqli = new mysqli(
//     $db_host,
//     $db_user,
//     $db_password,
//     $db_db,
// 	$db_port
//   );
	
//   if ($mysqli->connect_error) {
//     echo 'Errno: '.$mysqli->connect_errno;
//     echo '<br>';
//     echo 'Error: '.$mysqli->connect_error;
//     exit();
//   }

 
?>
<?php

$user = 'root';
$password = '';
$db = 'login';
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
//echo "Esta conectado"
?>
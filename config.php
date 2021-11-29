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

?>
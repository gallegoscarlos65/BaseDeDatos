<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="DELETE FROM productos WHERE idProductos=$id";
$resultado= mysqli_query($link,$sql)or die(mysqli_error($link));
header("Location: editarp.php");
?>
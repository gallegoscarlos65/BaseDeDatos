<?php
include('config.php');


$idProductos=$_POST['id'];
$Tipo=$_POST['Tipo'];
$Nombre=$_POST['Nombre'];
$Precio=$_POST['Precio'];
$Descripcion=$_POST['Descripcion'];

$sql="UPDATE productos SET Tipo='$Tipo', Nombre='$Nombre', Precio='$Precio', Descripcion='$Descripcion' WHERE idProductos='$idProductos';";

// echo $sql;
$resultado= mysqli_query($link,$sql)or die(mysqli_error($link));
header("Location: editarp.php");

?>
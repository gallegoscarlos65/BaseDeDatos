<?php
include('config.php');


$id=$_POST['id'];
$nom=$_POST['Nombre'];
$mail=$_POST['Email'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$pwd=$_POST['Pass'];



$sql="UPDATE Empleados SET nombre='$nom', email='$mail', direccion='$direccion', telefono='$telefono', contrasena='$pwd' WHERE Id_empleado='$id';";

// echo $sql;
$resultado= mysqli_query($link,$sql)or die(mysqli_error($link));
header("Location: editar.php");

?>
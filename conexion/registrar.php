<?php
include ('config.php');
$nom=$_POST['nombre'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$pwd=$_POST['password'];

$sql="INSERT INTO Empleados values(0,'$nom','$mail','$direccion','$telefono','$pwd')";


if($link->query($sql)===TRUE) {

    echo "Nuevo registro";

}else {

    echo "Error: ".$sql."<br>".$link->error;

}
$link->close();

?>
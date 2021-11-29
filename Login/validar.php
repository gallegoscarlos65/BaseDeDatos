<?php

include('db.php');

$usuario=$_POST['usuario'];
$contraseña=$_POST['contrasena'];

$sql="INSERT INTO usuarios values(0,'$usuario','$contraseña')";


if($link->query($sql)===TRUE) {

    echo "Nuevo registro";

}else {

    echo "Error: ".$sql."<br>".$link->error;

}
$link->close();

?>


<?php

include('db.php');

$usu=$_POST['usuario'];
$pwd=$_POST['contrasena'];


// $sql="INSERT INTO usuarios values(0,'$usuario','$contraseña')";
// $sql1="SELECT * FROM usuarios";
// echo $sql1."<br>";
// $sql="SELECT * FROM usuarios WHERE usuario=$usuario;";
// $sql="SELECT * FROM usuarios SET usuario='$usuario', contraseña='$contraseña' WHERE $usuario=usuario;";
$sql="SELECT * FROM usuarios WHERE usuario=$usu;";
echo $sql;
if($link->query($sql)===TRUE) {

    echo "Usted ha ingresado";

}else {

    // echo "Error: ".$sql."<br>".$link->error;
    echo "<br>"."Error no se pudo ingresar";
}
$link->close();

?>
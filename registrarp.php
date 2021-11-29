
<?php

include ('config.php');
$Tipo=$_POST['Tipo'];
$Nombre=$_POST['Nombre'];
$Precio=$_POST['Precio'];
$Descripcion=$_POST['Descripcion'];

$sql="INSERT INTO productos values(0,'$Tipo','$Nombre','$Precio','$Descripcion')";


if($link->query($sql)===TRUE) {
?>
    <h1>Nuevo registro</h1>;
<?php
}else {

    echo "Error: ".$sql."<br>".$link->error;

}
$link->close();

?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="padding-top: 70px;">
<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">CUU SPORTS</a> 
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">     
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">Inicio<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="productos.html">Registrar de nuevo<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="editarp.php">Consultar Productos<span class="sr-only"></span></a>
        </li>
        </ul>
        </div>
        </nav>
</div>




</body>
</html>


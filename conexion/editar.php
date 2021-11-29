<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar Registros</title>
</head>
<body>
    <h1>Empleados</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">TID31M</a> 
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">     
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="registrar.html">Inicio<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="editar.php" tabindex="-1" aria-disabled="true">Editar</a>
        </li>
        </ul>
        </div>
        </nav>
<div class='container'>
    <table>
        <tr>
            <th>Id_empleado</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Contraseña</th>
            <th colspan='2'>Editar</th>
        </tr>
<?php
$count=1;
$sql="SELECT * FROM empleados ORDER BY Id_empleado";

$resultado=$link->query($sql);


while($fila=$resultado->fetch_assoc())
{ ?>
    <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $fila["Nombre"];?></td>
        <td><?php echo $fila["Email"];?></td>
        <td><?php echo $fila["Direccion"];?></td>
        <td><?php echo $fila["Telefono"];?></td>
        <td><?php echo $fila["Contrasena"];?></td>
        <td><a href="eliminar.php?id=<?php echo $fila["Id_empleado"];?>">Eliminar</a></td>
        <td><a href="actualizar.php?id=<?php echo $fila["Id_empleado"];?>">Actualizar</a></td>

    </tr>
<?php $count++;

} $link->close();
?>

</table>
</div>

</body>
</html>
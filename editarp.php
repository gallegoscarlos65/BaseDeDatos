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
        <a class="nav-link" href="productos.html">Registrar Producto<span class="sr-only"></span></a>
        </li>
        </ul>
        </div>
        </nav>
</div>
<div class='container' style="padding-top: 80px;">
    <table class="table table-success table-striped">
        <tr>
            <th>Id_Productos</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th colspan='2' style="text-align: center;">Opciones</th>
        </tr>
<?php
$count=1;
$sql="SELECT * FROM productos ORDER BY idProductos";

$resultado=$link->query($sql);


while($fila=$resultado->fetch_assoc())
{ ?>
    <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $fila["Tipo"];?></td>
        <td><?php echo $fila["Nombre"];?></td>
        <td><?php echo $fila["Precio"];?></td>
        <td><?php echo $fila["Descripcion"];?></td>
        <td style="text-align: center;"><a href="eliminarp.php?id=<?php echo $fila["idProductos"];?>">Eliminar</a></td>
        <td style="text-align: center;"><a href="actualizarp.php?id=<?php echo $fila["idProductos"];?>">Actualizar</a></td>

    </tr>
<?php $count++;

} $link->close();
?>

</table>
</div>

</body>
</html>
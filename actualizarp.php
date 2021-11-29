<?php
include('config.php');
$id=$_GET['id'];

$query=mysqli_query($link,"SELECT * FROM productos WHERE idProductos=$id");
$fila=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualizar productos</title>
</head>
<body>
    <nav><h1>Actualizar productos</h1></nav>
    <div >
    <form action="actualizarpp.php" method='POST' style="padding-left: 15px;">
    <div class="form-group">
    <p><label for="id">Id:<input type="text" class="form-control" name="id" id="" value="<?php echo $fila['idProductos'];?>" readonly></label></p>
    </div>
    <div class="form-group">
    <p><label for="Tipo">Tipo: <input type="text" class="form-control" name="Tipo" id="" value="<?php echo $fila['Tipo'];?>"></label></p>
    </div>
    <div class="form-group">
    <p><label for="Nombre">Nombre: <input type="text" class="form-control" name="Nombre" id="" value="<?php echo $fila['Nombre'];?>"></label></p>
    </div>
    <div class="form-group">
    <p><label for="Precio">Precio <input type="text" class="form-control" name="Precio" id="" value="<?php echo $fila['Precio'];?>"></label></p>
    </div>
    <div class="form-group">
    <p><label for="Descripcion">Descripcion: <input type="text" class="form-control" name="Descripcion" id="" value="<?php echo $fila['Descripcion'];?>"></label></p>
    </div>  
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</body>
</html>
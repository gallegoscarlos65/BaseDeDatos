<?php
include('config.php');
$id=$_GET['id'];

$query=mysqli_query($link,"SELECT * FROM Empleados WHERE Id_empleado=$id");
$fila=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar registros</title>
</head>
<body>
    <nav><h1>Actualizar Registros</h1></nav>
    <div>
    <form action="actualizar2.php" method='POST'>
    <p><label for="id">Id:<input type="text" name="id" id="" value="<?php echo $fila['Id_empleado'];?>" readonly><label></p>
    <p><label for="Nombre">Nombre: <input type="text" name="Nombre" id="" value="<?php echo $fila['Nombre'];?>"></label></p>
    <p><label for="Email">Email: <input type="text" name="Email" id="" value="<?php echo $fila['Email'];?>"></label></p>
    <p><label for="Direccion">Direccion: <input type="text" name="Direccion" id="" value="<?php echo $fila['Direccion'];?>"></label></p>
    <p><label for="Telefono">Telefono: <input type="text" name="Telefono" id="" value="<?php echo $fila['Telefono'];?>"></label></p>
    <p><label for="Contraseña">Contraseña: <input type="text" name="Pass" id="" value="<?php echo $fila['Contrasena'];?>"></label></p>
    <p><input type="submit" value="Editar registro"></p>
    </form>
    </div>
</body>
</html>
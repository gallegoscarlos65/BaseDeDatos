<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        </ul>
        </div>
        </nav>
</div>

<div style="padding-top: 60px;">
    <!-- <h4>Seleccionar por precio</h4> -->
    <form action="prueba.php" method="post">
    <div class="form-group" >
                <label for="exampleInputPassword1"></label> 
                <h4>Seleccionar por precio</h4>           
                <input type="Precio" name="Precio" id="exampleInputPassword1" placeholder="Precio">
                    <button type="submit" class="btn btn-primary">Seleccionar</button>
    </div >
    </form>
</div>


    <div >
    </div>
<table class= "table table-dark" style="padding-top: 50px;">
<thead>
    <tr>
        <th colspan='5' style="text-align: center;"><h2>Tabla de productos</h2></th>
    </tr>
</thead>
<tr>
    <th>Id.Producto</th>
    <th>Tipo</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descripcion</th>
</tr>
<?php

include ('config.php');

$sql= "SELECT * FROM productos";
$resultado = $link->query($sql);

if($resultado-> num_rows>0) {

    while($fila = $resultado->fetch_assoc())
    {
        echo "<td>". $fila['idProductos']. "</td>";       
        echo "<td>". $fila['Tipo']. "</td>";
        echo "<td>". $fila['Nombre']. "</td>";
        echo "<td>". $fila['Precio']. "</td>";
        echo "<td>". $fila['Descripcion']. "</td>";
        echo"</tr>";

 

    }

}else{
    echo "No existen registro";
}

$link->close();
// $i=$_POST['i'];

// $i=$_POST['i'];
// while($i<= 10):

//     echo $i."<br>";
//     $i++;

// endwhile;

?>  
</table>

</body>
</html>


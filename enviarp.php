<?php

include ('config.php');

// Declaración de variables del formulario
$nombre = $_POST['Nombre'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];

// Datos del email
$para = $email;
$titulo = 'S&S Solicitud de presupuesto';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Telefono: $telefono\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {

    if (mail($para, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }
}

?>
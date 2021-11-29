<?php
    include 'config.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();

    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
                header('location: colab.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->link()->prepare('SELECT*FROM userss INNER JOIN roless ON userss.rol_id=roless.idroles WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[3];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2:
                    header('location: colab.php');
                break;
    
                default:
            }


        }else
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
        Username: <br><input type="text" name="username" id=""></br>
        Password: <br><input type="text" name="password" id=""></br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
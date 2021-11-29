<?php
// incluye conexión
require_once "config.php";
 
// Define unas variables 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Procesamiento para verificación datos enviados
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Valida al usuario
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese un usuario.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username solo puede contener letras, números, y  guion bajo.";
    } else{
        // Se prepara la sentencia sql
        $sql = "SELECT idUsuarios FROM usuarios WHERE usuario = ?";
        

        if($stmt = $link->prepare($sql)){
            // Establecemos el parametro
            $param_username = trim($_POST["username"]); 

            // Enalzamos lA  variables hacia la sentencia sql como un  parametro
            $stmt->bind_param("s", $param_username);
            
            
            // Ejecutamos la sentencia
            if($stmt->execute()){
                //Almacenamos el resultado
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "Este usuario se ecuentra ocupado.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Algo salio mal. Por favor intente de nuevo.";
            }

            // cerramos la sentencia 
            $stmt->close();
        }
    }
    
    // Validación  password/contraseña
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La clave debe contener al menos 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar confirmación password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor confirme su contraseña.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "La contraseña no coincide.";
        }
    }
    
    // Checa no exista error en la entradas y procede a insertarlo en la bd
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        //Prepara el insert para mysql
        $sql = "INSERT INTO usuarios (usuario, clave) VALUES (?, ?)";
         
        if($stmt = $link->prepare($sql)){
            // Enalazamos
            $stmt->bind_param("ss", $param_username, $param_password);
            
            // Establecemos
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // ejectuamos nuestra sentencia
            if($stmt->execute()){
                // Redirige a la página de iniciar sesión 
                header("location: login.php");
            } else{
                echo "Oops! Algo sucedio, intente de nuevo.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Regristrar</h2>
        <p>Por favor llene sus datos </p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" name="username"  class="form-control <?php echo (!empty($username_err)) ? 'es-invalido' : ''; ?>" value="<?php echo $username; ?>"> 
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'Es-invalida' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
                <label>Confirmación de la contraseña </label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'Es-invalida' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="reset" class="btn btn-secondary ml-2" value="Limpiar">
            </div>

            <p>Si usted ya tiene cuenta, de click aquí? <a href="login.php">Iniciar Sesión</a>.</p>

        </form>

    </div>
    
</body>
</html>
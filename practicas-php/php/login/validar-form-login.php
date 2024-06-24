<?php
    // captura de datos
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <?php
        if($usuario == "diana"){
            echo "<p>usuario CORRECTO</p>";
            if($pass == "123"){
                echo "<p>contraseña CORRECTA</p>";
            }
            else {
                echo "<p>contraseña INCORRECTA</p>";
                exit;
            }
        } else {
            echo "<p> usuario INCORRECTO </p>";
            exit;
        }
        echo "<p>El programa continua aqui...</p>";
    ?>
</body>
</html>
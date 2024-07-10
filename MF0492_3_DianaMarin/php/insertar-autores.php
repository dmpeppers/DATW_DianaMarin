<?php
    require('abrir-conexion.php');
?>
<?php
    $nombre = $_REQUEST['nombre'];
    $apellido1 = $_REQUEST['apellido1'];
    $apellido2 = $_REQUEST['apellido2'];
    $dni = $_REQUEST['dni'];
    $email = $_REQUEST['email'];
    $direccion = $_REQUEST['direccion'];
    $telefono = $_REQUEST['telefono'];
    $nacionalidad = $_REQUEST['nacionalidad'];
    $web = $_REQUEST['web'];
    $comentarios = $_REQUEST['comentarios'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR AUTORES</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar autores. Resultado</h2>
    <?php
        $consulta = "INSERT INTO autores(nombre, apellido1, apellido2, dni, email, direccion, telefono, nacionalidad, web, comentarios)
                    VALUES (?,?,?,?,?,?,?,?,?,?)";
        $datos = $conexion->prepare($consulta);

        $datos->bind_param('ssssssssss', $nombre, $apellido1, $apellido2, $dni, $email, $direccion, $telefono, $nacionalidad, $web, $comentarios);
        $datos->execute();

        if($datos->affected_rows > 0)
        {
            echo "<p class='encendido'>Insertada(s) {$datos->affected_rows} fila(s).<br>Autor correctamente.</p>";
        } else {
            echo "<p class='apagado'>ERROR. Autores no insertados.</p>";
        }
    ?>
    <p><a href="form-autores.php">Nuevo Autor</a></p>

</body>
</html>
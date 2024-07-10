<?php
    require('abrir-conexion.php');
?>
<?php
    $nombre_editorial = $_REQUEST['nombre_editorial'];
    $direccion = $_REQUEST['direccion'];
    $telefono = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];
    $web = $_REQUEST['web'];
    $comentarios = $_REQUEST['comentarios'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR EDITORIALES</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar editorial. Resultado</h2>
    <?php
        $consulta = "INSERT INTO editoriales(nombre_editorial, direccion, telefono, email, web, comentarios)
                    VALUES (?,?,?,?,?,?)";
        $datos = $conexion->prepare($consulta);

        $datos->bind_param('ssssss', $nombre_editorial, $direccion, $telefono, $email, $web, $comentarios);
        $datos->execute();

        if($datos->affected_rows > 0)
        {
            echo "<p class='encendido'>Insertada(s) {$datos->affected_rows} fila(s).<br>Casa editorial correctamente.</p>";
        } else {
            echo "<p class='apagado'>ERROR. Editorial no insertada.</p>";
        }
    ?>
    <p><a href="form-editoriales.php">Nueva editorial</a></p>

</body>
</html>
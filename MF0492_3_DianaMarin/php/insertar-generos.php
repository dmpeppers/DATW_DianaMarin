<?php
    require('abrir-conexion.php');
?>
<?php
    $nombre_genero = $_REQUEST['nombre_genero'];
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
    <h2>Insertar genero. Resultado</h2>
    <?php
        $consulta = "INSERT INTO generos(nombre_genero, comentarios)
                    VALUES (?,?)";
        $datos = $conexion->prepare($consulta);

        $datos->bind_param('ss', $nombre_genero, $comentarios);
        $datos->execute();

        if($datos->affected_rows > 0)
        {
            echo "<p class='encendido'>Insertada(s) {$datos->affected_rows} fila(s).<br>generos correctamente.</p>";
        } else {
            echo "<p class='apagado'>ERROR. Genero no insertada.</p>";
        }
    ?>
    <p><a href="form-generos.php">Nueva Genero</a></p>

</body>
</html>
<?php
    require('abrir-conexion.php');
?>
<?php
    $fk_id_autor = $_REQUEST['fk_id_autor'];
    $fk_id_libro = $_REQUEST['fk_id_libro'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR LIBROS-AUTOR</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar LIBRO-AUTOR. Resultado</h2>
    <?php
        $consulta = "INSERT INTO libro_autor(fk_id_autor, fk_id_libro)
                    VALUES (?,?)";
        $datos = $conexion->prepare($consulta);

        $datos->bind_param('ii', $fk_id_autor, $fk_id_libro);
        $datos->execute();

        if($datos->affected_rows > 0)
        {
            echo "<p class='encendido'>Insertados {$datos->affected_rows} fila(s).<br>Libros-autor correctamente.</p>";
        } else {
            echo "<p class='apagado'>ERROR. Libros-autor no insertados.</p>";
        }
    ?>
    <p><a href="form-libro-autor.php">Nuevo libro autor</a></p>

</body>
</html>
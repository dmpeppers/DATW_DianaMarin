<?php
    require('abrir-conexion.php');
?>
<?php
    $titulo = $_REQUEST['titulo'];
    $isbn10 = $_REQUEST['isbn10'];
    $isbn13 = $_REQUEST['isbn13'];
    $paginas = $_REQUEST['paginas'];
    $idioma = $_REQUEST['idioma'];
    $precio = $_REQUEST['precio'];
    $formato = $_REQUEST['formato'];
    $anio_publicacion = $_REQUEST['anio_publicacion'];
    $fk_id_editorial = $_REQUEST['fk_id_editorial'];
    $fk_id_genero = $_REQUEST['fk_id_genero'];
    $sinopsis = $_REQUEST['sinopsis'];
    $caratula = 'img/'.$_REQUEST['caratula'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR LIBROS</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar obras literarias. Resultado</h2>
    <?php
        $consulta = "INSERT INTO libros(titulo, isbn10, isbn13, paginas, idioma, precio, formato, anio_publicacion, fk_id_editorial, fk_id_genero, sinopsis, caratula)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $datos = $conexion->prepare($consulta);

        $datos->bind_param('sssisisiiiss', $titulo, $isbn10, $isbn13, $paginas, $idioma, $precio, $formato, $anio_publicacion, $fk_id_editorial, $fk_id_genero, $sinopsis, $caratula);
        $datos->execute();

        if($datos->affected_rows > 0)
        {
            echo "<p class='encendido'>Insertados {$datos->affected_rows} fila(s).<br>Libros correctamente.</p>";
        } else {
            echo "<p class='apagado'>ERROR. Libros no insertados.</p>";
        }
    ?>
    <p><a href="form-libros.php">Nuevo libro</a></p>

</body>
</html>
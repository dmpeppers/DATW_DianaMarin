<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO AÑADIR VIDEOTECA</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php
        require('header.php');
    ?>
    <h2>Nueva pelicula</h2>
    <form action="insertar-videoteca.php" method="get">
        <fieldset>
            <legend>Datos pelicula</legend>
            <p>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" require autofocus class="tamanio">
            </p>
            <p>
                <label for="actor">Actor:</label>
                <input type="text" name="actor" id="actor" require class="tamanio">
            </p>
            <p>
                <label for="actriz">Actriz:</label>
                <input type="text" name="actriz" id="actriz" require class="tamanio">
            </p>
            <p>
                <label for="director">Director:</label>
                <input type="text" name="director" id="director" require class="tamanio">
            </p>
            <p>
                <label for="duracion">Duracion:</label>
                <input type="number" name="duracion" id="duracion" require min="0">
            </p>
            <p>
                <label for="anio">Año: </label>
                <input type="number" name="anio" id="anio" min="0">
            </p>
            <p>
                <label for="cartel_pelicula">Cartel pelicula (img):</label>
                <input type="file" id="cartel_pelicula" name="cartel_pelicula">
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">
        </p>
    </form>
    <?php
        require('cerrar-conexion.php');
    ?>
</body>
</html>
<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO GENEROS</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar nuevo GENERO</h2>
    <form action="insertar-generos.php" method="get">
        <fieldset>
            <legend>Nuevo genero</legend>
            <p>
                <label for="nombre_genero">Nuevo Genero:</label>
                <input type="text" name="nombre_genero" id="nombre_genero" class="ancho">
            </p>
            <p>
                <label for="comentarios">Comentarios:</label>
                <textarea name="comentarios" id="comentarios" rows="5" cols="50"></textarea>
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">
        </p>
    </form>
</body>
</html>
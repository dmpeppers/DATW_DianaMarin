<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO EDITORIALES</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar nueva EDITORIAL</h2>
    <form action="insertar-editoriales.php" method="get">
        <fieldset>
            <legend>Nueva editorial</legend>
            <p>
                <label for="nombre_editorial">Nombre Editorial:</label>
                <input type="text" name="nombre_editorial" id="nombre_editorial" class="ancho">
            </p>
            <p>
                <label for="direccion">Direccion:</label>
                <input type="text" name="direccion" id="direccion" class="ancho">
            </p>
            <p>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="ancho">
            </p>
            <p>
                <label for="web">Pagina web:</label>
                <input type="text" name="web" id="web" class="ancho">
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
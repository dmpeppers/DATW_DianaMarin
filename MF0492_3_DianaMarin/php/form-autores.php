<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO AUTORES</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar nuevo AUTOR</h2>
    <form action="insertar-autores.php" method="get">
        <fieldset>
            <legend>Nuevo Autor</legend>
            <p>
                <label for="nombre">Nombre Autor:</label>
                <input type="text" name="nombre" id="nombre" class="ancho">
            </p>
            <p>
                <label for="apellido1">Primer apellido:</label>
                <input type="text" name="apellido1" id="apellido1" class="ancho">
            </p>
            <p>
                <label for="apellido2">Segundo apellido:</label>
                <input type="text" name="apellido2" id="apellido2" class="ancho">
            </p>
            <p>
                <label for="dni">DNI:</label>
                <input type="text" name="dni" id="dni">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="ancho">
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
                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" name="nacionalidad" id="nacionalidad" class="ancho">
            </p>
            <p>
                <label for="web">Web:</label>
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
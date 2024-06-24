<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DEPARTAMENTO</title>
    <link rel="stylesheet" href="../css/detallitos.css">
</head>
<body>
    <h2>FORMULARIO DEPARTAMENTO</h2>
    <form action="insertar-departamento.php" method="get">
        <fieldset>
            <legend>Nuevo departamento</legend>
            <p>
                <label for="cod_departamento">Codigo departamento: </label>
                <input type="text" name="cod_departamento" id="cod_departamento" required>
            </p>
            <p>
                <label for="nombre_departamento">Nombre del departamento: </label>
                <input type="text" name="nombre_departamento" id="nombre_departamento">
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
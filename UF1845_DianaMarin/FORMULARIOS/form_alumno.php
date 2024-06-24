<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO ALUMNO</title>
    <link rel="stylesheet" href="../css/detallitos.css">
</head>
<body>
    <h2>FORMULARIO ALUMNO/A</h2>
    <form action="insertar-alumno.php" method="get">
        <fieldset>
            <legend>Nuevo Alumno/a</legend>
            <p>
                <label for="id_alumno">Id Alumno: </label>
                <input type="number" name="id_alumno" id="id_alumno" required>
            </p>
             <p>
                <label for="dni_alumno">DNI Alumno: </label>
                <input type="text" name="dni_alumno" id="dni_alumno" required>
            </p>
            <p>
                <label for="nombre_alumno">Nombre Alumno: </label>
                <input type="text" name="nombre_alumno" id="nombre_alumno">
            </p>
            <p>
                <label for="apellido1_alumno">Apellido 1 Alumno: </label>
                <input type="text" name="apellido1_alumno" id="apellido1_alumno">
            </p>
            <p>
                <label for="apellido2_alumno">Apellido 2 Alumno: </label>
                <input type="text" name="apellido2_alumno" id="apellido2_alumno">
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
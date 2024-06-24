<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO PROFESOR</title>
    <link rel="stylesheet" href="../css/detallitos.css">
</head>
<body>
    <h2>FORMULARIO PROFESOR/A</h2>
    <form action="insertar-profesor.php" method="get">
        <fieldset>
            <legend>Nuevo Profesor/a</legend>
            <p>
                <label for="id_profesor">Id Profesor: </label>
                <input type="number" name="id_profesor" id="id_profesor" required>
            </p>
             <p>
                <label for="dni_profesor">DNI Profesor: </label>
                <input type="text" name="dni_profesor" id="dni_profesor" required>
            </p>
            <p>
                <label for="nombre_profesor">Nombre Profesor: </label>
                <input type="text" name="nombre_profesor" id="nombre_profesor">
            </p>
            <p>
                <label for="apellido1_profesor">Apellido 1 Profesor: </label>
                <input type="text" name="apellido1_profesor" id="apellido1_profesor">
            </p>
            <p>
                <label for="apellido2_profesor">Apellido 2 Profesor: </label>
                <input type="text" name="apellido2_profesor" id="apellido2_profesor">
            </p>
            <p>
                <label for="fk_id_departamento">Departamento: </label>
                <select name="fk_id_departamento" id="fk_id_departamento">
                    <option value=" " selected hidden>Seleccione un departamento</option>
                    <?php
                        $consulta = "SELECT
                        pk_id_departamento, nombre_departamento
                        FROM DEPARTAMENTO
                        ORDER BY pk_id_departamento ASC";
                        $datos = $conexion->query($consulta);
                        while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value='{$fila['pk_id_departamento']}'>{$fila['nombre_departamento']}</option>";
                        }
                    ?>
                </select>
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
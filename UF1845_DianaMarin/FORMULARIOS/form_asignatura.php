<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO ASIGNATURA</title>
    <link rel="stylesheet" href="../css/detallitos.css">
</head>
<body>
    <h2>FORMULARIO ASIGNATURA</h2>
    <form action="insertar-asignatura.php" method="get">
        <fieldset>
            <legend>Nueva Asignatura</legend>
            <p>
                <label for="cod_asignatura">Codigo Asignatura: </label>
                <input type="text" name="cod_asignatura" id="cod_asignatura" required>
            </p>
            <p>
                <label for="nombre_asignatura">Nombre Asignatura: </label>
                <input type="text" name="nombre_asignatura" id="nombre_asignatura">
            </p>
            <p>
                <label for="numero_horas">Numero de horas: </label>
                <input type="number" name="numero_horas" id="numero_horas">
            </p>
            <p>
                <label for="fk_id_profesor">Nombre profesor/a: </label>
                <select name="fk_id_profesor" id="fk_id_profesor">
                    <option value=" " selected hidden>Seleccione un profesor/a</option>
                    <?php
                        $consulta = "SELECT
                        pk_id_profesor, nombre_profesor, apellido1_profesor, apellido2_profesor 
                        FROM PROFESOR
                        ORDER BY pk_id_profesor ASC";
                        $datos = $conexion->query($consulta);
                        while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value='{$fila['pk_id_profesor']}'>{$fila['nombre_profesor']} {$fila['apellido1_profesor']} {$fila['apellido2_profesor']}</option>";
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
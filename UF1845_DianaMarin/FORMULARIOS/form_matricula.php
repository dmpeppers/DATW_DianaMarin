<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO MATRICULA</title>
    <link rel="stylesheet" href="../css/detallitos.css">
</head>
<body>
    <h2>FORMULARIO MATRICULA</h2>
    <form action="insertar-matricula.php" method="get">
        <fieldset>
            <legend>Nueva Matricula</legend>
            <p>
                <label for="cod_matricula">Codigo Matricula: </label>
                <input type="text" name="cod_matricula" id="cod_matricula" required>
            </p>
             <p>
                <label for="anio">Año de la Matricula: </label>
                <input type="number" name="anio" id="anio" required>
            </p>
            <p>
                <label for="fk_id_asignatura">Asignatura: </label>
                <select name="fk_id_asignatura" id="fk_id_asignatura">
                    <option value=" " selected hidden>Seleccione una Asignatura</option>
                    <?php
                        $consulta = "SELECT
                        pk_id_asignatura, nombre_asignatura
                        FROM ASIGNATURA
                        ORDER BY pk_id_asignatura ASC";
                        $datos = $conexion->query($consulta);
                        while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value='{$fila['pk_id_asignatura']}'>{$fila['nombre_asignatura']}</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="fk_id_alumno">Alumno: </label>
                <select name="fk_id_alumno" id="fk_id_alumno">
                    <option value=" " selected hidden>Seleccione un Alumno/a</option>
                    <?php
                        $consulta = "SELECT
                        pk_id_alumno, nombre_alumno, apellido1_alumno, apellido2_alumno
                        FROM ALUMNO
                        ORDER BY pk_id_alumno ASC";
                        $datos = $conexion->query($consulta);
                        while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
                            echo "<option value='{$fila['pk_id_alumno']}'>{$fila['nombre_alumno']} {$fila['apellido1_alumno']} {$fila['apellido2_alumno']}</option>";
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
<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO LIBRO-AUTOR</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>LIBRO POR AUTOR</h2>
    <form action="insertar-libro-autor.php" method="get">
        <fieldset>
            <legend>RELACION LIBRO AUTOR</legend>
            <p>
                <label for="fk_id_autor">Autor: </label>
                <select name="fk_id_autor" id="fk_id_autor">
                <?php
                    $consulta = "SELECT pk_id_autor, nombre, apellido1, apellido2
                                 FROM autores
                                 ORDER BY nombre ASC";
                    $datos = $conexion->query($consulta);
                    while($fila = $datos->fetch_array(MYSQLI_ASSOC))
                    {
                        echo "<option value='{$fila['pk_id_autor']}'>{$fila['nombre']} {$fila['apellido1']} {$fila['apellido2']}</option>";
                    }
                ?>
                <option value="" selected hidden>Seleccione un Autor</option>
                </select>
            </p>
            <p>
                <label for="fk_id_libro">Genero: </label>
                <select name="fk_id_libro" id="fk_id_libro">
                <?php
                    $consulta = "SELECT pk_id_libro, titulo
                                 FROM libros
                                 ORDER BY titulo ASC";
                    $datos = $conexion->query($consulta);
                    while($fila = $datos->fetch_array(MYSQLI_ASSOC))
                    {
                        echo "<option value='{$fila['pk_id_libro']}'>{$fila['titulo']}</option>";
                    }
                ?>
                <option value="" selected hidden>Seleccione un Libro</option>
                </select>
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">
        </p>
    </form>
</body>
</html>
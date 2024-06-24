<?php
    require('abrir-conexion.php');
?>
<?php
// capturo los datos del formulario
    $id_profesor = $_REQUEST['id_profesor'];
    $dni_profesor = $_REQUEST['dni_profesor'];
    $nombre_profesor = $_REQUEST['nombre_profesor'];
    $apellido1_profesor = $_REQUEST['apellido1_profesor'];
    $apellido2_profesor = $_REQUEST['apellido2_profesor'];
    $fk_id_departamento = $_REQUEST['fk_id_departamento'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR PROFESOR</title>
    <link rel="stylesheet" href="../css/detallitos.css">

</head>
<body>
    <h2>INSERTAR PROFESOR/A</h2>
    <?php
        $consulta = "INSERT INTO profesor (id_profesor, dni_profesor, nombre_profesor, apellido1_profesor, apellido2_profesor, fk_id_departamento)
        VALUES (?,?,?,?,?,?)";
        $datos = $conexion->prepare($consulta);
        $datos->bind_param('issssi', $id_profesor, $dni_profesor, $nombre_profesor, $apellido1_profesor, $apellido2_profesor, $fk_id_departamento);
        $datos->execute();
        if($datos->affected_rows > 0){
            echo "<p class='encendido'>Profesor/a insertado correctamente</p>";
        } else{
            echo "<p class='apagado'>Error.Profesor/a no insertado.</p>";
        }
    ?>
    <?php
    require('cerrar-conexion.php');
    ?>
    <p><a href="form-profesor.php"></p>
</body>
</html>
<?php
    require('abrir-conexion.php');
?>
<?php
// capturo los datos del formulario
    $id_alumno = $_REQUEST['id_alumno'];
    $dni_alumno = $_REQUEST['dni_alumno'];
    $nombre_alumno = $_REQUEST['nombre_alumno'];
    $apellido1_alumno = $_REQUEST['apellido1_alumno'];
    $apellido2_alumno = $_REQUEST['apellido2_alumno'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR ALUMNO</title>
    <link rel="stylesheet" href="../css/detallitos.css">

</head>
<body>
    <h2>INSERTAR ALUMNO/A</h2>
    <?php
        $consulta = "INSERT INTO alumno (id_alumno, dni_alumno, nombre_alumno, apellido1_alumno, apellido2_alumno)
        VALUES (?,?,?,?,?)";
        $datos = $conexion->prepare($consulta);
        $datos->bind_param('issss', $id_alumno, $dni_alumno, $nombre_alumno, $apellido1_alumno, $apellido2_alumno);
        $datos->execute();
        if($datos->affected_rows > 0){
            echo "<p class='encendido'>Alumno/a insertado correctamente</p>";
        } else{
            echo "<p class='apagado'>Error.Alumno/a no insertado.</p>";
        }
    ?>
    <?php
    require('cerrar-conexion.php');
    ?>
    <p><a href="form-alumno.php"></p>
</body>
</html>
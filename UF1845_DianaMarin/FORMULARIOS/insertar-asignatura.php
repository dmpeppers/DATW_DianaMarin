<?php
    require('abrir-conexion.php');
?>
<?php
// capturo los datos del formulario
    $cod_asignatura = $_REQUEST['cod_asignatura'];
    $nombre_asignatura = $_REQUEST['nombre_asignatura'];
    $numero_horas = $_REQUEST['numero_horas'];
    $fk_id_profesor = $_REQUEST['fk_id_profesor'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR ASIGNATURA</title>
    <link rel="stylesheet" href="../css/detallitos.css">

</head>
<body>
    <h2>INSERTAR ASIGNATURA</h2>
    <?php
        $consulta = "INSERT INTO ASIGNATURA (cod_asignatura, nombre_asignatura, numero_horas, fk_id_profesor)
        VALUES (?,?,?,?)";
        $datos = $conexion->prepare($consulta);
        $datos->bind_param('ssii', $cod_asignatura, $nombre_asignatura, $numero_horas, $fk_id_profesor);
        $datos->execute();
        if($datos->affected_rows > 0){
            echo "<p class='encendido'>ASIGNATURA insertado correctamente</p>";
        } else{
            echo "<p class='apagado'>Error.ASIGNATURA no insertado.</p>";
        }
    ?>
    <?php
    require('cerrar-conexion.php');
    ?>
    <p><a href="form-asignatura.php"></p>
</body>
</html>
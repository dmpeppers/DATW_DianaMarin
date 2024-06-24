<?php
    require('abrir-conexion.php');
?>
<?php
// capturo los datos del formulario
    $cod_matricula = $_REQUEST['cod_matricula'];
    $anio = $_REQUEST['anio'];
    $fk_id_asignatura = $_REQUEST['fk_id_asignatura'];
    $fk_id_alumno = $_REQUEST['fk_id_alumno'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR MATRICULA</title>
    <link rel="stylesheet" href="../css/detallitos.css">

</head>
<body>
    <h2>INSERTAR MATRICULA</h2>
    <?php
        $consulta = "INSERT INTO MATRICULA (cod_matricula,anio, fk_id_asignatura, fk_id_alumno)
        VALUES (?,?,?,?)";
        $datos = $conexion->prepare($consulta);
        $datos->bind_param('siii', $cod_matricula, $anio, $fk_id_asignatura, $fk_id_alumno);
        $datos->execute();
        if($datos->affected_rows > 0){
            echo "<p class='encendido'>Matricula insertado correctamente</p>";
        } else{
            echo "<p class='apagado'>Error.Matricula no insertado.</p>";
        }
    ?>
    <?php
    require('cerrar-conexion.php');
    ?>
    <p><a href="form-matricula.php"></p>
</body>
</html>
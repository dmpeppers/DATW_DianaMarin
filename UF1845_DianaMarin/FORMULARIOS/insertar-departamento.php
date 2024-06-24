<?php
    require('abrir-conexion.php');
?>
<?php
// capturo los datos del formulario
    $cod_departamento = $_REQUEST['cod_departamento'];
    $nombre_departamento = $_REQUEST['nombre_departamento'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR DEPARTAMENTO</title>
    <link rel="stylesheet" href="../css/detallitos.css">
</head>
<body>
    <h2>Insertar departamento</h2>
    <?php
        $consulta = "INSERT INTO departamento (cod_departamento, nombre_departamento)
        VALUES (?,?)";
        $datos = $conexion->prepare($consulta);
        $datos->bind_param('ss', $cod_departamento, $nombre_departamento);
        $datos->execute();
        if($datos->affected_rows > 0){
            echo "<p class='encendido'>Departamento insertado correctamente</p>";
        } else{
            echo "<p class='apagado'>Error.Departamento no insertado.</p>";
        }
    ?>
    <?php
    require('cerrar-conexion.php');
    ?>
    <p><a href="form-departamento.php"></p>
</body>
</html>
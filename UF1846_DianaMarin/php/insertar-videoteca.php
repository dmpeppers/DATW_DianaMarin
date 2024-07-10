<?php
    require('abrir-conexion.php');
?>
<?php
    $titulo = $_REQUEST['titulo'];
    $actor = $_REQUEST['actor'];
    $actriz = $_REQUEST['actriz'];
    $director = $_REQUEST['director'];
    $duracion = $_REQUEST['duracion'];
    $anio = $_REQUEST['anio'];
    $cartel_pelicula = 'img/'.$_REQUEST['cartel_pelicula'];

    $consulta = "INSERT INTO videoteca(titulo, actor, actriz, director, duracion, anio, cartel_pelicula)
                 VALUES (?,?,?,?,?,?,?)";
    $datos = $conexion->prepare($consulta);
    $datos->bind_param('ssssiis', $titulo, $actor, $actriz, $director, $duracion, $anio, $cartel_pelicula);
    $datos->execute();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR VIDEOTECA</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
        require('php/header.php');
    ?>
    <h2>Insertar videoteca</h2>
    <?php
        if($datos->affected_rows>0){
            echo "<p>Pelicula insertada correctamente.</p>";
            echo "<p>$datos->affected_rows fila insertada.</p>";
        }
        else{
            echo "<p>Pelicula NO insertada</p>";
        }
    ?>
    <p><a href="form-videoteca.php">Regresar formulario</a></p>
</body>
</html>
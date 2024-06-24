<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Ficha actrices::</title>
    <style>
    .encendido{
            font-size: 1.5em;
            background-color: green;
            padding: 15px;
            border-radius: 10px;
            color: while;
        }
        .apagado {
            font-size: 1.5em;
            background-color: red;
            padding: 15px;
            border-radius: 10px;
            color: white;
        }
        div{
            background-color: gray;
            color: white;
            border-radius: 10px;
            padding: 15px;
            border: 3px solid black;
            margin-bottom: 10px;
        }
        </style>
</head>
<body>
    <h2>Fichas actrices</h2>
    <?php
    // conexion de base de datos
    $conexion = mysqli_connect('localhost','root','','cine_v2');
    if(!mysqli_connect_errno()){
        echo "<p class='encendido'>Conexion completa</p>";
    }
    $consulta = "SELECT * FROM actrices LIMIT 5";
    $datos = mysqli_query($conexion, $consulta);
    while($fila = mysqli_fetch_array($datos)){
        echo '<div>';
        echo 'Id actriz:'.$fila['pk_id_actriz'].'<br>';
        echo 'Nombre:'.$fila[1].'<br>';
        echo 'Edad: '.$fila[4].'<br>';
        echo 'Nacionalidad:'.$fila[6].'<br>';
        echo '</div>';
    }

    if(mysqli_close($conexion)){
        echo "<p class='apagado'> La conexion a la base de datos ha sido CERRADA CORRECTAMENTE</p>";
    }
    else{
        echo "<p class='encendido'>La conexion a la base de datos NO ha sido cerrada correctamente, PERMANECE ABIERTA</p>";
    }
    ?>
</body>
</html>
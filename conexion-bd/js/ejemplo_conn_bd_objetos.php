<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BD cine_v2 oriantando a objetos</title>
</head>
<body>
    <h1>Conexion BD cine_v2 oriantando a objetos</h1>
    <?php
    // Conexion a la base de datos
        $conexion = new mysqli('localhost', 'root', '', 'cine_v2');
    // definimos la consulta
        $consulta = "SELECT * FROM actores";
    // Ejecutamos la consulta y guardamos los datos
        $datos = $conexion->query($consulta);
    // Recorremos los datos y los mostramos en la pantalla
        while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
            echo $fila['nombre_actor']. '<br>';
        }
    // cerramos la conexion
        $conexion->close();
    ?>
</body>
</html>
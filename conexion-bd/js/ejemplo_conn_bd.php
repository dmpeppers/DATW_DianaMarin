<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Ejemplo conexion BD::</title>
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
    <h1>Conexion a una base de datos de ejemplo academia_v2 </h1>
    <?php
    // conexion de los datos
    $conexion = mysqli_connect('localhost', 'root', '', 'academia_v2');
    // comprobacion: comprobamos que la conexion se ha realizado correcramente
    if(!mysqli_connect_errno()){
        echo "<p class='encendido'>La conezion se ha realiaad con exito</p>";
    }
    if(mysqli_connect_errno()){
        echo "<p>Error. La conexion ha fallado <br> Intentelo mas tarde</p>";
        exit;
    }
    else{
        "<p class='apagado'> La conexion se ha realizado con exito</p>";
    }
    // consulta a la base de datos
    $consulta = "SELECT alumno.*, nombre_ccaa 
                FROM alumno, ccaa
                WHERE fk_id_ccaa = pk_id_ccaa
                ORDER BY nombre ASC";
    // extraigo los datos de la base de datos y los almaceno en la variable $datos
    $datos = mysqli_query($conexion, $consulta);
    // recorremos los datos y los mostramos en la pantalla
    while ($fila = mysqli_fetch_array($datos)){
        echo '<div>';
        echo "id:{$fila['pk_id_alumno']}<br>";
        echo 'Nombre: '.$fila['nombre'].'<br>';
        echo 'Apellidos: '.$fila[3].'<br>';
        echo 'DNI: '.$fila[4].'<br>';
        echo 'Nº SS: '.$fila[5].'<br>';
        echo 'Fecha naciemiento: '.$fila[6].'<br>';
        echo 'E-mail: '.$fila[7].'<br>';
        echo 'Genero: '.$fila[8].'<br>';
        echo '<div>';
        echo 'Direccion: '.$fila[9].'<br>';
        echo 'Localidad: '.$fila[10].'<br>';
        echo 'C.P: '.$fila[11].'<br>';
        echo 'CCAA: '.$fila['nombre_ccaa'].'<br>';
        echo '</div>';
        echo '</div>';
    }
    // cerramos la conexion a la base de datos
    if(mysqli_close($conexion)){
        echo "<p class='apagado'> La conexion a la base de datos ha sido CERRADA CORRECTAMENTE</p>";
    }
    else{
        echo "<p class='encendido'>La conexion a la base de datos NO ha sido cerrada correctamente, PERMANECE ABIERTA</p>";
    }
    ?>
</body>
</html>
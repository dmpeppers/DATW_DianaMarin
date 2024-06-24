<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo con BD Objetos</title>
    <style>
        .encendido{
            font-size: 1.5em;
            background-color: green;
            padding: 15px;
            border-radius: 10px;
            color: while;
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
    <?php
    $conexion = new mysqli('localhost','root','','cine_v2');
    if($conexion->connect_errno){
        echo "<p class='encendido'>Conexion completa</p>";
    }
    $consulta = "SELECT 
            titulo AS 'Titulo: ',
            anio AS 'Año: ',
            duracion AS 'Duracion: ',
            oscar_pelicula AS 'Oscar: ',
            nombre_actor AS 'Actor: ',
            nombre_actriz AS 'Actriz: ',
            nombre_director AS 'Director: ',
            LEFT(REPLACE(resumen, '<p>', ''),200) AS 'Resumen: <br>'
            FROM peliculas
            JOIN actores
            ON fk_id_actor = pk_id_actor
            JOIN actrices
            ON fk_id_actriz = pk_id_actriz
            JOIN director
            ON fk_id_director = pk_id_director
            -- FROM peliculas, actores, actrices, director
            -- WHERE fk_id_actriz = pk_id_actriz
            -- AND fk_id_actor = pk_id_actor 
            -- AND fk_id_director = pk_id_director
            ORDER BY nombre_actor ASC LIMIT 10;";
    $datos= $conexion->query($consulta);
    while ($fila = $datos->fetch_array(MYSQLI_ASSOC)){
        echo '<div>';
        foreach($fila AS $clave => $valor){
            echo $clave.' '.$valor.'<br>';
        }
        echo '</div>';
    }
    ?>
</body>
</html>
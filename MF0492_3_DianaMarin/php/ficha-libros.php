<?php
    require('abrir-conexion.php');
?>
<?php
    $consulta ="SELECT titulo, caratula, idioma, precio, formato, anio_publicacion, sinopsis, paginas, fk_id_autor, nombre, apellido1, apellido2
                FROM libros, autores
                LEFT JOIN libro_autor
                ON fk_id_autor = pk_id_autor
                LIMIT 8";
    $datos = $conexion->query($consulta);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHA RETRATOS</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap');
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2em;
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.377);

        }
        h2{
            text-shadow: 3px 3px 4px black;
            color: white;
            font-family: "Playwrite IT Moderna", cursive;
            font-optical-sizing: auto;
            font-weight: 600;
            font-size: 2em;
        }
        div{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
        }
        section {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        article {
            width: calc(96% / 3);
            padding: 10px;
            margin-bottom: 14px;
            box-sizing: border-box;
            border: 4px solid gray;
            border-radius: 20px;
        }
        figure {
            width: 100%;
            margin: 0;
            padding: 0;
        }
        img{
            aspect-ratio: 2/3;
            object-fit: cover;
            width: 100%;
        }
        h3 {
            font-family: "Playwrite IT Moderna", cursive;
            border-bottom: 4px solid gray;
            margin-right: -10px;
            margin-left: -10px;
            padding-left: 10px;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2> Libreria ♥</h2>
    <div>
        <section>
            <?php
        while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
            ?>
        <article>
            <h3><?= $fila['titulo']?></h3>
            <figure>
                <img src="../<?=$fila['caratula']?>" alt="">
            </figure>
            <p>Paginas: <?=$fila['paginas']?></p>
            <p>Idioma: <?=$fila['idioma']?></p>
            <p>Precio: <?=$fila['precio']?></p>
            <p>Formato: <?=$fila['formato']?></p>
            <p>Autor: <?=$fila['nombre']?> <?=$fila['apellido1']?> <?=$fila['apellido2']?></p>
            <p>Sinopsis: <?=$fila['sinopsis']?></p>
        </article>
        <?php
    }
    ?>
    </section>
</div>
    <?php
        $conexion->close();
    ?>
</body>
</html>
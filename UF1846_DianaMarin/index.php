<?php
    require('php/abrir-conexion.php');
?>
<?php
    $consulta = "SELECT titulo, actor, actriz, director, duracion, anio, cartel_pelicula
                FROM videoteca
                ORDER BY anio DESC";
    $datos = $conexion->query($consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOTECA</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
        require('php/header.php');
    ?>
    <div id="contenido">
        <main>
            <section id="videoteca">
                <h2>Lista Videoteca</h2>
                <?php
                    while($fila = $datos->fetch_array(MYSQLI_ASSOC)){
                ?>
                <article>
                    <h3><?= $fila['titulo']?></h3>
                    <img src="<?= $fila['cartel_pelicula']?>" alt="">
                    <p>Año: <?=$fila['anio']?><br>
                    Duracion: <?= $fila['duracion']?><br>
                    Interpretes: <?= $fila['actor']?>, <?= $fila['actriz']?><br>
                    Director: <?=$fila['director']?>
                </article>
                <?php
                    }
                ?>
            </section>
        </main>
    </div>
</body>
</html>
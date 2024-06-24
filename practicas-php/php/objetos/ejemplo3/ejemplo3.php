<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3</title>
</head>
<body>
    <?php
    require_once('clase3.php');
    $bicicleta = new Vehiculo();
    $bicicleta->setTraccion("animal");
    echo "<h1>La traccion es {$bicicleta->getTraccion()}</h1>";

    $coche = new Vehiculo();
    $coche->setTraccion("mecanica");
    echo "<h1>La traccion es {$coche->getTraccion()}</h1>";

    $colores = new Vehiculo();
    $colores->setColor("Rojo");
    echo "<h1>El color es: {$colores->getColor()}</h1>";
    ?>
</body>
</html>
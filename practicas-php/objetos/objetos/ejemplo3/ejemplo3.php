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

        // creamos vehículos
        $bicicleta = new Vehiculo();
        $bicicleta->setTraccion("animal");
        echo "<h1>La tracción es: {$bicicleta->getTraccion()}</h1>";
        $coche = new Vehiculo();
        $coche->setTraccion("mecanica");
        $coche->setColor("Verde");
        echo "<h1>La tracción es: {$coche->getTraccion()}</h1>";
        echo "<h2>El color es: {$coche->getColor()}</h2>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <?php
        require_once('clase1.php');

        // instancias de la clase
        $xenia = new Persona();
        $diego = new Persona();
        $diana = new Persona();
        $nacho = new Persona();
        
        // datos xenia
        $xenia->nombre = "Xenia";
        $xenia->apellidos = "Suárez Martínez";
        $xenia->dni = "32000000D";
        echo "<h1>$xenia->nombre $xenia->apellidos</h1>";
        echo "<h2>$xenia->dni</h2>";

        // datos diego
        $diego->nombre = "Diego";
        $diego->apellidos = "Álvarez Martínez";
        $diego->dni = "32111111H";
        echo "<h1>$diego->nombre $diego->apellidos</h1>";
        echo "<h2>$diego->dni</h2>";

        // datos diana
        $diana->setNombre("Diana");
        $diana->setApellidos("García Oliveira");
        $diana->setDni('32222222E');
        echo "<h1>{$diana->getNombre()} {$diana->getApellidos()}</h1>";
        echo "<h2>".$diana->getDni().'</h2>';

        // datos nacho
        $nacho->setNombre("Ignacio");
        $nacho->setApellidos("De Castro Almeida");
        $nacho->setDni('32333333K');
        echo "<h1>{$nacho->getNombre()} {$nacho->getApellidos()}</h1>";
        echo '<h2>'.$nacho->getDni().'</h2>';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <!-- existe 4 diferentes opciones para incrustar archivo php en html, required, include, include_once, required_once -->
    <?php
        require_once('clase1.php');
        // instancias de la clase
        $xenia = new Persona();
        $diego = new Persona();
        $diana = new Persona();
        $nacho = new Persona();

        // instancia datos xenia
        // ingresar los datos a las instancias
        $xenia->nombre = "Xenia";
        $xenia->apellidos = "Suarez Martinez";
        $xenia->dni = "32000000D";
        // imprimir datos
        echo "<h1>$xenia->nombre $xenia->apellidos</h1>";
        echo "<h2>$xenia->dni</h2>";

         // instancia datos diego
        // ingresar los datos a las instancias
        $diego->nombre = "Diego";
        $diego->apellidos = "Alvares Martinez";
        $diego->dni = "32111111H";
        // imprimir datos
        echo "<h1>$diego->nombre $diego->apellidos</h1>";
        echo "<h2>$diego->dni</h2>";

        // Instancia datos diana
        $diana->setNombre("Diana");
        $diana->setApellidos("Garcia Oliveira");
        $diana->setDni("32222222E");
        // Imprimimos datos
        echo "<h1>{$diana->getNombre()} {$diana->getApellidos()}</h1>";
        echo "<h2>".$diana->getDni()."</h2>";

        // Instancia datos nacho
        $nacho->setNombre("Ignacio");
        $nacho->setApellidos("de Castro Almeida");
        $nacho->setDni("323333333K");
        // Imprimimos datos
        echo "<h1>{$nacho->getNombre()} {$nacho->getApellidos()}</h1>";
        echo "<h2>".$nacho->getDni()."</h2>";
    ?>

</body>
</html>
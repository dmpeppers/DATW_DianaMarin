<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
</head>
<body>
    <?php
        require_once("clase2.php");

        // instanciamos objetos
        $helena = new Persona2();
        $daniel = new Persona2();
        $monica = new Persona2();
        $carlos = new Persona2();

        // datos helena
        $helena->setNombre("Helena");
        $helena->setApellidos("González Bordiú");
        $helena->setDni("32444444J");
        $helena->edad = 43;
        echo "<h1>{$helena->getNombre()} {$helena->getApellidos()}</h1>";
        echo "<h2>".$helena->getDni()."</h2>";
        echo "<h3>$helena->edad</h3>";

        // datos daniel
        $daniel->setNombre("Daniel");
        $daniel->setApellidos('Garía García');
        $daniel->setDni('32555555Y');
        $daniel->edad = 28;
        echo "<h1>{$daniel->getNombre()} {$daniel->getApellidos()}";
        echo '<h2>'.$daniel->getDni().'</h2>';
        echo "<h3>$daniel->edad</h3>";

        // datos monica
        $monica->setNombre("Mónica");
        $monica->setApellidos("Álvarez Álvarez");
        $monica->setDni('32666666O');
        $monica->edad = 33;
        // $monica->cp = '33204';
        $monica->setCp("33204");

        echo "<h1>{$monica->getNombre()} {$monica->getApellidos()}";
        echo '<h2>'.$monica->getDni().'</h2>';
        echo "<h3>$monica->edad</h3>";
        // echo "<h4>$monica->cp</h4>";
        echo "<h4>".$monica->getCp().'</h4>';
        echo "<p>El nombre completo de Mónica es: ".$monica->escribirNombreCompleto().'</p>';
        // $monica->escribirNombreCompleto();
    ?>


</body>
</html>
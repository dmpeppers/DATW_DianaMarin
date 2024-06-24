<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
</head>
<body>
    <?php
        require_once('clase2.php');
        // instanciamos objetos
        $helena = new Persona2();
        $daniel = new Persona2();
        $marcela = new Persona2();
        $carlos = new Persona2();

        // datos helena
        $helena->setNombre("Helena");
        $helena->setApellidos("Gonzales Bordiu");
        $helena->setDni("32444444J");
        $helena->edad=43;
        // imprimir los datos
        echo "<h1>{$helena->getNombre()} {$helena->getApellidos()}</h1>";
        echo "<h2>".$helena->getDni()."</h2>";
        echo "<h3>$helena->edad</h3>";

         // datos daniel
         $daniel->setNombre("Daniel");
         $daniel->setApellidos("Gracia Garicia");
         $daniel->setDni("32555555Y");
         $daniel->edad=43;
         // imprimir los datos
         echo "<h1>{$daniel->getNombre()} {$daniel->getApellidos()}</h1>";
         echo "<h2>".$daniel->getDni()."</h2>";
         echo "<h3>$daniel->edad</h3>";   
         
        //datos marcela
        $marcela->setNombre("Marcela");
        $marcela->setApellidos("Alvarez Alvarez");
        $marcela->setDni('32666666O');
        $marcela->edad = 33;
        $marcela->setcp(33208);
        // Imprimir los datos
        echo "<h1>{$marcela->getNombre()} {$marcela->getApellidos()}</h1>";
        echo '<h2>'.$marcela->getDni().'</h2>';
        echo "<h3>$marcela->edad</h3>";
        echo "<h3>".$marcela->getcp()."</h3>";
        echo "<p>El nombre completo de Marcela es: ".$marcela->escribirNombreCompleto()."</p>";

    ?>
</body>
</html>
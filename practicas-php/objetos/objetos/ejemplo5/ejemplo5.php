<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5</title>
    <style>
        img {
            width: 300px;
        }
        .aviso {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 1.5em;
            border: 4px solid red;
            background-color: yellow;
            padding: 5px;
        }
        .resultado {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 1.5em;
            border: 4px solid green;
            background-color: greenyellow;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        require('clase5.php');
        $libro1 = new Libro("Curso práctico de WordPress");
        echo "<h2>{$libro1->getTitulo()}</h2>";
        $libro1->setPortada("wordpress");
        $libro1->getPortada();
        $libro1->setNumPaginas(50);
        $libro1->getNumPaginas();

        $libro2 = new Libro("Rust");
        echo "<h2>{$libro2->getTitulo()}</h2>";
        $libro2->setPortada("rust");
        $libro2->getPortada();
        $libro2->setNumPaginas(125);
        $libro2->getNumPaginas();

        $libro3 = new Libro("Mitología Griega");
        echo "<h2>{$libro3->getTitulo()}</h2>";
        $libro3->setPortada("mitologia-griega");
        $libro3->getPortada();
        $libro3->setNumPaginas(1900);
        $libro3->getNumPaginas();
    ?>
</body>
</html>
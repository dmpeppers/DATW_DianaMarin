<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5bis</title>
    <style>
        img {
            width: 300px;
        }
        .ficha {
            border: 4px solid #eee;
            width: 600px;
            margin-bottom: 10px;
            padding: 5px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
        <?php
            require('clase5.php');
            $libro4 = new Libro('Mitología griega');
            $libro4->setPortada("mitologia-griega");
            $libro4->setAutor("Anónimo");
            $libro4->setNumPaginas(1155);
            $libro4->setFormato("papel");
            $libro4->setColeccion("mitologia");
            $libro4->imprimirFicha();

            $libro5 = new Libro("Curso de WordPress 6.5");
            $libro5->setPortada("wordpress");
            $libro5->setAutor("Fernando Tellado");
            $libro5->setNumPaginas(400);
            $libro5->setFormato('Electrónico, papel');
            $libro5->setColeccion('informatica');
            $libro5->imprimirFicha();

            
        ?>
</body>
</html>
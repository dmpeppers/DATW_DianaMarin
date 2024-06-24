<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena con HEREDOC</title>
    <style>
        .formato{
            width: 500px;
            background-color: #eee;
            border: 4px solid rgb(200,200,200);
            border-radius : 10px;
            font-family: arial;
            padding: 10px
        }
        span{
            font-weight:bold;
        }
        pre {
            font-family: arial;
        }
    </style>
</head>
<body>
    <h1>Ejemplo cadena con HEREDOC</h1>
    <?php
        $nombreProducto = "vitroceramica";
        $precio = 350;
        $marca = "Balay";
        $consumo = 4000;
        $eficienciaEnergetica = "A";
        $productoLimpiez = "Vitroclean";
        $numFogones = 4;
        // imprimimos los datos
        echo <<<FICHA
        <div class = 'formato'>
            <h2>···Ficha··············</h2>
            <p><span>·  Producto:</span>$nombreProducto</p>
            <p><span>·  Marca:</span>$marca</p>
            <p><span>·  Nº Fogones:</span>$numFogones</p>
            <p><span>·  Producto Limpieza recomendado:</span>$productoLimpiez</p>
            <p><span>·  Eficiencia Energetica:</span>$eficienciaEnergetica</p>
            <p><span>·  Consumo:</span>$consumo</p>
            <p><span>· Precio:</span>$precio</p>
            <!-- La etiqueta <pre> me permite utilizar espacios y tabulaciones sin ningun limite -->
            <pre> 
                    Marca·······$marca
                    Producto····$nombreProducto
                    Precio······$precio
            </pre>
        </div>
        FICHA;
    ?>
</body>
</html>
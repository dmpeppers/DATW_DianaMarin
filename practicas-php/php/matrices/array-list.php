<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-list</title>
</head>
<body>
    <h1>Ejemplos de como usar arrays</h1>
    <?php
        echo '<h2>Funcion list()</h2>';
        $elementos = ['Ordenador', 'Impresora', 'Movil'];
        list($elemento1, $elemento2, $elemento3) = $elementos;
        echo "El Valor del \$elemento3 es $elemento3";
        echo '<p>---------------------------------------------------------------</p>';
        
        $elementos = range(1,10);
        echo '<pre>';
            var_dump($elementos);
        echo '<pre>';
        echo '<p>---------------------------------------------------------------</p>';

        $array1 = [12, 14, 34, 4, 22];
        $array2 = ['a', 'b', 'c','d'];
        $array3 = array_merge($array1, $array2);
        foreach($array3 as $indice => $valor){
            echo $indice.'=>'.$valor.'<br>';
        }
    ?>
</body>
</html>
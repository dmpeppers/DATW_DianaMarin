
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenacion de matrices</title>
    <style>
        body{
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <h1>ORDENACION DE MATRICES</h1>
    <h2>Asort : funcion para ordenar un array y mantiene la asociacion de indices</h2>
    <h3>Ordena integers de menor a mayor</h3>
    <?php
        $lista_numeros_pares = array(18,12,14,2,8,10,16,20,4,6);
        // el metodo asort ordena de menor a mayor
        asort($lista_numeros_pares);
        foreach($lista_numeros_pares as $valor){
            echo $valor.'<br>';
        }
        echo "<h3>Ordena tambien strings</h3>";
        $letras = ['z', 'y', 'm', 'b', 'q','c','a'];
        asort($letras);
        foreach($letras as $valor){
            echo $valor.'<br>';
        }
    ?>
    <h2>Arsort- funcion para ordenar un array en orden inverso y mantiene la asociacion de indices</h2>
    <h3>Ordena ordena mayor a menor</h3>
    <?php
        $lista_numeros_pares = array(18,12,14,2,8,10,16,20,4,6);
        arsort($lista_numeros_pares);
        foreach($lista_numeros_pares as $valor){
            echo $valor.'<br>';
        }
    ?>
    <h2>Ksort —funcion que Ordena un array por clave, manteniendo la correlación entre la clave y los datos</h2>
    <h3>Ordena un array por clave</h3>
    <?php
        $objetos = [ 3=> 'mesa', 6=> 'silla', 5=> 'jardin', 1=>'ordenador', 7=>'impresora'];
        ksort($objetos);
        foreach($objetos as $key => $valor){
            echo "$key -> $valor<br>";
        }
    ?>
    <h2>Shuffle -Esta función mezcla un array (crea un orden aleatorio de sus elementos)</h2>
    <h3>Desordena el array</h3>
    <?php
    $lista_numeros_impares = [1,3,5,7,9,11,13,15,17,19];
    shuffle($lista_numeros_impares);
    foreach($lista_numeros_impares as $valor){
        echo $valor.'<br>';
    }
    ?>
    <h2>Natsort - Ordena un array usando un algoritmo de "orden natural"</h2>
    <h3> ordena las cadenas alfanuméricas en la manera en que lo haría un humano mientras mantiene las asociaciones de clave/valor.</h3>
    <?php
    $elementos = ['elemento 1','elemento 20', 'elemento 3', 'elemento 4', 'elemento 2', 'elemento 5','elemento 6', 'elemento 10',];
    natsort($elementos);
    foreach($elementos as $valor){
        echo $valor.'<br>';
    }
    ?>
    <h2>Natcasesort — Ordenar un array usando un algoritmo de "orden natural" insensible a mayúsculas-minúsculas</h2>
    <h3>Ordenacion con mayusculas y minusculas</h3>
    <?php
    $cosas = ['CASA', 'coche', 'MUÑECO', 'Muñeca', 'Lavadora', 'secador'];
    natcasesort($cosas);
    foreach($cosas as $valor){
        echo $valor.'<br>';
    }
    ?>
</body>
</html>
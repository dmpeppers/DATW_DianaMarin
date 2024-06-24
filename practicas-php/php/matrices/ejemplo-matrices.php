<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>
    <style>
        img{
            width: 50px;
            padding: 10px;
        }
        table{
            border: 2px solid black;
            border-collapse: collapse;
        }
        th{
            background-color: black;
            color: white;
        }
        td, th {
            border: 1px solid black;
            width: 100px; 
            padding: 5px;     
        }
        tr:nth-child(even){
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1>Ejemplos con array</h1>
    <?php
    // declaramos arrays
        echo "<h2>Numeros pares</h2>";
        $lista_numeros_pares = array(2,4,6,8,10,12,14,16,18,20);
        for($i =0; $i < count($lista_numeros_pares); $i++){
            echo $lista_numeros_pares[$i]. ' ';
        }
        echo "<h2>Numeros impares</h2>";
        $lista_numeros_impares = [1,3,5,7,9,11,13,15,17,19];
        foreach($lista_numeros_impares as $valor){
            echo $valor.'<br>';
        }
        $dias_semana = ['domingo' ,'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
        $meses_anyo = ["enero", "febrero", "marzo", "abril", "mayo"];
        echo "<h2>Ejemplo Key para acceder al indice</h2>";
        // => key para acceder al indice====estructura:  indice => valor
        $clave_valor = [1=>50, 2=>100, 3=>150, 4=>200];
        echo "<p>$clave_valor[3] </p>";
        // uso del foreach en un array php
        $productos = ["neumaticos"=>22, "aceite"=>14, "bujias" => 7, "linterna-led" =>100];
        foreach($productos as $valor){
            echo "<p>$valor</p>";
        }
        echo "<h2>Ejemplo Key para acceder al indice con Imagenes</h2>";
        $imagenes = ['neumatico'=> "../../img/productos/neumatico.jpg", 'aceite' => "../../img/productos/aceite.jpg", 'bujia' => "../../img/productos/bujia.jpg", 'linterna' => "../../img/productos/linterna.jpg"];
        foreach($imagenes as $clave => $valor){
            echo "<img src='$valor' alt='$clave'>";
        }
        echo "<h2>Ejemplo array 2 dimensiones</h2>";
        // array de dos dimenciones, algunos los denominan tabla
        $precio_bluray = [
                ['La Comunidad del Anillo', 22, 'Primera parte del Señor de los anillos'],
                ['Dune', 25, 'Peña pegandose por el planeta Arrakis y su producto estrella'],
                ['Solo para sus ojos', 12, 'James Bond dandolo todo'],
                ['Octopussy', 14, 'James Bond sigue dandolo todo'],
                ['Galactica(La pelicula)', 10, 'Las doce tribus buscando la tribu 13']
        ];
        // para imprimir es siempre [filas][columnas]
        echo "<p>{$precio_bluray[1][0]}</p>";
        echo "<p>{$precio_bluray[1][1]}</p>";
        echo "<p>{$precio_bluray[1][2]}</p>";
        echo "<p>{$precio_bluray[3][0]}  {$precio_bluray[3][1]} {$precio_bluray[3][2]}</p>";
        echo "<p>{$precio_bluray[3][2]}</p>";

        // mostrar en pantalla el array $precio_bluray
        foreach($precio_bluray as $bluray){
            foreach($bluray as $datos){
                echo "$datos <br>";
            }
            echo "<p>-------------</p>";
        }
        echo "<h2>Ejemplo array con tabla</h2>";
        $canciones =[
            ['Waterloo', 1973, 'ABBA'],
            ['Yellow Submarine', 1966, 'The Beatles'],
            ['Tractor amarillo', 1992, 'Zapato Veloz'],
            ['Opa', 2006, 'El Koala']
            ];
        foreach($canciones as $data){
            $titulo = $data[0];
            $anyo = $data[1];
            $artista = $data[2];
            echo "<p>$titulo, $anyo, $artista </p>";
        }
        // enviar datos de canciones a tabla
    ?>
        <h2>Tabla de Canciones</h2>
        <table>
            <tr>
                <th>Titulo de la Cancion</th>
                <th>Año de album</th>
                <th>Artista</th>
            </tr>
    <?php
        foreach($canciones as $data){
            $titulo = $data[0];
            $anyo = $data[1];
            $artista = $data[2];
                echo<<< LINEA
                    <tr>
                        <td>$titulo</td>
                        <td>$anyo</td>
                        <td>$artista</td>
                    </tr> 
                    LINEA;
        }
    ?>
</body>
</html>
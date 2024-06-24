<?php
    // llamar las variables y constantes estan en la ficha constantes-variables.php
    require_once('constantes-variables.php');
    // comprobacion
    $cantidad_productos = $neumaticos + $aceite + $bujias;
    if($cantidad_productos == 0){
        echo "<p>Productos en la cesta: $cantidad_productos </p>";
        echo '<p><a href=\'ejercicio-formulario.html\'>Volver al formulario de pedido </a></p>';
        exit;
    }
    // calculo de pedido
    $suma_total_neumatico = $neumaticos * NEUMATICO;
    $suma_total_latasaceite = $aceite * ACEITE;
    $suma_total_bujias = $bujias * BUJIAS;
    // calculo de total sin iva
    $suma_total_pedido = $suma_total_neumatico + $suma_total_latasaceite + $suma_total_bujias;
    // calculo de iva
    $suma_total_con_iva = $suma_total_pedido * IVA_GENERAL;
    // Calculo total con iva
    $precio_total_iva = $suma_total_pedido + $suma_total_con_iva;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de pedido ejercicio formulario</title>
</head>
<body>
    <h1>Captura de pedido ejercicio formulario</h1>
    <?php
        
        //Escribir los totales
        echo "<p>Nombre: $nombre Apellidos: $apellidos</p>";
        echo "<p>Direccio: $direccion Codigo Postal: $codigopostal</p>";
        echo "<p>Cantidad de productos: $cantidad_productos</p>";
        echo "<p>Precio sin IVA: $suma_total_pedido €</p>";
        echo "<p>Total IVA: $suma_total_con_iva €</p>";
        echo "<p>Precio total a pagar: $precio_total_iva €</p>";
        // abrir el fichero y crear si no existe
        @$fp = fopen('ficherosformulariopedido/ejercicioformulario.txt', 'ab');
        if($fp){
            echo'<p>FICHERO ABIERTO------------------------------</p>';
        } else{
            echo'<p>error al abrir o crear el fichero</p>';
        }
        // escribir en el fichero
        $datos = "\n $nombre \t $apellidos \t $direccion \t $localidad \t $codigopostal \t $ccaa \t 
            Neumaticos: $neumaticos \t Aceite:  $aceite \t Bujias: $bujias \t 
            Encuesta: $encuesta \t Comentario:  $comentario \t Revista: $revista \t
            Precio total a pagar: $precio_total_iva €\n";
        
        fwrite($fp, $datos);
        // abrir para leer el fichero
        $fp = fopen('ficherosformulariopedido/ejercicioformulario.txt', 'rb');
        // leer el fichero
        while(!feof($fp)) {
            $pedido = fgets($fp);
            echo htmlspecialchars($pedido).'<br>';
        }
        // cierro la coneccion
        fclose($fp);
        ?>
</body>
</html>
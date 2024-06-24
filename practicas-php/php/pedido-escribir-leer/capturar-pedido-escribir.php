<?php
    $fecha = date('d/m/Y');
    // captura de datos
    $neumaticos = $_REQUEST["neumaticos"];
    $latasaceite = $_REQUEST["latas-aceite"];
    $bujias = $_REQUEST["bujias"];
    $envio = $_REQUEST["envio"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura pedido</title>
</head>
<body>
    <?php
    //1. abrir fichero. crear si no existe
    $fichero = @fopen('fichero-pedidos/pedidos.txt', 'ab');
    if($fichero){
        echo'<p>fichero abierto</p>';
    } else{
        echo'<p>error al abrir o crear el fichero</p>';
    }

    // 2. Escribir pedido
    $escribir_pedido = "$fecha \t neumatico $neumaticos \t aceite $latasaceite \t bujias $bujias \t Direccion $envio \n";
    fwrite($fichero,$escribir_pedido);

    // 3. cerrar fichero
    fclose($fichero);
    ?>
</body>
</html>
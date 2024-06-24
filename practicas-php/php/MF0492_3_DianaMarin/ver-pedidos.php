<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver pedidos</title>
</head>
<body>
    <h1>Ver pedido de Cosmeticos Kiehl's</h1>
    <?php
        $fichero = @fopen("pedidos_cosmeticos/pedidos_cosmeticos.txt", "rb");
        if($fichero){
            echo'<p><strong>ARCHIVO ABIERTO CON EXITO</strong></p>';
        } else {
            echo'<p><strong>PORFAVOR, INTENTAR MAS TARDE</strong></p>';
        }
        while(!feof($fichero)){
            $pedido = fgets($fichero); 
            echo nl2br(htmlspecialchars($pedido));
        }
    ?>
</body>
</html>
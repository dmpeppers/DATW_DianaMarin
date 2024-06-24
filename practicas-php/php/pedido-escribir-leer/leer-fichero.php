<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos ficheros</title>
</head>
<body>
    <h1>Pedidos recambios mentiona</h1>
    <?php
    // 1. Abrir fichero
        $fichero = @fopen("ficheros-pedidos/pedidos.txt", "rb");
    // mensaje en caso de error
    if($fichero){
        echo'<p><strong>ARCHIVO ABIERTO CON EXITO</strong></p>';
    } else {
        echo'<p><strong>PORFAVOR, INTENTAR MAS TARDE</strong></p>';
    }
    // 2. Leer fichero
    // feof sig ifica file end of file (Algo asi como: final del archivo del archibo)
    // feof devuelve TURE si el controlador de archivo se encuentra al final del archivo
    while(!feof($fichero)){
        $pedido = fgets($fichero); //fgets lee, linea a linea un archivo. leera hasta que encuentre un nuevo caracter de linea o eof
        echo htmlspecialchars($pedido);
    }
    ?>
</body>
</html>
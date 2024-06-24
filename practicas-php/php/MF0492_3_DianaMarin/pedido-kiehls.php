<?php
    // procesar el pedido
    $fecha = date('d/m/Y');
    // declaracion de constantes
    define('IVA_21', 0.21);
    define('FACIALFUEL', 32);
    define('EFACEWASH', 25);
    define('ETONICMEN', 18);
    define('ULTIMATEMANBODY', 16);
    // captura de datos
    $facialFuel = $_REQUEST["facialFuel"];
    $energizingFaceWash = $_REQUEST["energizingFaceWash"];
    $energizingTonicMen = $_REQUEST["energizingTonicMen"];
    $ultimateManBodyScrub = $_REQUEST["ultimateManBodyScrub"];
    $telefono = $_REQUEST["telefono"];
    $direccion = $_REQUEST["direccion"];

    // procesar pedido
    $cantidad_productos = $facialFuel + $energizingFaceWash + $energizingTonicMen + $ultimateManBodyScrub;
    // condicion de pedido
    if($cantidad_productos == 0){
        echo "<p>Productos en la cesta: $cantidad_productos </p>";
        echo '<p><a href=\'formulario-compra.html\'>Volver al formulario de pedido </a></p>';
        exit;
    }

    // calculo de totales del pedido por producto
    $suma_total_facialfuel = $facialFuel * FACIALFUEL;
    $suma_total_enerFaceWash = $energizingFaceWash * EFACEWASH;
    $suma_total_enerTonicMen = $energizingTonicMen * ETONICMEN;
    $suma_total_ultimateManBody = $ultimateManBodyScrub * ULTIMATEMANBODY;

    // calculo total sin iva
    $suma_total_sin_IVA = $suma_total_facialfuel + $suma_total_enerFaceWash + $suma_total_enerTonicMen + $suma_total_ultimateManBody;
    
    // calculo de iva
    $calculoIVA = $suma_total_sin_IVA * IVA_21;

    // calculo total con IVA
    $suma_total_CON_IVA = $suma_total_sin_IVA + $calculoIVA;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de datos pedido</title>
    <style>
        body{
            font-family: arial;
            padding: 10px
        }
        #pedido{
            width: 500px;
            background-color: #aaa;
            border: 4px solid black;
            border-radius : 10px;
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
</head>
<body>
    <h1>Captura de pedido Cosméticos Kiehl's</h1>
    <!-- se muestra los totales -->
    <h2>Datos Capturados</h2>
    <section id="pedido">
        <p><strong>Fecha de solicitud:  </strong><?=$fecha?></p>
        <p><strong>Telefono de contacto:  </strong><?=$telefono?></p>
        <p><strong>Direccion de envio:  </strong><?=$direccion?></p>
        <h3>Pedido</h3>
        <p><strong>Total de Productos:  </strong><?=$cantidad_productos?> unidades</p>
        <p><strong>Cantidad de Facial Fuel:  </strong><?=$facialFuel?></p>
        <p><strong>Total producto:  </strong><?=$suma_total_facialfuel?> €</p>
        <p><strong>Cantidad de Energizing Face Wash:  </strong><?=$energizingFaceWash?></p>
        <p><strong>Total producto:  </strong><?=$suma_total_enerFaceWash?> €</p>
        <p><strong>Cantidad de Energizing Tonic for men:  </strong><?=$energizingTonicMen?></p>
        <p><strong>Total producto:  </strong><?=$suma_total_enerTonicMen?> €</p>
        <p><strong>Cantidad de Ultimate Man Body Scrub:  </strong><?=$ultimateManBodyScrub?></p>
        <p><strong>Total producto:  </strong><?=$suma_total_ultimateManBody?> €</p>
        <h3>Total</h3>
        <p><strong>Total sin IVA:  </strong><?=$suma_total_sin_IVA?> €</p>
        <p><strong>IVA(21%):  </strong><?=$calculoIVA?> €</p>
        <p><strong>Total con IVA:  </strong><?=$suma_total_CON_IVA?> €</p>
    </section>
    <?php
        // se escribe en el fichero
        $fichero = @fopen('pedidos_cosmeticos/pedidos_cosmeticos.txt', 'ab');
        if($fichero){
        } else{
            echo'<p>error al abrir o crear el fichero</p>';
        }
        // Escribir en el pedido
        $escribir_pedido = "\n Fecha: $fecha \n
        Telefono de contacto: $telefono\n
        Direccion envio: $direccion\n
        Pedido: ---------------------------- \n
        Producto \t Cantidad \tTotal\n
        Facial Fuel\t\t$facialFuel\t$suma_total_facialfuel €\n
        E. Face Wash\t\t$energizingFaceWash\t$suma_total_enerFaceWash €\n
        E. Tonic for men\t$energizingTonicMen\t$suma_total_enerTonicMen €\n
        U.Man Body Scrub\t$ultimateManBodyScrub\t $suma_total_ultimateManBody €\n
        Numero total de productos:-------$cantidad_productos \n
        Total: ----------------------------- \n
        Total sin IVA: \t $suma_total_sin_IVA €\n
        IVA del 21%: \t $calculoIVA €\n
        Total con IVA: \t $suma_total_CON_IVA €\n";

        fwrite($fichero, $escribir_pedido);
        // cerrar fichero
        fclose($fichero);
    ?>
    <button onclick="location.href='ver-pedidos.php'">Ver pedidos</button>
</body>
</html>
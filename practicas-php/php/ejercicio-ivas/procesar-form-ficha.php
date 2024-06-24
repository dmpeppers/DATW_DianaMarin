<?php
    // constantes
    define("SEPARADOR","<p>==============================</p>");
    define("IVA21", 0.21);
    define("IVA4", 0.04);
    define("IVA10", 0.1);
    define("IMPRESORA", 50);
    define("MOVIL", 350);
    define("TABLETA", 400);
    // captura de los datos del formulario
    $nombre = $_REQUEST["nombre"];
    $apellidos = $_REQUEST["apellidos"];
    $direccion = $_REQUEST["direccion"];
    $localidad = $_REQUEST["localidad"];
    $autonomiasEsp = $_REQUEST["autonomiasEsp"];
    $fechaNacimiento = $_REQUEST["fechaNacimiento"];
    $numImpresora = $_REQUEST["impresora"];
    $numMovil = $_REQUEST["movil"];
    $numTableta = $_REQUEST["tableta"];

    // validacion comunidad autonoma
    if($autonomiasEsp === ""){
        echo "<p>No ha seleccionado una comunidad autonoma.</p>";
        echo "<a href='form-ficha.html'>Volver</a>";
        exit;
    };
    // validacion de compra
    if($numImpresora <= 0 && $numMovil <= 0 && $numTableta <= 0){
        echo "<p>No haz hecho ninguna compra</p>";
        echo "<a href='form-ficha.html'>Volver</a>";
        exit;
    };
    
    // pedido
    $pedido = [$numImpresora, $numMovil, $numTableta];

    // TOTAL DE PRODUCTOS
    $totalProductos = $numImpresora + $numMovil + $numTableta;

    // TOTALES SIN IVA
    $totaImpresorasSin = $numImpresora * IMPRESORA;
    $totalMovilSin = $numMovil * MOVIL;
    $totalTabletaSin = $numTableta * TABLETA;
    // Cálculo IVA (21%)
    $ivaImpresoras = $totaImpresorasSin * IVA21;
    $ivaMoviles = $totalMovilSin * IVA21;
    $ivaTableta = $totalTabletaSin * IVA21;
    // Cálculo Total CON IVA
    $totalImpresorasCon = $totaImpresorasSin + $ivaImpresoras;
    $totalMovilesCon = $totalMovilSin + $ivaMoviles;
    $totalTabletasCon = $totalTabletaSin + $ivaTableta;

    // precio final
    $total = $totalImpresorasCon + $totalMovilesCon + $totalTabletasCon;
    // descuentos moviles 20% de 10a 20
    if($numMovil <=20 && $numMovil >=10){
        $descuento20movil = $totalMovilesCon * 0.2;
        $totalDescuentoMovil = $totalMovilesCon - $descuento20movil;
    };
    // descuentos tabletas 10% de 5 a 10
    if($numTableta <=10 && $numTableta >=5){
        $descuento10tableta = $totalTabletasCon * 0.1;
        $totalDescuentoTableta = $totalTabletasCon - $descuento10tableta;
    };
    // descuentos impresora 5% de 5 a 3
    if($numImpresora <=5 && $numImpresora >=3){
        $descuento5impresora = $totalImpresorasCon * 0.05;
        $totalDescuentoImpresora = $totalImpresorasCon - $descuento5impresora;
    };
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura y visualizacion de datos</title>
    <style>
        body{
            font-family: arial;
            padding: 10px
        }
        .formato{
            width: 500px;
            background-color: #eee;
            border: 4px solid rgb(200,200,200);
            border-radius : 10px;
            padding-left: 30px;
            padding-right: 30px;
        }
        span{
            font-weight:bold;
        }
        #pedido{
            width: 500px;
            background-color: #aaa;
            border: 4px solid black;
            border-radius : 10px;
            padding-left: 30px;
            padding-right: 30px;
        }
        .total{
            font-weight:bold;
            font-size: 1.5em;
        }
        table{
            border: 2px solid black;
            border-collapse: collapse;
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
    <h1>Datos Capturados Mostrados de  Formas</h1>
    <h2>Datos capturados - echo</h2>
    <?php
        // imprimir el formulario
        echo "<p>Nombre : $nombre </p>";
        echo "<p>Apellidos : $apellidos  </p>";
        echo "<p>Direccion : $direccion </p>";
        echo "<p>Localidad : $localidad </p>";
        echo "<p>Comunidad autonoma : $autonomiasEsp </p>";
        echo "<p>Fecha nacimiento : $fechaNacimiento </p>";
        echo SEPARADOR;
        echo "Numero total de productos : $totalProductos";
        echo SEPARADOR;
        // otra forma de imprimir los datos
        echo <<<FICHA
        <div class= 'formato'>
        <h2>Datos capturados - HEREDOC</h2>
        <h2>···Ficha con HEREDOC··············</h2>
        <p><span>·  Nombre:</span>  $nombre</p>
        <p><span>·  Apellidos: </span>  $apellidos</p>
        <p><span>·  Direccion: </span>  $direccion</p>
        <p><span>·  Localidad: </span>  $localidad</p>
        <p><span>·  Comunidad autonoma: </span>  $autonomiasEsp</p>
        <p><span>·  Fecha nacimiento: </span>  $fechaNacimiento</p>
        <p><span>· Precio Impresoras:</span>  $numImpresora</p>
            <pre>
                Total sin IVA··········$totaImpresorasSin
                IVA····················$ivaImpresoras
                Total con IVA··········$totalImpresorasCon
            </pre>  
        </div>
        FICHA;
     ?>
    <section id="pedido">
        <article>
            <h2>Datos Capturados - formato HTML</h2>
            <p><strong>Nombre: </strong> <?= $nombre?> </p>
            <p><strong>Apellidos: </strong><?= $apellidos?></p>
            <p><strong>Direccion: </strong><?= $direccion?></p>
            <p><strong>Localidad: </strong><?= $localidad?></p>
            <p><strong>Comunidad Autonoma: </strong><?= $autonomiasEsp?></p>
            <p><strong>Fecha Nacimiento:  </strong><?= $fechaNacimiento?></p>
            <p>Fecha pedido:  <?= date("d/m/Y")?></p>
            <!-- imprimir impresoras totales -->
            <?php 
                if($numImpresora >0 && $numImpresora<3 || $numImpresora>5){
            ?>
                <h3>Impresoras:  <?= $numImpresora?></h3>
                <p>Precio sin IVA:  <?= $totaImpresorasSin?> €</p>
                <p>IVA:  <?= $ivaImpresoras?> €</p>
                <p>Precio con IVA:  <?= $totalImpresorasCon?> €</p>
            <?php  
                }
            ?>
            <?php 
                if($numImpresora >=3 && $numImpresora <= 5){
            ?>
                <h3>Impresoras:  <?= $numImpresora?></h3>
                <p>Precio sin IVA:  <?= $totaImpresorasSin?> €</p>
                <p>IVA:  <?= $ivaImpresoras?> €</p>
                <p>Precio con IVA:  <?= $totalImpresorasCon?> €</p>
                <p>Descuento del 5%:  <?= $descuento5impresora?> €</p>
                <p>Precio Total con Descuento:  <?= $totalDescuentoImpresora?> €</p>
            <?php  
                }
            ?>
            <!-- imprimir moviles totales -->
            <?php 
                if($numMovil >0 && $numMovil <10 || $numMovil>20){
            ?>
            <h3>Moviles:  <?= $numMovil?></h3>
            <p>Precio sin IVA:  <?= $totalMovilSin?> €</p>
            <p>IVA:  <?= $ivaMoviles?> €</p>
            <p>Precio con IVA:  <?= $totalMovilesCon?> €</p>
            <?php  
                }
            ?>
            <?php 
                if($numMovil >=10 && $numMovil <=20){
            ?>
            <h3>Moviles:  <?= $numMovil?></h3>
            <p>Precio sin IVA:  <?= $totalMovilSin?> €</p>
            <p>IVA:  <?= $ivaMoviles?> €</p>
            <p>Precio con IVA:  <?= $totalMovilesCon?> €</p>
            <p>Descuento del 20%:  <?= $descuento20movil?> €</p>
            <p>Precio Total con Descuento:  <?= $totalDescuentoMovil?> €</p>
            <?php  
                }
            ?>
            <!-- imprimir tabletas totales -->
            <?php 
                if($numTableta>0 && $numTableta<5 || $numTableta>10){
            ?>
            <h3>Tabletas:  <?= $numTableta?></h3>
            <p>Precio sin IVA:  <?= $totalTabletaSin?> €</p>
            <p>IVA:  <?= $ivaTableta?> €</p>
            <p>Precio con IVA:  <?= $totalTabletasCon?> €</p>
            <?php  
                }
            ?>

            <?php 
                if($numTableta >=5 && $numTableta <=10){
            ?>
            <h3>Tabletas:  <?= $numTableta?></h3>
            <p>Precio sin IVA:  <?= $totalTabletaSin?> €</p>
            <p>IVA:  <?= $ivaTableta?> €</p>
            <p>Precio con IVA:  <?= $totalTabletasCon?> €</p>
            <p>Descuento del 10%:  <?= $descuento10tableta?> €</p>
            <p>Precio Total con Descuento:  <?= $totalDescuentoTableta?> €</p>
            <?php  
                }
            ?>
        <p class="total">Total del pedido:  <?= number_format($total,2 ,"," ,".")?>€</p>
        </article>
    </section>
    <!-- crear tabla distancia(50) y coste(5) con un bucle for -->
    <section id="gastos-envio">
        <h2>Gastos de envio</h2>
        <table>
        <tr>
            <th>Distancia</th>
            <th>Coste</th>
        </tr>
        <!-- para concatenar cadenas en php se usa .(). 
    ejemplo echo '<td>' .($distancia/10). '</td>'-->
            <?php
                    
                for($distancia = 50; $distancia <=1000; $distancia += 50){
                    $coste = $distancia /10;
                    echo<<< LINEAS
                    <tr>
                        <td>$distancia</td>
                        <td>$coste €</td>
                    </tr>
                    LINEAS;
                }
            ?>
        </table>
    </section>
</body>
</html>
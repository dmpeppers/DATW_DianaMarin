<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ejecucion</title>
</head>
<body>
    <h2>Salida 1</h2>
    <!-- comillas inclinadas `` para ejecutar programas del sistema, para este nos permite acceder al fichero del sistema del directorio actual "para ejecutar comandos del sistema"-->
    <?php
        $archivosDirectorioActual = `dir`;
        echo "<pre>";
        echo $archivosDirectorioActual;
        echo "</pre>";

    ?>
    <h2>Salida 2</h2>
    <?php
        $configuracionRed = `ipconfig`;
        echo <<<SALIDA
            <pre>
            $configuracionRed
            </pre>
        SALIDA;
    ?>
    <h2>Salida 3 con &lt; pre &gt;</h2>
    <?php
        echo "<pre>
            HOTEL 1 ················30€
            HOTEL 2 ················50€
            HOTEL 3 ················200€
        </pre>";
    ?>
    <!-- php con html incrustado44red -->
    <h2>Salida 4</h2>
    <?php
        $objeto1 = "Sombrilla";
        $objeto2 = "Hamaca";
    ?>
    <p><?= $objeto1?></p>
    <p><?= $objeto2?></p>
</body>
</html>
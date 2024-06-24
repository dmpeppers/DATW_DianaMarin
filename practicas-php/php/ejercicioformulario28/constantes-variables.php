<?php
    // declaracion de constantes
    $fecha = date('d/m/Y');
    define('IVA_GENERAL', 0.21);
    define('NEUMATICO',100);
    define('ACEITE',25);
    define('BUJIAS',1);
    // captura de datos
    $nombre = $_REQUEST["nombre_usuario"];
    $apellidos = $_REQUEST["apellidos"];
    $direccion = $_REQUEST["direccion"];
    $codigopostal = $_REQUEST["cp"];
    $localidad = $_REQUEST["localidad"];
    $ccaa = $_REQUEST["ccaa"];
    // captura de pedidos
    $neumaticos = $_REQUEST["neumaticos"];
    $aceite = $_REQUEST["aceite"];
    $bujias = $_REQUEST["bujias"];
    // captura de encuesta
    $encuesta = $_REQUEST["encuesta"];
    $comentario = $_REQUEST["comentario"];
    $revista = $_REQUEST["revista"];
?>
<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $pass = '';
    $bd = 'BD_ACADEMIA';
    $conexion = new mysqli($servidor,$usuario,$pass,$bd);
    if(!$conexion->connect_errno){
        echo "<p class='encendido'>CONEXION COMPLETA</p>";
    }
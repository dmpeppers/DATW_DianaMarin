<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $pass = '';
    $bd = 'libreria';
    $conexion = new mysqli($servidor, $usuario, $pass, $bd);
    // echo "<p>si funciona";
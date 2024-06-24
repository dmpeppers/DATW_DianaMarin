<?php
    if($conexion->close()){
        echo "<p class='apagado'>CERRADA CORRECTAMENTE</p>";
    }
    else{
        echo "<p class='encendido'>PERMANECE ABIERTA</p>";
    }
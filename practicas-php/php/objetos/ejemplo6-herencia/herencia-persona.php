<?php
    class Persona{
        public string $nombre;
        public string $apellido1;
        public string $apellido2;

        function nombreCompleto($nombre, $apellido1, $apellido2) {
            echo "<p>{$this->nombre}{$this->apellido1}{$this->apellido2}</p>";
        }
    }
    class Persona2 extends Persona{
        function nombreCompleto($nombre, $apellido1, $apellido2)
        {
            
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia- Persona</title>
</head>
<body>
    
</body>
</html>
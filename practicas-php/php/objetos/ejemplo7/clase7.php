<?php
    class A{
        private $nombre;
        private $apellido1;
        private $apellido2;
        private $localidad;
        // te permite dar acceso a todas las variables que se encuentran privadas
        function __set($propiedad, $valor)
        {
            $this->$propiedad= $valor;
        }
        function __get($propiedad)
        {
            return $this->$propiedad;
        }
        public function mostrarNombreCompleto() {
            echo "Nombre completo: $this->nombre $this->apellido1 $this->apellido2 <br>";
            echo "Localidad: $this->localidad";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 7 _set y _get </title>
</head>
<body>
    <h1>Ejemplo 7 _set y _get </h1>
    <?php
        // instanciamos objetos de la clase A
        $usuario1 = new A;
        $usuario1->nombre = "Juan";
        $usuario1->apellido1 = "Garcia";
        $usuario1->apellido2 = "Martinez";
        $usuario1->localidad = "Gijon";

        $usuario1->mostrarNombreCompleto();

        echo "<p>".$usuario1->__get('apellido1')."</p>";

    ?>
</body>
</html>
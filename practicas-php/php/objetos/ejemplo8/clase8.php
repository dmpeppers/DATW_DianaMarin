<?php
    class A {
        public $nombre;
        public $apellido1;
        public $apellido2;

        public function mostrarDatosUsuario(){
            echo "<div>";
            echo __CLASS__;
            echo "<p class='destacado'>Nombre completo: $this->nombre $this->apellido1 $this->apellido2</p>";
            echo "</div>";
        }
    }
    class B extends A{
        public $edad;

        public function mostrarDatosUsuario()
        {
            echo "<div>";
            // parent::mostrarDatosUsuario();
            A::mostrarDatosUsuario();
            echo __CLASS__;
            echo "<p>Edad: $this->edad</p>";
            echo "</div>";
        }
    }
    class C extends B{
        public $localidad;
        public $comunidadAutonoma;
        public function mostrarDatosUsuario(){
            echo "<div>";
            B::mostrarDatosUsuario();
            echo __CLASS__;
            echo "<p>Localidad: $this->localidad</p>";
            echo "<p>Comunidad Autonoma: $this->comunidadAutonoma</p>";
            echo "</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 8</title>
    <style>
        body{
            margin-left: 10px;
            margin-right: 10px;

        }
        div {
            width: 80%;
            border: 4px solid rgb(200, 200, 200);
            background-color: #eee;
            padding: 5px;
            margin-bottom: 5px;
        }
        .destacado{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Herencia</h1>
    <?php
        $usuario1 = new B;
        $usuario1->nombre = "Maria";
        $usuario1->apellido1 = "Martinez";
        $usuario1->apellido2 = "Fernandez";
        $usuario1->edad= 23;
        $usuario1->mostrarDatosUsuario();

        $usuario2 = new A;
        $usuario2->nombre = "Joaquin";
        $usuario2->apellido1 = "Lopez";
        $usuario2->apellido2 = "Camps";
        $usuario2->edad = 33;
        $usuario2->mostrarDatosUsuario();

        $usuario3 = new C;
        $usuario3->nombre= "Marta";
        $usuario3->apellido1 = "Rodriguez";
        $usuario3->apellido2 = "Iglesias";
        $usuario3->edad = 48;
        $usuario3->localidad = "Gijon";
        $usuario3->comunidadAutonoma = "Principado de Asturias";
        $usuario3->mostrarDatosUsuario();

    ?>
</body>
</html>
<?php
    class A{
        private $nombre;
        private $apellidos;
        function __set($propiedad, $valor){
            $this->$propiedad = $valor;
        }
        function __get($name)
        {
            return $this->$name;
        }
        private function mostrarNombreCompleto(){
            echo "<h2>Nombre Completo: $this->nombre $this->apellidos</h2>";
        }
        protected function operacion1(){
            echo "<p>Funcion operacion 1</p>";
        }
        protected function operacion2(){
            echo "<p>Funcion operacion 2</p>";
        }
        public function operacion3(){
            echo "<p>Funcion operacion 3</p>";
        }
    }
    class B extends A{
        function __construct()
        {
            $this->operacion1();
            $this->operacion2();
            $this->operacion3();
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 9 (private, protected)</title>
</head>
<body>
    <h1>Ejemplo 9 (private, protected)</h1>
    <?php
        // $objetoB = new B();
        $objetoA = new A;
        $objetoA->nombre = "Martin";
        $objetoA->apellidos = "Gonzales Pablos";

        echo "<p>{$objetoA->__get('nombre')}</p>";
        echo "<p>$objetoA->apellidos</p>";
    ?>
</body>
</html>
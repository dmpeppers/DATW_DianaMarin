<?php
    class A{
        // declaracion de atributos o propiedades CLASE A
        public $propiedad_A_1;
        public $propiedad_A_2;
        private $propiedad_A_3;

        // declaracion de metodos CLASE A
        public function setPropiedadA3($param_propiedad_A_3) {
            $this->propiedad_A_3 = $param_propiedad_A_3;
        }
        function getPropiedadA3(){
            return 
        }
        public function metodoA1($param){
            echo "<h2>metodoA1  -  Valor \$param: $param</h2>";
        }
        public function metodoA2() {
            echo "<h2>metodoA2</h2>";
        }
        public function metodoA3(){
            echo "<h2>metodoA3</h2>";
        }
    }

    class B{
        // declaracion de atributos o propiedades CLASE B
        public $propiedad_B_1;
        public $propiedad_B_2;
        public $propiedad_B_3;

        // declaracion de metodos CLASE A
        public function metodoB1($param){
            echo "<h2>metodoB1  -  Valor \$param: $param</h2>";
        }
        public function metodoB2() {
            echo "<h2>metodoB2</h2>";
        }
        public function metodoB3(){
            echo "<h2>metodoB3</h2>";
        }
    }
?>
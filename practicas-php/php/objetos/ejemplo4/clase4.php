<?php
    class Persona3{
        private $nombre;
        private $apellidos;
        private $dni;
        private $telefono;
        private $cp;
        private $fotografia;
        private $txtalternativo;
        // construir las variables para imprimir
        function __construct(string $parametro1, string $parametro2,string $parametro3, string $parametro4, string $parametro5)
        {
            $this->nombre = $parametro1;
            $this->apellidos = $parametro2;
            $this->dni = $parametro3;
            $this->fotografia = $parametro4;
            $this->txtalternativo = $parametro5;

        }
        // instancia para mostrar fotos
        // public function setFotografia() {
        //     return $this->fotografia;
        // }
        // public function getFotografia($fotografia){
        //     echo "<div><img src='../../img/fotos/{$this->fotografia}.jpg' alt=''></div>";
        // }
        // funcion de imprimir
        public function getNombre():string{
            return $this->nombre;
        }
        public function getApellidos():string{
            return $this->apellidos;
        }
        public function getDni():string{
            return $this->dni;
        }
        // mostrar datos de la persona en pantalla
        public function mostrarDatosPersona():void{
            $datos_persona = "<p style='font-family:arial; font-size:1.2em; font-weight:bold;'>$this->nombre $this->apellidos ($this->dni)</p><div><img src='../../../img/fotos/{$this->fotografia}.jpg' alt='{$this->txtalternativo}'></div>";       
            echo $datos_persona; 
        }
    }
?>
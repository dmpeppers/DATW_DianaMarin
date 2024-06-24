<?php
    class Persona2 {
        private $nombre;
        private $apellidos;
        private $dni;
        public $edad;
        private $cp;

        public function setNombre($nombre):void {
            $this->nombre = $nombre;
        }
        public function getNombre():string {
            return $this->nombre;
        }
        public function setApellidos($apellidos):void {
            $this->apellidos = $apellidos;
        }
        public function getApellidos():string {
            return $this->apellidos;
        }
        public function setDni($dni):void {
            $this->dni = $dni;
        }
        public function getDni():string {
            return $this->dni;
        }
        public function setEdad($edad):void {
            $this->edad = $edad;
        }
        public function getEdad():int {
            return $this->edad;
        }
        public function setCp(string $codigo_postal):void {
            $this->cp = $codigo_postal;
        }
        public function getCp():string {
            return $this->cp;
        }
        public function escribirNombreCompleto():string {
            $nombre_completo = $this->nombre.' '.$this->apellidos;
            // echo $nombre_completo;
            return $nombre_completo;
        }
    }
?>
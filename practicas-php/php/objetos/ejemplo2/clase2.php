<?php
    class Persona2 {
        private $nombre;
        private $apellidos;
        private $dni;
        public $edad;
        private $cp;
        // para declarar funciones o instancia que le pasas un parametro como medida de seguridad
        // funciones set para dar un valor a un atributo, get para recuperar un valor del atributo
        public function setNombre($nombre):void{
            // php usa la -> en vez del punto del javascript
            $this->nombre = $nombre;
        }
        public function getNombre():string{
            // si se quiere recuperar algo se coloca return
            return $this->nombre;
        }
        public function setApellidos($apellidos):void{
            $this->apellidos = $apellidos;
        }
        public function getApellidos():string{
            return $this->apellidos;
        }
        public function setDni($dni):void{
            $this->dni = $dni;
        }
        public function getDni():string{
            return $this->dni;
        }
        public function setEdad($edad):void {
            $this->edad = $edad;
        }
        public function getEdad():int{
            return $this->edad;
        }
        public function setcp(string $codigo_postal):void {
            $this->cp = $codigo_postal;
        }
        public function getcp():string{
            return $this->cp;
        }
        public function escribirNombreCompleto():string{
            $nombre_completo = $this->nombre.' '.$this->apellidos;
            return $nombre_completo;
        }
    }
?>
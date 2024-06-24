<?php
// convencion poner el nombre de la clase la primera letra en mayuscula 
// se esta declarando una clase que se llama persona con tres atributos, unaa especie de plantilla
    class Persona {
        public $nombre;
        public $apellidos;
        public $dni;
        // para declarar funciones o instancia que le pasas un parametro como medida de seguridad
        // funciones set para dar un valor a un atributo, get para recuperar un valor del atributo
        function setNombre($nombre){
            // php usa la -> en vez del punto del javascript
            $this->nombre = $nombre;
        }
        function getNombre(){
            // si se quiere recuperar algo se coloca return
            return $this->nombre;
        }
        function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        function getApellidos(){
            return $this->apellidos;
        }
        function setDni($dni){
            $this->dni = $dni;
        }
        function getDni(){
            return $this->dni;
        }
    }
// public que son accesibles dentro y fuera de la clase, privated o protected
?>
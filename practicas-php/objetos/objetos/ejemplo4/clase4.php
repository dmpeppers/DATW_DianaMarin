<?php
class Persona3
{
    private $nombre;
    private $apellidos;
    private $dni;
    private $telefono;
    private $cp;
    private $fotografia;
    private $texto_alternativo;

    function __construct(string $parametro1_nom, string $parametro2_ape, string $parametro3_dni, string $parametro4_foto, string $parametro5_alt)
    {
        $this->nombre = $parametro1_nom;
        $this->apellidos = $parametro2_ape;
        $this->dni = $parametro3_dni;
        $this->fotografia = $parametro4_foto;
        $this->texto_alternativo = $parametro5_alt;
    }

    public function getNombre():string {
        return $this->nombre;
    }
    public function getApellidos():string {
        return $this->apellidos;
    }
    public function getDni():string {
        return $this->dni;
    }
    /* public function setFotografia($foto) {
        $this->fotografia = $foto;
    }
    public function setTextoAlternativo($alt) {
        $this->texto_alternativo = $alt;
    }
    public function getFotografia() {
        echo "<div><img src='../../../img/fotos-carnet/{$this->fotografia}.jpg' alt='{$this->texto_alternativo}'></div>";
    } */
    // mostrar datos de la persona en pantalla
    public function mostrarDatosPersona():void {
        $datos_persona = "<p style='font-family:arial;font-size:1.2em;font-weight:bold;'><img src='../../../img/fotos-carnet/{$this->fotografia}.jpg' alt='{$this->texto_alternativo}' title='{$this->texto_alternativo}'><br>{$this->nombre} {$this->apellidos} ($this->dni)</p>";
       echo $datos_persona;
    }
}
<?php
class Vehiculo {
    private $tipo;
    private $marca;
    private $traccion;
    public $ruedas;
    private $color;

    function setTraccion($traccion) {
        switch($traccion) {
            case "animal":
                $this->traccion = $traccion;
                break;
            case "mecanica":
                $this->traccion = $traccion;
                break;
            default:
                $this->traccion = "Tracción no válida";
                echo "<p><strong>LA TRACCION $traccion NO VÁLIDA</strong></p>";
        }
    }
    function getTraccion() {
        return $this->traccion;
    }
    public function setColor(string $parametro):void {
        $this->color = $parametro;
    }
    public function getColor():string {
        return $this->color;
    }
}
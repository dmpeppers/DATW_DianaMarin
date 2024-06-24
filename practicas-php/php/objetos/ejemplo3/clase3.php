<?php
class Vehiculo {
    private $tipo;
    private $marca;
    public $traccion;
    public $ruedas;
    private $color;
    function setTraccion($traccion) {
        switch($traccion){
            case "animal":
                $this->traccion = $traccion;
                break;
            case "mecanica":
                $this->traccion = $traccion;
                break;
            default:
            $this->traccion= "Traccion no valida";
            echo "<p>LA TRACCION $traccion NO VALIDA</p>";
        }
    }
    public function getTraccion():string{
        return $this->traccion;
    }
    public function setColor($color):void{
        $this->color = $color;
    }
    public function getColor():string{
        return $this->color;
    }
}
?>
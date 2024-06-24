<?php
class Libro
{
    // declaración de atributos o propiedades
    private $titulo;
    private $autor;
    private $num_paginas;
    private $formato;
    private $isbn;
    private $idioma;
    private $editorial;
    private $coleccion;
    private $publicado;
    public $portada;
    public $text_alt;


    function __construct($param_titulo) {
        $this->titulo = $param_titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    public function setAutor($param_autor) {
        $this->autor = $param_autor;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setNumPaginas($param_num_paginas) {
        if($param_num_paginas > 50 && $param_num_paginas < 3000) {
            $this->num_paginas = $param_num_paginas;
        } else {
            echo "<p class='aviso'>$param_num_paginas no es un valor entre 50 y 3000</p>";
        }
    }
    public function getNumPaginas() {
        if($this->num_paginas > 50 && $this->num_paginas < 3000) {
        echo "<p class='resultado'>{$this->num_paginas}</p>";
        }
        return $this->num_paginas;
    }
    public function setFormato($param_formato) {
        $this->formato = $param_formato;
    }
    public function getFormato() {
        return $this->formato;
    }
    public function setIsbn($param_isbn) {
        $this->isbn = $param_isbn;
    }
    public function getIsbn() {
        return $this->isbn;
    } 
    public function setIdioma($param_idioma) {
        switch($param_idioma) {
            case "español":
                $this->idioma = $param_idioma;
                break;
            case "ingles":
                $this->idioma = $param_idioma;
                break;
            case "frances":
                $this->idioma = $param_idioma;
                break;
            default:
                $this->idioma = "No existe edición en $param_idioma";
        }
    }
    public function getIdioma() {
        return $this->idioma;
    }
    public function setEditorial($param_editorial) {
        $this->editorial = $param_editorial;
    }
    public function getEditorial() {
        $this->editorial;
    }
    public function setColeccion($param_coleccion) {
        switch($param_coleccion) {
            case "informatica":
                $this->coleccion = $param_coleccion;
                break;
            case "novela historica":
                $this->coleccion = $param_coleccion;
                break;
            case "ciencia-ficcion":
                $this->coleccion = $param_coleccion;
                break;
            case "romantica":
                $this->coleccion = $param_coleccion;
                break;
            case "mitologia":
                $this->coleccion = $param_coleccion;
                break;
            default:
                echo "$param_coleccion no está en nuestro catálogo";
        }
    }
    public function getColeccion() {
        return $this->coleccion;
    }
    public function setPublicado($param_publicado) {
        $this->publicado = "$param_publicado";
    }
    public function getPublicado() {
        return $this->publicado;
    }

    
    public function setPortada($param_portada) {
        $this->portada = $param_portada;
    }
    private function escribirImagen($param_imagen):string {
        return "<img src='../../../img/portada/{$param_imagen}.jpg' alt='{$this->text_alt}'>";
    }
    public function getPortada():string {
        return "<figure><figcaption>$this->text_alt</figcaption>".$this->escribirImagen($this->portada).'</figure>';
    }

    public function setTextAlt($param_text_alt) {
        $this->text_alt = $param_text_alt;
    }
    public function getTextAlt():string{
        return $this->text_alt;
    }

    public function imprimirFicha() {
        echo <<<ficha
            <div class='ficha'>
                <h2>Título: $this->titulo</h2>
                {$this->getPortada()}
                <h3>Autor: $this->autor</h3>
                <h3>Páginas: $this->num_paginas</h3>
                <h3>Formato: $this->formato</h3>
                <h3>Categoría: $this->coleccion</h3>
                <!--<h3>Categoría: {$this->getColeccion()}-->
            </div>
        ficha;
    }
}
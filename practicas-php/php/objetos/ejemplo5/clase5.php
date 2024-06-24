<?php
    class Libro{
    // declaracion de atributos
        private $titulo;
        private $autor;
        public $categoria;
        private $imagen;
        private $formato;
        private $fechaPublicacion;
        private $editorial;
        private $sipnosis;
        private $idioma;
        private $isbn;
        
    // declaracion de propiedades funcion
    // propiedad titulo
        function __construct(string $titulo)
        {
            $this->titulo = $titulo;
        }
        public function getTitulo():string{
            return $this->titulo;
        }
    // propiedad autor
        public function setAutor($autor):void{
            $this->autor = $autor;
        }
        public function getAutor():string{
            return $this->autor;
        }
    // propiedad categoria
        function setCategoria($categoria){
            switch($categoria){
                case "Informatica":
                    $this->categoria = $categoria;
                    break;
                case "Novela-Historica":
                    $this->categoria = $categoria;
                    break;
                case "Ciencia-Ficcion":
                    $this->categoria = $categoria;
                    break;
                case "Romance":
                    $this->categoria = $categoria;
                    break;
                case "Mitologia":
                    $this->categoria = $categoria;
                    break;
                default:
                $this->categoria = "Categoria no valida";
                echo "<p><strong>LA CATEGORIA $categoria NO ES VALIDA</strong></p>";
            }
        }
        public function getCategoria():string{
            return $this->categoria;
        }
    // propiedad imagen
        public function setImagen($imagen){
            $this->imagen =$imagen;
        }
    // propiedad formato
        function  setFormato($formato){
            switch($formato){
                case "Tapa-dura";
                    $this->formato = $formato;
                    break;
                case "Tapa-Blanda";
                    $this->formato = $formato;
                    break;
                case "Electronico";
                    $this->formato = $formato;
                    break;
                case "Audiolibro";
                    $this->formato = $formato;
                    break;
                default:
                    $this->formato = "Formato no Valido";
                echo "<p><strong>FORMATO $formato NO VALIOD</strong></p>";
            }
        }
        public function getFormato():string{
            return $this->formato;
        }
    // propiedad fechaPublicacion
        public function setFechaPublicacion($fechaPublicacion){
            $this->fechaPublicacion = $fechaPublicacion;
        }
        public function getFechaPublicacion():string {
            return $this->fechaPublicacion;
        }
    // propiedad editorial
        public function setEditorial($editorial){
            $this->editorial = $editorial;
        }
        public function getEditorial():string {
            return $this->editorial;
        }
    // propiedad sipnosis
        public function setSipnosis($sipnosis){
            $this->sipnosis = $sipnosis;
        }
        public function getSipnosis():string {
            return $this->sipnosis;
        }
    // propiedad idioma
        public function setIdioma($idioma){
            $this->idioma = $idioma;
        }
        public function getIdioma():string {
            return $this->idioma;
        }
    // propiedad isbn
        public function setIsbn($isbn){
            $this->isbn = $isbn;
        }
        public function getIsbn():string {
            return $this->isbn;
        }
    
    // mostrar datos de los libros
        public function mostrarDatosLibros() : void {
            $datos_libros = "
            <div style='flex-direction: row;width: calc(100%/4);'>
            <figure style='width: 100%;background-color: wheat; box-sizing: border-box;padding-left: auto; padding-right: auto; position: relative; border: 4px solid black; border-radius:20px;margin-right: auto; margin-left:auto; text-align: center;'>
            <h3>{$this->titulo}</h3>
                <div style='justify-content: space-evenly;'><img src='../../../img/imagen/{$this->imagen}.jpg' style='display:block;width:90%;height: 100%;aspect-ratio: auto; margin-right: auto; margin-left:auto;'></div>
                <p>Autor: {$this->autor}</p>
                <p>Publicacion: {$this->fechaPublicacion}</p>
                <p>Editorial: {$this->editorial}</p>
                <p>Categoria: {$this->categoria}</p>
                <p>Idioma: {$this->idioma}</p>
                <p>Formato: {$this->formato}</p>
                <p>Sipnosis: {$this->sipnosis}</p>
                <p>ISBN: {$this->isbn}</p>
            </figure>
            </div>";
            echo $datos_libros;
        }
    }
?>
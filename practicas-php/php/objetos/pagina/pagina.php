<?php
    class Pagina{
        public $contenido;
        private $titulo;
        private $palabras_clave = "Libros, papeleria, boligrafos, libretas";
        private $descripcion = "La libreria familiar mas molona de Xixon";
        public $botones = [
            "Principal"=>"index.php",
            "Contacto"=>"contacto.php",
            "Servicios"=>"servocops.php",
            "Mapa del sitio"=>"mapa_sitio.php",
            "Curriculum"=>"curriculum.php"
        ];
        public function mostrar() {
            echo "<html><head>";
            $this->mostrarTitulo();
            $this->mostrarPalabrasClave();
            $this->mostrarDescripcion();
            $this->mostrarEstilos();
            echo "</head><body>";
            $this->mostrarEncabezado();
            $this->mostrarMenu($this->botones);
            $this->mostrarPie();
            echo "</body></html>";
        }
        public function mostrarTitulo(){
            echo "<title>$this->titulo</title>";
        }
        public function mostrarPalabrasClave(){
            echo "<meta name='keywords' content='$this->palabras_clave'>";
        }
        public function mostrarDescripcion(){
            echo "<meta name='descripcion' content='$this->descripcion'>";
        }
        public function mostrarEstilos(){
            echo "<link rel='stylesheet' href='css/estilos.css'>";
        }
        public function mostrarEncabezado(){
            echo "<header>";
            echo "<h1>La libreria</h1>";
            echo "</header>";
        }
        public function mostrarMenu($botones){
            echo "<nav>";
            foreach($botones as $nombre => $url){
                echo "<a href='$url'>$nombre</a>";
            }
            echo "</nav>";
        }
        public function mostrarPie(){
            echo "<footer>";
            echo "<address>";
            echo "&copy; mentiona, S.L.<br>
            c/ Saavedra, 1, entresuelo<br>
            33208 · Gijon · 2024";
            echo "</address>";
            echo "</footer>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5</title>
    <style>
        main{
            display: flex;
        }
    </style>
</head>
<body>
    <h1>Libreria</h1>
    <main>
    <?php
        require_once('clase5.php');
        // crear instancias
        $cursophp = new Libro("Curso de PHP 8 y MySQL 8");
        $bridgerton = new Libro("Seduciendo A Mr. Bridgerton (Bridgerton 4)");
        $nannyalien = new Libro("The Nanny and the Alien Warrior");
        $excalibur = new Libro("Excalibur: A Novel of Arthur");

        // datos cursophp
        $cursophp->setAutor("Luis Miguel Cabezas Granado y Francisco José González Lozano");
        $cursophp->setCategoria("Informatica");
        $cursophp->setImagen("cursophp");
        $cursophp->setFormato("Tapa-Blanda");
        $cursophp->setFechaPublicacion("edición (15 abril 2021)");
        $cursophp->setEditorial("ANAYA MULTIMEDIA");
        $cursophp->setSipnosis("PHP es uno de los lenguajes más utilizados en Internet y está presente en aplicaciones muy conocidas como WordPress, Joomla, Moodle o el propio Facebook. Desde sus inicios fue creado pensando en la sencillez de uso y en facilitar una curva de aprendizaje gradual al programador. MySQL es el sistema de gestión de bases de datos más popular y extendido en la actualidad.
        Este libro es ideal para aprender de forma gradual a dominar las nuevas versiones de PHP y MySQL. Cubre todos los aspectos necesarios para aprender PHP 8, una evolución del lenguaje original en la que se han invertido numerosos años en mejorar todos los aspectos tecnológicos del lenguaje, modernizándolo constantemente. También MySQL 8 incorpora muchas novedades como el soporte para UTF8, el formato JSON, funcionalidades GIS y mucho más. ");
        $cursophp->setIdioma("Español");
        $cursophp->setIsbn("8441543720");

        // imprimir informacion
        $cursophp->mostrarDatosLibros();

         // datos bridgerton
         $bridgerton->setCategoria("Romance");
         $bridgerton->setImagen("bridgerton");
         $bridgerton->setAutor("Julia Quinn");
         $bridgerton->setFormato("Tapa-Blanda");
         $bridgerton->setFechaPublicacion("edición  (25 febrero 2020)");
         $bridgerton->setEditorial("Titania ");
         $bridgerton->setSipnosis("A sus veintiocho años, Penélope se ha resignado ya a convertirse en una solterona destinada a envejecer cuidando a su madre. Durante una década, ha asistido a todas las fiestas de la aristocracia londinense, y siempre ha sido la muchacha mediocre, callada, la que nadie saca a bailar más que por compromiso, la que pasa inadvertida para todos. También para Colin Bridgerton, hermano de la mejor amiga de Penélope, guapo, audaz, soltero de oro... y su amor platónico desde siempre. Para Colin, Penélope siempre ha estado ahí, simpática, agradable, pero casi invisible. ¿Cómo es posible que todo cambie de repente? Sin saber bien cómo, el menor de los Bridgerton descubre a una mujer inteligente, sensible, audaz... y muy atractiva. Durante años se han conocido casi como hermanos, y de repente se dan cuenta de que no saben nada el uno del otro. Pero no todo lo que descubrirán va a resultar tan placentero... ");
         $bridgerton->setIdioma("Español");
         $bridgerton->setIsbn("8416327858");
 
         // imprimir informacion
         $bridgerton->mostrarDatosLibros();
         
          // datos nannyalien
        $nannyalien->setAutor("Bex McLynn
        Bex McLynnBex McLynn y Honey Phillips");
        $nannyalien->setCategoria("Ciencia-Ficcion");
        $nannyalien->setImagen("nannyalien");
        $nannyalien->setFormato("Electronico");
        $nannyalien->setFechaPublicacion("edición (4 julio 2021)");
        $nannyalien->setEditorial("Kindle");
        $nannyalien->setSipnosis("Can an alien warrior who has given up hope find a new future with the woman and child who need him?
        Joanna is snatched away from her peaceful academic life and sold to K’herr, a forbidding alien warlord. To her relief, he only wants her as a caretaker for his precocious daughter, Sultavi.
        A year later, Lord K’herr is dead, and Joanna and Sultavi are on the run from his killers. Their only hope is to locate a down-on-his-luck mercenary who owes K’herr a debt of honor. Joanna doesn’t expect to find a massive green warrior with the saddest eyes she’s ever seen.
        Craxan lost his family and his future in the great lague that decimated the Cire race. Since then, he’s led a hollow life using his warrior skills for anyone who can pay.
        When the daughter of an old acquaintance appears, demanding his assistance, he reluctantly agrees to help her. But the delightful little girl - and the enchanting human female who accompanies her - quickly win him over.
        He promises to take them to safety, but the more time he spends with them, the more he is convinced that they belong with him. He finally has a cause worth fighting for - but even if he can keep them safe from their enemies, what does a worn-out warrior have to offer?");
        $nannyalien->setIdioma("Inglés");
        $nannyalien->setIsbn("B098GY41K6");

        // imprimir informacion
        $nannyalien->mostrarDatosLibros();

         // datos excalibur
         $excalibur->setAutor("Bernard Cornwell");
         $excalibur->setCategoria("Novela-Historica");
         $excalibur->setImagen("excalibur");
         $excalibur->setFormato("Tapa-dura");
         $excalibur->setFechaPublicacion("edición (26 enero 2017)");
         $excalibur->setEditorial("Penguin");
         $excalibur->setSipnosis("From the No. 1 bestselling author of WAR LORD comes an epic retelling of the Arthurian legend, from the bestselling Last Kingdom series
         After rebellions and betrayals by those he believed loved him most, Arthur looks at his most weak.
         His Saxon enemies decide to strike before he regains his strength, plunging Britain into war. It will require all Arthur's leadership and military cunning to win this last battle.
         But in this final struggle of the warlord, the intrigues of Mordred, now the adult heir to the throne of Britain, and the dark magic of the priestess Nimue could conspire to bring about Arthur's downfall.
         Even his trusty blade Excaliber may not be sharp enough to save him . . .");
         $excalibur->setIdioma("Inglés");
         $excalibur->setIsbn("1405928344");
 
         // imprimir informacion
         $excalibur->mostrarDatosLibros();
    ?>
    </main>
</body>
</html>
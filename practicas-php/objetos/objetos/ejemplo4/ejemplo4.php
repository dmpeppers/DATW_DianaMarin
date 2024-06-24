<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>
<body>
    <?php
        // importamos el fichero clase4.php
        require_once('clase4.php');
        
        // instanciamos objetos Persona3
        $carolina = new Persona3("Carolina", "Martínez Martínez", "32999999C", "carolina", "Foto Carolina");
        $maria = new Persona3('María', 'García García', "32888888Y", "maria", "Foto María");
        $marga = new Persona3("Margarita", "Suárez Suárez", "32777777J", "marga", "Foto Marga");

        // imprimimos en pantalla los objetos creados
        $carolina->mostrarDatosPersona();
        // $carolina->setFotografia("carolina");
        // $carolina->setTextoAlternativo("Foto Carolina");
        // $carolina->getFotografia();
        $maria->mostrarDatosPersona();
        // $maria->setFotografia("maria");
        // $maria->setTextoAlternativo("Foto María");
        // $maria->getFotografia();
        $marga->mostrarDatosPersona();
        // $marga->setFotografia("marga");
        // $marga->setTextoAlternativo("Foto Margarita");
        // $marga->getFotografia();


    ?>
</body>
</html>
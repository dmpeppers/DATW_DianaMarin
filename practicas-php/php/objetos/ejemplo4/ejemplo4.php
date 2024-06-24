<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>
<body>
    <?php
    // importamos o llamamos el fichero de la clase4.php
        require_once('clase4.php');
    // instanciamos crear la copia de la informacion para mostrar
    // creamos objetos persona3
        $carolina = new Persona3("Carolina", "Martinez Martinez", "327777777C", "carolina", "foto de carolina");

        $maria = new Persona3("Maria", "Garcia Garcia", "32888888Y", "maria", "foto de maria");

        $marga = new Persona3("Margarita", "Suarez Suarez", "329999999J","marga", "foto de marga");
    // imprimir informacion
        $carolina->mostrarDatosPersona();
        $maria->mostrarDatosPersona();
        $marga->mostrarDatosPersona();

    // instancia para mostrar foto

    ?>
</body>
</html>
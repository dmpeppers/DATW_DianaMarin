<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 6</title>
</head>
<body>
    <?php
        require('clase6.php');
        // definimos objetos
        $objeto1_A = new A();
        $objeto1_A->propiedad_A_1 = "valor";
        $objeto1_A->propiedad_A_2 = "valor";
        $objeto1_A->setPropiedadA3("valor");
        echo $objeto1_A->getPropiedadA3();


        $objeto1_B = new B();
        $objeto1_B->propiedad_B_1 = "valor";
        $objeto1_B->propiedad_A_1 = "valor";
        $objeto1_B->setPropiedadA3("valor");
        echo '<p>'.$objeto1_B->setPropiedadA3("valor").'</p>';
    ?>
</body>
</html>
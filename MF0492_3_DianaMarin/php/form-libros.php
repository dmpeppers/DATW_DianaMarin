<?php
    require('abrir-conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO LIBROS</title>
    <link rel="stylesheet" href="../css/css-formularios.css">
</head>
<body>
    <h2>Insertar nueva Obra Literaria</h2>
    <form action="insertar-libros.php" method="get">
        <fieldset>
            <legend>Nuevo LIBRO</legend>
            <p>
                <label for="titulo">Titulo Libro:</label>
                <input type="text" name="titulo" id="titulo" class="ancho">
            </p>
            <p>
                <label for="isbn10">ISBN10:</label>
                <input type="text" name="isbn10" id="isbn10">
            </p>
            <p>
                <label for="isbn13">ISBN13:</label>
                <input type="text" name="isbn13" id="isbn13">
            </p>
            <p>
                <label for="paginas">Paginas:</label>
                <input type="text" name="paginas" id="paginas">
            </p>
            <p>
                <label for="idioma">Idioma:</label>
                <select name="idioma" id="idioma">
                    <option value=""selected hidden></option>
                    <option value="Español">Español</option>
                    <option value="Catalan">Catalan</option>
                    <option value="Valenciano">Valenciano</option>
                    <option value="Balear">Balear</option>
                    <option value="Euskera">Euskera</option>
                    <option value="Gallego">Gallego</option>
                    <option value="Asturiano">Asturiano</option>
                    <option value="Frances">Frances</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Aleman">Aleman</option>
                    <option value="Italiano">Italiano</option>
                </select>
            </p>
            <p>
                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" >
            </p>
            <p>
                <label for="formato">Formato:</label>
                <select name="formato" id="formato">
                    <option value=""selected hidden></option>
                    <option value="Tapa dura">Tapa dura</option>
                    <option value="Tapa blanda">Tapa blanda</option>
                    <option value="Bolsillo">Bolsillo</option>
                    <option value="Edicion coleccionista">Edicion coleccionista</option>
                    <option value="eBook">eBook</option>
                </select>
            </p>
            <p>
                <label for="anio_publicacion">Año de Publicacion:</label>
                <input type="number" name="anio_publicacion" id="anio_publicacion">
            </p>
            <p>
                <label for="fk_id_editorial">Editorial: </label>
                <select name="fk_id_editorial" id="fk_id_editorial">
                <?php
                    $consulta = "SELECT pk_id_editorial, nombre_editorial
                                 FROM editoriales
                                 ORDER BY nombre_editorial ASC";
                    $datos = $conexion->query($consulta);
                    while($fila = $datos->fetch_array(MYSQLI_ASSOC))
                    {
                        echo "<option value='{$fila['pk_id_editorial']}'>{$fila['nombre_editorial']}</option>";
                    }
                ?>
                <option value="" selected hidden>Seleccione una Editorial</option>
                </select>
            </p>
            <p>
                <label for="fk_id_genero">Genero: </label>
                <select name="fk_id_genero" id="fk_id_genero">
                <?php
                    $consulta = "SELECT pk_id_genero, nombre_genero
                                 FROM generos
                                 ORDER BY nombre_genero ASC";
                    $datos = $conexion->query($consulta);
                    while($fila = $datos->fetch_array(MYSQLI_ASSOC))
                    {
                        echo "<option value='{$fila['pk_id_genero']}'>{$fila['nombre_genero']}</option>";
                    }
                ?>
                <option value="" selected hidden>Seleccione un Genero</option>
                </select>
            </p>
            <p>
                <label for="sinopsis">Sinopsis:</label>
                <textarea name="sinopsis" id="sinopsis" rows="5" cols="50"></textarea>
            </p>
            <p>
                <label for="caratula">Caratula Libro:</label>
                <input type="file" name="caratula" id="caratula">
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">
        </p>
    </form>
</body>
</html>
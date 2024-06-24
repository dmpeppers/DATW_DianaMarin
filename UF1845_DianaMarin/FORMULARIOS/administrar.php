<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRAR BD_ACADEMIA</title>
    <link rel="stylesheet" href="../css/detallitos.css">
    <style>
        body{
            margin-left: 75px;
            margin-right: 75px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.1em;
        }
        main{
            display: flex;
        }
        #caja-1{
            width: 20%;
            background-color: #eee;
        }
        #caja-2{
            width: 80%;
        }
        #marco{
            width: 100%;
            height: 100vh;
        }
        ul{
            list-style: none;
        }
        ul li{
            line-height: 30px;
        }
        a:link{
            text-decoration: none;
        }
        a:visited{
            color: green;
        }
        a:hover{
            color:red;
        }
    </style>
</head>
<body>
    <h1>ADMINISTRAR SITIO</h1>
    <main>
       <div id="caja-1">
        <h2>Insertar nuevos datos</h2>
        <ul>
            <li><a href="form_departamento.php" target="marco">Insertar departamento</a></li>
            <li><a href="form_profesor.php" target="marco">Insertar profesor</a></li>
            <li><a href="form_asignatura.php" target="marco">Insertar asignatura</a></li>
            <li><a href="form_alumno.php" target="marco">Insertar alumno</a></li>
            <li><a href="form_matricula.php" target="marco">Insertar matricula</a></li>
        </ul>
        <h2>Actualizar Registros</h2>
       </div> 
       <div id="caja-2">
            <iframe src="" frameborder="0" id="marco" name="marco"></iframe>
       </div>
    </main>
</body>
</html>
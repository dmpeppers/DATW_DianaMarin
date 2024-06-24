CREATE DATABASE cine_v2;
USE cine_v2
CREATE TABLE actores(
    pk_id_actor INT PRIMARY KEY AUTO_INCREMENT,
    nombre_actor VARCHAR(100) NOT NULL,
    foto_actor VARCHAR(100),
    edad_actor TINYINT,
    fecha_nacimiento_actor DATE,
    nacionalidad_actor VARCHAR(50),
    oscar_actor CHAR(1),
    actor_fallecido CHAR(1)
);
CREATE TABLE actrices(
    pk_id_actriz INT PRIMARY KEY AUTO_INCREMENT,
    nombre_actriz VARCHAR(100) NOT NULL,
    foto_actriz VARCHAR(100),
    edad_actriz TINYINT,
    fecha_nacimiento_actriz DATE,
    nacionalidad_actriz VARCHAR(50),
    oscar_actriz CHAR(1),
    actriz_fallecido CHAR(1)
);
CREATE TABLE director(
    pk_id_director INT PRIMARY KEY AUTO_INCREMENT,
    nombre_director VARCHAR(100) NOT NULL,
    foto_director VARCHAR(100),
    edad_director TINYINT,
    fecha_nacimiento_director DATE,
    nacionalidad_director VARCHAR(50),
    oscar_director CHAR(1),
    director_fallecido CHAR(1),
    sexo ENUM('Hombre', 'Mujer')
);
CREATE TABLE genero(
    pk_id_genero INT PRIMARY KEY AUTO_INCREMENT,
    nombre_genero VARCHAR(100) NOT NULL,
    descripcion VARCHAR(150)
);
CREATE TABLE produccion(
    pk_id_produccion INT PRIMARY KEY AUTO_INCREMENT,
    nombre_produccion VARCHAR(100) NOT NULL
);
CREATE TABLE peliculas(
    pk_id_pelicula INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(150) NOT NULL,
    cartel_pelicula VARCHAR(200),
    anio INT,
    duracion INT,
    oscar_pelicula CHAR(1),
    resumen text,
    fk_id_actor INT,
    fk_id_actriz INT,
    fk_id_director INT,
    fk_id_genero INT,
    fk_id_produccion INT,
    FOREIGN KEY (fk_id_actor) REFERENCES actores (pk_id_actor),
    FOREIGN KEY (fk_id_actriz) REFERENCES actrices (pk_id_actriz),
    FOREIGN KEY (fk_id_director) REFERENCES director (pk_id_director),
    FOREIGN KEY (fk_id_genero) REFERENCES genero (pk_id_genero),
    FOREIGN KEY (fk_id_produccion) REFERENCES produccion (pk_id_produccion)
);

-- creacion de consulta para ver pelicula, titulo, año, duracion, actor,actriz, director
SELECT titulo, anio, duracion,nombre_actor, nombre_actriz, nombre_director, nombre_genero
FROM peliculas, actores, actrices, director, genero
WHERE fk_id_actor = pk_id_actor
AND fk_id_actriz = pk_id_actriz
AND fk_id_director = pk_id_director
AND fk_id_genero = pk_id_genero;

-- ahora con JOIN o INNER JOIN (son lo mismo)
SELECT 
titulo AS TITULO, 
duracion AS DURACION,
oscar_pelicula AS OSCAR, 
CONCAT_WS(nombre_actor, nombre_actriz, nombre_director)
AS 'REPARTO Y DIRECTOR', 
nombre_produccion AS PRODUCTORA, 
nombre_genero AS GENERO
FROM peliculas
JOIN actores
ON pk_id_actor = fk_id_actor
JOIN actrices
ON pk_id_actriz = fk_id_actriz
JOIN director
ON fk_id_director = pk_id_director
JOIN genero
ON fk_id_genero = pk_id_genero
JOIN produccion 
ON fk_id_produccion = pk_id_produccion;
-- WHERE
-- nombre_genero = 'accion';

-- union con los diferentes atributos y OR para ampliar las condiciones
SELECT
    nombre_actor AS NOMBRE,
    edad_actor AS EDAD,
    nacionalidad_actor AS NACIONALIDAD,
    oscar_actor AS OSCAR,
    actor_fallecido AS FALLECIDO
FROM
    actores
WHERE
    nacionalidad_actor = 'españa'
    UNION
SELECT
    nombre_actriz AS NOMBRE,
    edad_actriz AS EDAD,
    nacionalidad_actriz AS NACIONALIDAD,
    oscar_actriz AS OSCAR,
    actriz_fallecido AS FALLECIDO
FROM
    actrices
WHERE
    nacionalidad_actriz = 'españa'
    UNION
SELECT
    nombre_director AS NOMBRE,
    edad_director AS EDAD,
    nacionalidad_director AS NACIONALIDAD,
    oscar_director AS OSCAR,
    director_fallecido AS FALLECIDO
FROM
    director
WHERE
    nacionalidad_director = 'españa'
OR
    nacionalidad_director = 'uk'
ORDER BY
    edad ASC;

-- el uso de IN
SELECT
    nombre_actor AS NOMBRE,
    edad_actor AS EDAD,
    nacionalidad_actor AS NACIONALIDAD,
    oscar_actor AS OSCAR,
    actor_fallecido AS FALLECIDO
FROM
    actores
WHERE
    nacionalidad_actor IN('españa'OR'uk'OR'nueva zelanda'OR'australia')
    UNION
SELECT
    nombre_actriz AS NOMBRE,
    edad_actriz AS EDAD,
    nacionalidad_actriz AS NACIONALIDAD,
    oscar_actriz AS OSCAR,
    actriz_fallecido AS FALLECIDO
FROM
    actrices
WHERE
nacionalidad_actriz IN('españa'OR'uk'OR'nueva zelanda'OR'australia')
    UNION
SELECT
    nombre_director AS NOMBRE,
    edad_director AS EDAD,
    nacionalidad_director AS NACIONALIDAD,
    oscar_director AS OSCAR,
    director_fallecido AS FALLECIDO
FROM
    director
WHERE
nacionalidad_director IN('españa'OR'uk'OR'nueva zelanda'OR'australia')
ORDER BY
    edad ASC;

    -- el uso de IN y and
SELECT
    nombre_actor AS NOMBRE,
    edad_actor AS EDAD,
    nacionalidad_actor AS NACIONALIDAD,
    oscar_actor AS OSCAR,
    actor_fallecido AS FALLECIDO
FROM
    actores
WHERE
    nacionalidad_actor IN('españa', 'uk', 'nueva zelanda', 'australia', 'USA') AND actor_fallecido = 'S'
    UNION
SELECT
    nombre_actriz AS NOMBRE,
    edad_actriz AS EDAD,
    nacionalidad_actriz AS NACIONALIDAD,
    oscar_actriz AS OSCAR,
    actriz_fallecido AS FALLECIDO
FROM
    actrices
WHERE
nacionalidad_actriz IN('españa', 'uk', 'nueva zelanda', 'australia', 'USA') AND actriz_fallecido = 'S'
    UNION
SELECT
    nombre_director AS NOMBRE,
    edad_director AS EDAD,
    nacionalidad_director AS NACIONALIDAD,
    oscar_director AS OSCAR,
    director_fallecido AS FALLECIDO
FROM
    director
WHERE
nacionalidad_director IN('españa', 'uk', 'nueva zelanda', 'australia', 'USA') AND director_fallecido = 'S'
ORDER BY
    nacionalidad ASC;



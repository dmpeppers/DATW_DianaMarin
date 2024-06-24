SELECT titulo
FROM peliculas
WHERE titulo LIKE 'los v%';
-- consulta donde titulo comienza con determinadas letras se coloca el porcentaje al final de la consulta
SELECT titulo
FROM peliculas
WHERE titulo LIKE 'los v%' OR titulo LIKE 'la%';
-- consulta donde termina por cierto numero o palabra con el porcentaje al incicio
SELECT nombre_actor, edad_actor
FROM actores
WHERE edad_actor LIKE '%5';
-- consulta que tenga las letras o palabras en el medio
SELECT titulo
FROM peliculas
WHERE titulo LIKE '%mon%';
SELECT titulo
FROM peliculas
WHERE titulo LIKE '%x%';
-- buscando el titulo y lo estamos reemplazar
SELECT REPLACE(titulo, 'Señor', 'Lord')
FROM peliculas
WHERE titulo LIKE '%Señor%';
-- encontrar rango de datos
SELECT nombre_actor, edad_actor
FROM actores
WHERE edad_actor BETWEEN '60' AND '80'
UNION
SELECT nombre_actriz, edad_actriz
FROM actrices
WHERE edad_actriz BETWEEN '60' AND '80';
LIMIT 4;
-- SE PUEDE LIMITAR LA CANTIDAD DE REGISTROS QUE SE QUIERA MOSTRAR CON LIMIT
-- podemos sacar la informacion dependiendo del tamaño de que nosotros selecionamos con left resumen
SELECT titulo, LEFT(resumen,50) AS Sipnosis
FROM peliculas
WHERE titulo LIKE '%Avatar%';
-- podemos usar el REPLACE para quitar el <p> que se tiene en los datos
-- LEFT cuenta la cantidad de caracteres, incluidos epacios en blanco
SELECT titulo, LEFT(REPLACE(resumen, '<p>', ''), 50) AS Sipnosis
FROM peliculas
LIMIT 10;
--  SUBSTRING_INDEX cuenta palabras y numeros
SELECT titulo, SUBSTRING_INDEX(REPLACE(resumen, '<p>', ''),' ',10) AS Sipnosis
FROM peliculas
LIMIT 10;

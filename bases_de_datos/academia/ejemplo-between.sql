-- SHOW DIFERENTES CONSULTAS CON BETWEEN Y OTROSO
-- USAR EL BETWEEN PARA HACE UNA CONSULA DE UN RANGO USANDO EL WHERE EL NOMBRE DEL CAMPO Y EL RANGO USANDO WHERE......AND.....;
SELECT nombre, apellidos, fecha_nacimiento
FROM alumno
WHERE fecha_nacimiento BETWEEN '1970-01-01' AND '2000-12-31';

-- AÑADIR COLUMNAS
ALTER TABLE profesor ADD COLUMN fecha_nacimiento DATE;
-- AÑADIR CONTENIDO
UPDATE profesor
SET fecha_nacimiento = '2000-05-22'
WHERE pk_id_profesor = 1;                
UPDATE profesor
SET fecha_nacimiento = '1996-06-02'
WHERE pk_id_profesor = 2;
UPDATE profesor
SET fecha_nacimiento = '185-05-16'
WHERE pk_id_profesor = 3;

-- ver la tabla y actualizar la informacion de una casilla
SELECT pk_id_alumno, nombre, apellidos, localidad FROM alumno;
UPDATE alumno
SET localidad = 'Madrid'
WHERE pk_id_alumno = 2;
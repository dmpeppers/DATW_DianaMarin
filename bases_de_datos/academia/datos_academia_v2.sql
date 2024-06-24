INSERT INTO ccaa(nombre_ccaa)
VALUES
    ('Andalucia'),
    ('Aragon'),
    ('Isla Baleares'),
    ('Canarias'),
    ('Cantabria'),
    ('Castilla-La Mancha'),
    ('Castilla y León'),
    ('Cataluña'),
    ('Comunidad de Madrid'),
    ('Comunidad de Navarra'),
    ('Comunidad Valenciana'),
    ('Extremadura'),
    ('Galicia'),
    ('Pais Vasco'),
    ('Principado de Asturias'),
    ('Region de Murcia'),
    ('La Rioja')
;

INSERT INTO alumno (nombre, apellidos, dni,fecha_nacimiento, email, genero, localidad, codigo_postal, fk_id_ccaa)
VALUES('Ramon','Gonzalez Dias', '320000A', '1966-12-31', 'Ramon@mentiona.com', 'Hombre', 'Gijon','33250',2), 
    ('Diego', 'Alvarez Gonzalez', '32111111B', '1990-06-22', 'diego@mentiona.com', 'Hombre', 'Gijon', '33251', 4),
    ('Marga', 'Diaz Diaz', '32222222C', '1970-01-01','marga@mentiona.com', 'Mujer', 'Gijon', '33252',9),
    ('Daniel', 'Fernandez Gozalez','3233333333A', '1980-07-11','daniel@mentiona.com', 'Hombre', 'Lugo', '16000', 1),
    ('Alvaro', 'Garcia Garcia', '324444Y', '1999-08-03','alvaro@mentiona.com', 'Hombre', 'Madrid','56456', 9);

-- selecciones academia_v2
    SELECT alumno.nombre, alumno.apellidos, alumno.fecha_nacimiento, ccaa.nombre_ccaa
    FROM alumno, ccaa
    WHERE ccaa.pk_id_ccaa = alumno.fk_id_ccaa
    ORDER BY ccaa.nombre_ccaa ASC;

-- consulta para mostrar datos para la tabla, AS se utiliza para poner nickname a la columna mas adecuado
    SELECT alumno.pk_id_alumno AS 'Id alumno',alumno.nombre AS Nombre, alumno.apellidos AS 'Apellidos', alumno.fecha_nacimiento AS 'Fecha de Nacimiento', alumno.dni AS DNI, alumno.genero AS Genero, ccaa.nombre_ccaa AS 'Comunidad Autonoma', alumno.codigo_postal AS 'Codigo Postal'
    FROM alumno, ccaa
    WHERE ccaa.pk_id_ccaa = alumno.fk_id_ccaa
    ORDER BY ccaa.nombre_ccaa ASC;

-- version 2 de la consulta concatenacion 
    SELECT alumno.pk_id_alumno AS 'Id alumno', CONCAT(alumno.nombre,' ',alumno.apellidos) AS 'Nombre completo', alumno.fecha_nacimiento AS 'Fecha de Nacimiento', alumno.dni AS DNI, alumno.genero AS Genero, ccaa.nombre_ccaa AS 'Comunidad Autonoma', alumno.codigo_postal AS 'Codigo Postal'
    FROM alumno, ccaa
    WHERE ccaa.pk_id_ccaa = alumno.fk_id_ccaa
    ORDER BY ccaa.nombre_ccaa ASC;

-- version 3
    SELECT alumno.pk_id_alumno AS 'Id alumno',  CONCAT(alumno.nombre,' ', alumno.apellidos,' ', alumno.dni,' ', alumno.num_ss) AS 'Nombre Completo DNI #Seguridad Social', alumno.fecha_nacimiento AS 'Fecha de Nacimiento', alumno.genero AS 'Genero', alumno.email AS 'Email', CONCAT(alumno.direccion,' ', alumno.localidad,' ',ccaa.nombre_ccaa, ' ', alumno.codigo_postal) AS 'Direccion completa'
    FROM alumno, ccaa
    WHERE ccaa.pk_id_ccaa = alumno.fk_id_ccaa
    ORDER BY ccaa.nombre_ccaa ASC;

SELECT direccion, localidad, codigo_postal, ccaa.nombre_ccaa
FROM alumno, ccaa
WHERE pk_id_ccaa = fk_id_ccaa;

-- actualizar direccion de los alumnos
UPDATE alumno
SET direccion = 'C/ Los Morancos, s/n'
WHERE pk_id_alumno = 1;

UPDATE alumno
SET direccion = 'Av/ Galicia 15'
WHERE pk_id_alumno = 2;

UPDATE alumno
SET direccion = 'Camino/ Rubin,26'
WHERE pk_id_alumno = 3;

UPDATE alumno
SET direccion = 'C/ La amistad, 5'
WHERE pk_id_alumno = 4;
UPDATE alumno
SET direccion = 'C/ Tiempos de Bals'
WHERE pk_id_alumno = 5;

UPDATE alumno
SET num_ss = '254645465'
WHERE pk_id_alumno = 1;

SET lc_time_names = 'es_ES';
DATE_FORMAT(alumno.fecha_nacimiento, '%e de %M de %Y') AS ('Fecha de nacimeinto')


UPDATE alumno
SET genero = 'Hombre'
WHERE pk_id_alumno = 1;
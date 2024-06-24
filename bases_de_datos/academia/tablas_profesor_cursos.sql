CREATE TABLE profesor (
    pk_id_profesor INT PRIMARY KEY AUTO_INCREMENT,
    fotografia_profesor VARCHAR(200) NULL,
    nombre_profesor VARCHAR(50) NOT NULL,
    apellidos_profesor VARCHAR(100) NOT NULL,
    dni_profesor CHAR(9) UNIQUE,
    email_profesor VARCHAR(100),
    direccion_profesor VARCHAR(100),
    localidad_profesor VARCHAR(50) DEFAULT'Gijon',
    codigo_postal CHAR(5),
    salario DECIMAL(6,2) DEFAULT 1000.55,
    fk_id_ccaa INT,
FOREIGN KEY (fk_id_ccaa) REFERENCES ccaa (pk_id_ccaa)
);
CREATE TABLE asignatura(
    pk_id_asignatura INT PRIMARY KEY AUTO_INCREMENT,
    cod_asignatura CHAR(5) UNIQUE NOT NULL,
    nombre_asignatura VARCHAR(50) NOT NULL,
    modalidad ENUM('presencial','distancia','hibrido'),
    rama ENUM('ciencias','letras'),
    duracion INT,
    idioma VARCHAR(50) DEFAULT 'español',
    creditos INT,
    precio_credito DECIMAL(4,2),
    iva_credito DECIMAL(2,1) DEFAULT 0.04,
    contenido TEXT,
    fk_id_profesor INT,
    FOREIGN KEY(fk_id_profesor) REFERENCES profesor(pk_id_profesor)
);

CREATE TABLE matricula(
    pk_id_matricula INT AUTO_INCREMENT,
    fk_id_alumno INT,
    fk_id_asignatura INT,
    cod_matricula CHAR(5),
    anio INT NOT NULL,
    PRIMARY KEY (pk_id_matricula, fk_id_asignatura, fk_id_alumno),
    Foreign Key (fk_id_alumno) REFERENCES alumno(pk_id_alumno),
    Foreign Key (fk_id_asignatura) REFERENCES asignatura(pk_id_asignatura)
);


-- datos tabla brofesor cursos.sql
INSERT INTO profesor(nombre_profesor, apellidos_profesor, dni_profesor, email_profesor, direccion_profesor, localidad_profesor, codigo_postal, salario, fk_id_ccaa)
VALUES ('Maria', 'Fuentes', '09000S', 'maria@mentiona.com', 'Av los Gallegos s/n','Gijon' ,'33210', 1000, 2);
INSERT INTO profesor(nombre_profesor, apellidos_profesor, dni_profesor, email_profesor, direccion_profesor, localidad_profesor, codigo_postal, salario, fk_id_ccaa)
VALUES ('Ivan', 'Gallego', '015105S', 'nacho@mentiona.com', 'Av sin nombre','Gadejo' ,'33213', 1500.5, 6);
INSERT INTO profesor(nombre_profesor, apellidos_profesor, dni_profesor, email_profesor, direccion_profesor, localidad_profesor, codigo_postal, salario, fk_id_ccaa)
VALUES ('Carolina', 'Mieres', '65412846S', 'caro@mentiona.com', 'Calle Puertadel sol s/n','Gijon' ,'33210', 1200.8, 7);

INSERT INTO asignatura
VALUES(null,'AM001', 'Matematicas', 'presencial', 'ciencias',60,'español',6,50,0.04,"",2);

-- consulta de tabla para profesores nombre y organizados donde la comunidad autonoma aparece con el nombre y no el codigo de la comunidad
SELECT nombre_profesor, apellidos_profesor,localidad_profesor, codigo_postal, ccaa.nombre_ccaa
FROM profesor, ccaa
WHERE pk_id_ccaa = fk_id_ccaa;

-- se puede realizar una consulta de datos de dos tablas diferentes usando UNION y se utiliza el AS para cambiar el nombre de la columna
SELECT nombre AS nombre, apellidos AS Apellidos, localidad AS Localidad, email AS 'Correo electronico' FROM alumno
UNION
SELECT nombre_profesor, apellidos_profesor, localidad_profesor, email_profesor FROM profesor
ORDER BY nombre;

-- realizar otro tipo de busquedas con diferentes parametros filtrados
SELECT nombre AS nombre, apellidos AS Apellidos, localidad AS Localidad, email AS 'Correo electronico' FROM alumno
WHERE(localidad = 'Gijon' OR localidad = 'Madrid' OR localidad = 'Villavisiosa') AND email LIKE '%mentiona.com'
UNION
SELECT nombre_profesor, apellidos_profesor, localidad_profesor, email_profesor FROM profesor
 ORDER BY localidad ASC, apellidos ASC;


SELECT nombre AS Columna1 FROM alumno
UNION ALL
SELECT nombre_profesor FROM profesor
UNION ALL
SELECT nombre_ccaa FROM ccaa
ORDER BY
Columna1 ASC;
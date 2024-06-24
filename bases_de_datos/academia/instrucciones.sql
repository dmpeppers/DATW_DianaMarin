--La primary key es UNIQUE directamente
-- ENUM solo dejaría elegir una opción
-- Para alterar datos y el tipo de dato, usamos la accion ALTER, decimos qué tabla, columna (propiedad/atributo) queremos cambiar, el tipo de dato que queremos que sea, y entre ('opciones que ya estaban', 'opciones que queremos añadir');

-- Modificar columnas
alter table alumno modify column comunidad_autonoma ENUM('Galicia', 'Asturias', 'Cantabria', 'País Vasco', 'Comunidad Valenciana');

alter table alumno modify column idioma SET('castellano', 'catalán', 'portugués', 'francés', 'inglés', 'gallego', 'chino', 'alemán');

-- Añadir columnas (propiedades)
alter table alumno add column comentario TEXT;

alter table alumno add column foto VARCHAR(200) AFTER id_alumno;

-- AÑADIR/INSERTAR DATOS A LA TABLA 'alumno'
-- Deben coincidir el número de propiedades y su orden en la declaración y en los 'VALUES'


CREATE TABLE alumno(
    id_alumno INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(50) NOT NULL,
    apellido1 VARCHAR(25) NOT NULL,
    apellido2 VARCHAR(25) NULL,
    dni CHAR(9) UNIQUE NULL,
    num_ss CHAR(12) NULL,
    fecha_nacimiento DATE,
    telefono CHAR(9),
    email VARCHAR(100),
    genero ENUM('hombre', 'mujer'),
    estado_civil ENUM('soltero', 'casado', 'divorciado', 'viudo', 'separado', 'pareja de hecho'),
    discapacidad ENUM('si', 'no'),
    grado DECIMAL(2.0),
    situacion_laboral ENUM('desempleado', 'ocupado', 'inactivo'),
    idioma SET('español', 'portugues', 'frances', 'ingles', 'catalan', 'gallego'),
    nivel_estudios ENUM('bachiller', 'diplomado', 'licenciado','doctor'),
    nacionalidad VARCHAR(50),
    direccion VARCHAR(100),
    localidad VARCHAR(50),
    comunidad_autonoma VARCHAR(50),
    provincia VARCHAR(50)
);

ALTER TABLE alumno MODIFY COLUMN comunidad_autonoma ENUM('Galicia', 'Asturias', 'Cantabria', 'Pais Vasco');

ALTER TABLE alumno MODIFY COLUMN idioma SET('español', 'portugues', 'frances', 'ingles', 'catalan', 'gallego', 'aleman');
ALTER TABLE alumno ADD COLUMN comentario TEXT;
ALTER TABLE alumno ADD COLUMN fotografia VARCHAR(200) AFTER id_alumno;

-- Insercion de datos en la tabla de alumno

INSERT INTO alumno(id_alumno,fotografia , nombre, apellido1, apellido2, dni, num_ss, fecha_nacimiento, telefono, email, genero, estado_civil, discapacidad, grado, situacion_laboral, idioma, nivel_estudios, nacionalidad, direccion, localidad, comunidad_autonoma, provincia, comentario);
VALUES('foto','Marcos','Gonzales','320000Q','00000000000', '1969-12-02','9850000', 'marcos@mentiona.com', 'hombre', 'casado','no',33, 'ocupado','español,chino,aleman', 'diplomado', 'española','C/ Los Andes Nº36 - 4ºA', 'Vigo', '34213', 'Pontevedra', 'Galicia');

INSERT INTO alumno(nombre, apellido1, apellido2, comunidad_autonoma, codigo_postal, provincia)
VALUES('Marta','Lougedo', 'Martinez', 'Asturias', '33985', 'oviedo');

-- COMANDOS CDM
-- cd\
-- cd xampp
-- cd mysql
-- cd bin
-- mysql -u root    para entrar a MariaBD
-- USE academia
-- SHOW TABLES
-- DESCRIBE (la tabla de informacion)
-- SELECT * FROM alumno
-- INSERT INTO nombre_tabla(Propiedades,separadas por comas)
-- VALUES('contenido',);
-- SELECT id_alumno, nombre, apellido1 FROM alumno;


-- COMO BORRAR O ELIMINAR UNA DETERMINADA COLUMNA
ALTER TABLE alumno DROP COLUMN telefono;


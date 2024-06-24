--CREAR BASE DE DATOS
CREATE DATABASE academia_v2;
USE academia_v2
CREATE TABLE ccaa(
    pk_id_ccaa INT PRIMARY KEY AUTO_INCREMENT,
    nombre_ccaa VARCHAR(55) NOT NULL,
    comentario TEXT
);
CREATE TABLE alumno(
    pk_id_alumno INT PRIMARY KEY AUTO_INCREMENT,
    fotografia VARCHAR(200) NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    dni CHAR(9) UNIQUE,
    num_ss CHAR(12),
    fecha_nacimiento DATE,
    email VARCHAR(100),
    genero ENUM('Hombre', 'Mujer'),
    direccion VARCHAR(100),
    localidad VARCHAR(50),
    codigo_postal CHAR(5),
    comentario TEXT,
    fk_id_ccaa INT,
    FOREIGN KEY (fk_id_ccaa) REFERENCES ccaa (pk_id_ccaa)
);
CREATE TABLE telefono(
    pk_id_telefono INT PRIMARY KEY AUTO_INCREMENT,
    num_telefono CHAR(9),
    comentario TEXT, 
    fk_id_alumno INT,
    FOREIGN KEY (fk_id_alumno) REFERENCES alumno(pk_id_alumno)
);
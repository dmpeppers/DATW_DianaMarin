CREATE DATABASE LIBRERIA;
USE LIBRERIA
CREATE TABLE generos(
    pk_id_genero INT PRIMARY KEY AUTO_INCREMENT,
    nombre_genero VARCHAR(50) NOT NULL,
    comentarios TEXT
);
CREATE TABLE editoriales(
    pk_id_editorial INT PRIMARY KEY AUTO_INCREMENT,
    nombre_editorial VARCHAR(50) NOT NULL,
    direccion VARCHAR(150)  NOT NULL,
    telefono CHAR(12) NOT NULL,
    email VARCHAR(200) NOT NULL,
    web VARCHAR(200) NOT NULL,
    comentarios TEXT
);
CREATE TABLE autores(
    pk_id_autor INT PRIMARY KEY AUTO_INCREMENT,
    dni CHAR(9) NOT NULL UNIQUE,
    nombre VARCHAR(50) NOT NULL,
    apellido1 VARCHAR(25) NOT NULL,
    apellido2 VARCHAR(25) NOT NULL,
    email VARCHAR(200) NOT NULL,
    direccion VARCHAR(150) NOT NULL,
    telefono CHAR(12),
    nacionalidad ENUM('España', 'Venezuela', 'Colombia', 'Francia', 'Estados Unidos', 'Alemania', 'Reino Unido', 'Italia', 'China', 'Japon', 'India'),
    web VARCHAR(200) NOT NULL,
    comentarios TEXT
);
CREATE TABLE libros(
    pk_id_libro INT PRIMARY KEY AUTO_INCREMENT,
    isbn10 CHAR(10) NOT NULL UNIQUE,
    isbn13 CHAR(13) NOT NULL UNIQUE,
    titulo VARCHAR(50) NOT NULL,
    paginas INT NOT NULL,
    idioma ENUM('Español', 'Catalan', 'Valenciano', 'Balear', 'Euskera','Gallego','Asturiano','Frances','Ingles','Aleman','Italiano'),
    precio FLOAT NOT NULL,
    formato ENUM('Tapa dura', 'Tapa blanda', 'Bolsillo', 'Edicion coleccionista','eBook'),
    anio_publicacion INT,
    sinopsis TEXT,
    fk_id_editorial INT,
    fk_id_genero INT,
    FOREIGN KEY (fk_id_editorial) REFERENCES editoriales (pk_id_editorial),
    FOREIGN KEY (fk_id_genero) REFERENCES generos (pk_id_genero),
    caratula VARCHAR(200)
);
CREATE TABLE libro_autor(
    fk_id_autor INT,
    fk_id_libro INT,
    FOREIGN KEY (fk_id_autor) REFERENCES autores (pk_id_autor),
    FOREIGN KEY (fk_id_libro) REFERENCES libros (pk_id_libro)
);
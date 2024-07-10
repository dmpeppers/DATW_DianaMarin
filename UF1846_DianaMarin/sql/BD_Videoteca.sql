CREATE DATABASE BD_VIDEOTECA;
USE BD_VIDEOTECA
CREATE TABLE VIDEOTECA(
    pk_id_videoteca INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    actor VARCHAR(50) NOT NULL,
    actriz VARCHAR(50) NOT NULL,
    director VARCHAR(50) NOT NULL,
    duracion INT(11),
    anio INT(11),
    cartel_pelicula VARCHAR(255) NOT NULL,
);
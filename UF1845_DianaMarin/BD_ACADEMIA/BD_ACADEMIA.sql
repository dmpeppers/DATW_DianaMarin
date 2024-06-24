-- PUNTO 1. CREACION DE LA BASE DE DATOS
CREATE DATABASE BD_ACADEMIA;
USE BD_ACADEMIA
CREATE TABLE DEPARTAMENTO(
    pk_id_departamento INT PRIMARY KEY AUTO_INCREMENT,
    cod_departamento VARCHAR(30) UNIQUE,
    nombre_departamento VARCHAR(50) NOT NULL
);
CREATE TABLE PROFESOR(
    pk_id_profesor INT PRIMARY KEY AUTO_INCREMENT,
    id_profesor INT UNIQUE,
    dni_profesor CHAR(9) UNIQUE,
    nombre_profesor VARCHAR(50) NOT NULL,
    apellido1_profesor VARCHAR(50) NOT NULL,
    apellido2_profesor  VARCHAR(50) NOT NULL,
    fk_id_departamento INT,
    FOREIGN KEY (fk_id_departamento) REFERENCES DEPARTAMENTO (pk_id_departamento)
);
-- como tenemos una relacion de N:M de la matricula de la asignatura y el alumno, se crea primero la tabla con la informacion hasta el FOREIGN KEY profesor
CREATE TABLE ASIGNATURA(
    pk_id_asignatura INT PRIMARY KEY AUTO_INCREMENT,
    cod_asignatura VARCHAR(30) UNIQUE,
    nombre_asignatura  VARCHAR(50) NOT NULL,
    numero_horas INT,
    fk_id_profesor INT,
    FOREIGN KEY (fk_id_profesor) REFERENCES PROFESOR (pk_id_profesor)
);
-- luego creo la tabla alumno añadiendo el FOREIGN KEY de la asignatura
CREATE TABLE ALUMNO(
    pk_id_alumno INT PRIMARY KEY AUTO_INCREMENT,
    id_alumno INT UNIQUE,
    dni_alumno CHAR(9) UNIQUE,
    nombre_alumno VARCHAR(50) NOT NULL,
    apellido1_alumno VARCHAR(50) NOT NULL,
    apellido2_alumno  VARCHAR(50) NOT NULL
);
-- para poder relacionar la tabla de alumno con la de asignatura 
-- CREAMOS Tabla de matricula 
CREATE Table MATRICULA(
    pk_id_matricula INT AUTO_INCREMENT,
    cod_matricula VARCHAR(20),
    fk_id_asignatura INT,
    fk_id_alumno INT,
    anio INT NOT NULL,
    PRIMARY KEY (pk_id_matricula, fk_id_asignatura, fk_id_alumno),
    FOREIGN KEY (fk_id_asignatura) REFERENCES ASIGNATURA (pk_id_asignatura),
    FOREIGN KEY (fk_id_alumno) REFERENCES ALUMNO (pk_id_alumno)
);

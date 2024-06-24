-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2024 a las 13:07:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_academia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `pk_id_alumno` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `dni_alumno` char(9) DEFAULT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `apellido1_alumno` varchar(50) NOT NULL,
  `apellido2_alumno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`pk_id_alumno`, `id_alumno`, `dni_alumno`, `nombre_alumno`, `apellido1_alumno`, `apellido2_alumno`) VALUES
(1, 241231, '9999999S', 'Eduardo ', 'Emiratos', 'Entaño'),
(2, 241232, '4444444W', 'Franny', 'Fortuna', 'Funda'),
(3, 241233, '555555555', 'Graciela', 'Gomez', 'Gonzales'),
(4, 241234, '666666666', 'Hacinta', 'Hortiz', 'Hortiz'),
(6, 241235, 'X3333333G', 'Ilusion', 'Indira', 'Indira'),
(7, 241236, '2222222J', 'Javier', 'Jaramillo', 'Jaramillo'),
(8, 241237, '11111111K', 'Ximena', 'Xenadio', 'Xenadio'),
(9, 241238, '0015161W', 'Wilmer', 'Washinton', 'Washinton'),
(10, 241239, '8465556B', 'Pamela', 'Pasto', 'Posta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `pk_id_asignatura` int(11) NOT NULL,
  `cod_asignatura` varchar(30) DEFAULT NULL,
  `nombre_asignatura` varchar(50) NOT NULL,
  `numero_horas` int(11) DEFAULT NULL,
  `fk_id_profesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`pk_id_asignatura`, `cod_asignatura`, `nombre_asignatura`, `numero_horas`, `fk_id_profesor`) VALUES
(1, 'INFORMATICA1', 'BASE DE DATOS', 200, 1),
(2, 'INFORMATICA2', 'LENGUAJE DE MARCAS', 500, 2),
(3, 'INFORMATICA3', 'SEGURIDAD INFORMATICA', 300, 1),
(4, 'IDIOMAS1', 'INGLES', 800, 3),
(5, 'IDIOMAS2', 'CHINO', 793, 4),
(6, 'IDIOMAS3', 'ALEMAN', 8000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `pk_id_departamento` int(11) NOT NULL,
  `cod_departamento` varchar(30) DEFAULT NULL,
  `nombre_departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`pk_id_departamento`, `cod_departamento`, `nombre_departamento`) VALUES
(1, 'INFO_001', 'INFORMATICA'),
(2, 'IDIOMAS_001', 'IDIOMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `pk_id_matricula` int(11) NOT NULL,
  `cod_matricula` varchar(20) DEFAULT NULL,
  `fk_id_asignatura` int(11) NOT NULL,
  `fk_id_alumno` int(11) NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`pk_id_matricula`, `cod_matricula`, `fk_id_asignatura`, `fk_id_alumno`, `anio`) VALUES
(1, '202400001E', 1, 1, 2025),
(2, '202400001E', 1, 2, 2025),
(3, '202400001E', 1, 6, 2025),
(4, '202400001E', 1, 8, 2025),
(5, '202400001E', 1, 10, 2025),
(6, '202400045Y', 2, 1, 2025),
(7, '202400045Y', 2, 2, 2025),
(8, '202400045Y', 2, 4, 2025),
(9, '202400045Y', 2, 7, 2025),
(10, '202400088P', 3, 3, 2025),
(11, '202400088P', 3, 6, 2025),
(12, '202400088P', 3, 7, 2025),
(13, '202400088P', 3, 9, 2025),
(14, '202400088P', 3, 10, 2025),
(15, '202400077U', 4, 2, 2025),
(16, '202400077U', 4, 3, 2025),
(17, '202400077U', 4, 6, 2025),
(18, '202400077U', 4, 8, 2025),
(19, '202400077U', 4, 9, 2025),
(20, '202400099L', 5, 1, 2025),
(21, '202400099L', 5, 4, 2025),
(22, '202400099L', 5, 3, 2025),
(23, '202400099L', 5, 2, 2025),
(24, '202400555M', 6, 10, 2025),
(25, '202400555M', 6, 9, 2025),
(26, '202400555M', 6, 7, 2025),
(27, '202400555M', 6, 4, 2025);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `pk_id_profesor` int(11) NOT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `dni_profesor` char(9) DEFAULT NULL,
  `nombre_profesor` varchar(50) NOT NULL,
  `apellido1_profesor` varchar(50) NOT NULL,
  `apellido2_profesor` varchar(50) NOT NULL,
  `fk_id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`pk_id_profesor`, `id_profesor`, `dni_profesor`, `nombre_profesor`, `apellido1_profesor`, `apellido2_profesor`, `fk_id_departamento`) VALUES
(1, 1, '3520000E', 'Diana', 'Marin', 'Zamora', 1),
(2, 2, '3520000', 'Carlos', 'Osorio', 'Maldiva', 1),
(3, 3, '88888888f', 'Angela', 'Amarillo', 'Anturio', 2),
(4, 4, '777777D', 'Beatriz', 'Bermudez', 'Bologna', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`pk_id_alumno`),
  ADD UNIQUE KEY `id_alumno` (`id_alumno`),
  ADD UNIQUE KEY `dni_alumno` (`dni_alumno`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`pk_id_asignatura`),
  ADD UNIQUE KEY `cod_asignatura` (`cod_asignatura`),
  ADD KEY `fk_id_profesor` (`fk_id_profesor`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`pk_id_departamento`),
  ADD UNIQUE KEY `cod_departamento` (`cod_departamento`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`pk_id_matricula`,`fk_id_asignatura`,`fk_id_alumno`),
  ADD KEY `fk_id_asignatura` (`fk_id_asignatura`),
  ADD KEY `fk_id_alumno` (`fk_id_alumno`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`pk_id_profesor`),
  ADD UNIQUE KEY `id_profesor` (`id_profesor`),
  ADD UNIQUE KEY `dni_profesor` (`dni_profesor`),
  ADD KEY `fk_id_departamento` (`fk_id_departamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `pk_id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `pk_id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `pk_id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `pk_id_matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `pk_id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`pk_id_profesor`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`fk_id_asignatura`) REFERENCES `asignatura` (`pk_id_asignatura`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`fk_id_alumno`) REFERENCES `alumno` (`pk_id_alumno`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`fk_id_departamento`) REFERENCES `departamento` (`pk_id_departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

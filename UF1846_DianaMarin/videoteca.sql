-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2024 a las 11:14:55
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
-- Base de datos: `bd_videoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videoteca`
--

CREATE TABLE `videoteca` (
  `pk_id_videoteca` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actriz` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `duracion` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `cartel_pelicula` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videoteca`
--

INSERT INTO `videoteca` (`pk_id_videoteca`, `titulo`, `actor`, `actriz`, `director`, `duracion`, `anio`, `cartel_pelicula`) VALUES
(2, 'BEING THE RECARDOS', 'Javier Bardem', 'Nicole Kidman', 'Aaron Sorkin', 131, 2021, 'img/Being_the_Ricardos.jpg'),
(3, 'CHACAL', 'Edward Fox', 'Delphine Seyrig', 'Fred Zinnemann', 145, 1973, 'img/chacal.png'),
(4, 'DESPERADO', 'Antonio Banderas', 'Salma Hayek', 'Robert Rodriguez', 106, 1995, 'img/desperado.jpg'),
(5, 'DRAGONES Y MAZMORRAS: honor entre ladrones', 'Chris Pine', 'Michelle Rodrigez', 'Jonathan Goldstein', 134, 2023, 'img/dungeons-dragons-honor-entre-ladrones-original.jpg'),
(6, 'EL BECARIO', 'Robert de Niro', 'Anne Hathaway', 'Nancy Meyers', 121, 2015, 'img/el_becario.jpg'),
(7, 'INDIANA JONES Y EL DIA DEL DESTINO', 'Harrison Ford', 'Phoebe Waller-Bridge', 'James Mangold', 153, 2023, 'img/indiana-jones-dial-destino-5.jpg'),
(8, 'INDIANA JONES Y EL TEMPLO MALDITO', 'Harrison Ford', 'Kate Capshaw', 'Steven Spielberg', 118, 1984, 'img/indiana_jones_and_the_temple_of_doom.jpg'),
(9, 'INDIANA JONES Y LA CALAVERA DE CRISTAL', 'Harrison Ford', 'Cate Blanchett', 'Steven Spielberg', 122, 2008, 'img/indiana_jones_and_the_kingdom_of_the_crystal_skull_indiana_jones_4.jpg'),
(10, 'INDIANA JONES Y LA ULTIMA CRUZADA', 'Harrison Ford', 'Alison Doody', 'Steven Spielberg', 127, 1989, 'img/indiana_jones_and_the_last_crusade.jpg'),
(11, 'INDIANA JONES: EN BUSCA DEL ARCA PERDIDA', 'Harrison Ford', 'Karen Allen', 'Steven Spielberg', 115, 1981, 'img/Indiana_Jones1.jpg'),
(12, 'LOS VENGADORES', 'Robert Downey Jr', 'Scarlett Johansson', 'Joss Whedon', 143, 2012, 'img/los_vengadores1.jpg'),
(13, 'LOS VENGADORES: LA ERA DE ULTRON', 'Robert Downey Jr', 'Scarlett Johansson', 'Joss Whedon', 141, 2015, 'img/los_vengadores2.jpg'),
(14, 'PROMETHEUS', 'Michael Fassbender', 'Charlize Theron', 'Ridley Scott', 124, 2012, 'img/prometheus.jpg'),
(15, 'TOP GUN: MAVERICK', 'Tom Cruise', 'Jennifer Connelly', 'Joseph Kosinski', 130, 2022, 'img/top-gun-maverick.jpg'),
(16, 'TORRENTE', 'Santiago Segura', 'Neus Asensi', 'Santiago Segura', 97, 1998, 'img/torrente.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videoteca`
--
ALTER TABLE `videoteca`
  ADD PRIMARY KEY (`pk_id_videoteca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `videoteca`
--
ALTER TABLE `videoteca`
  MODIFY `pk_id_videoteca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

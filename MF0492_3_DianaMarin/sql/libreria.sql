SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `libreria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `libreria`;

CREATE TABLE `autores` (
  `pk_id_autor` int(11) NOT NULL,
  `dni` char(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) NOT NULL,
  `email` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` char(12) DEFAULT NULL,
  `nacionalidad` enum('España','Venezuela','Colombia','Francia','Estados Unidos','Alemania','Reino Unido','Italia','China','Japon','India') DEFAULT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `autores` (`pk_id_autor`, `dni`, `nombre`, `apellido1`, `apellido2`, `email`, `web`, `direccion`, `telefono`, `nacionalidad`, `comentarios`) VALUES
(1, '09000000E', 'Arturo', 'Pérez Reverte', '', '', 'https://www.perezreverte.com/', '', NULL, 'España', NULL),
(2, '5621321', 'Brandon', 'Sanderson', '', '', 'https://www.brandonsanderson.com/', '', NULL, 'Estados Unidos', NULL),
(3, '5465454', 'Isaac', 'Asimov', '', '', 'http://www.asimovonline.com/asimov_home_page.html', '', NULL, 'Estados Unidos', NULL),
(4, '654654654', 'JRR', 'Tolkien', '', '', 'https://www.tolkienestate.com/', '', NULL, 'Reino Unido', NULL),
(5, '5454545', 'Gabriel', 'García', '', '', 'https://www.gabrielgarciamarquezfundacion.com/', '', NULL, 'Colombia', NULL),
(6, '7485', 'Eduardo', 'Mendoza', '', '', 'https://es.wikipedia.org/wiki/Eduardo_Mendoza', '', NULL, 'España', NULL),
(7, '546545qw4', 'Jean', 'Austen', '', '', 'https://es.wikipedia.org/wiki/Jane_Austen', '', NULL, 'Reino Unido', NULL),
(8, '222222', 'Charles', 'Dickens', '', '', 'https://es.wikipedia.org/wiki/Charles_Dickens', '', NULL, 'Reino Unido', NULL),
(9, '33333', 'Elisabet', 'Benavent', '', '', 'https://betacoqueta.com/', '', NULL, 'España', NULL),
(10, '88888', 'Valeria', 'Vegas', '', '', 'https://es.wikipedia.org/wiki/Valeria_Vegas', '', NULL, 'España', NULL),
(11, '666666', 'J.K.', 'Rowling', '', '', 'https://www.jkrowling.com/', '', NULL, 'Reino Unido', NULL),
(12, '9999', 'Victoria', 'Frances', '', '', 'https://es.wikipedia.org/wiki/Victoria_Franc%C3%A9s', '', NULL, 'España', NULL),
(13, '787256', 'Mariona', 'Nadal', '', '', 'https://es.linkedin.com/in/marionanadal?original_referer=https%3A%2F%2Fwww.bing.com%2F', '', NULL, 'España', NULL),
(14, '84855899', 'Paolo', 'Aliverti', '', '', 'https://www.casadellibro.com/libro-reparar-casi-cualquier-cosa/9788426726391/6797269', '', NULL, 'Italia', NULL),
(15, '54512', 'Paul Allen', 'Tipler', '', '', 'https://www.casadellibro.com/libros-ebooks/paul-allen-tipler/20108187', '', NULL, 'Estados Unidos', NULL),
(16, '894521', 'Gene', 'Mosca', '', '', 'https://www.casadellibro.com/libros-ebooks/gene-mosca/109937', '', NULL, 'Estados Unidos', NULL),
(17, '84623894', 'Santiago', 'Posteguillo', '', '', '', '', NULL, 'España', NULL),
(18, '6541FQQFQ', 'RICK', 'RIORDAN', 'M', 'RICK_@RIORDAN.COM', 'rickriordan.com', 'Calle cean Bermudez 11, 33208', '7845612', 'Estados Unidos', '');

CREATE TABLE `editoriales` (
  `pk_id_editorial` int(11) NOT NULL,
  `nombre_editorial` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` char(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `editoriales` (`pk_id_editorial`, `nombre_editorial`, `direccion`, `telefono`, `email`, `web`, `comentarios`) VALUES
(1, 'Anaya Multimedia', 'C/ Rosa Sensat, 9-11. 08005 - Barcelona (España)', '646213849', 'anaymultimedia@contacto.es', 'https://anayamultimedia.es/', NULL),
(2, 'Ediciones ENI', 'Pº Ferrocarriles Catalanes, 97-117, 2ª pl., oficina 18 08940 - Cornellá de Llobregat, Barcelona', '+34934246401', 'pedidos@ediciones-eni.com', 'https://www.ediciones-eni.com/', NULL),
(3, 'Marcombo', '', '+34933180079', 'rie@marcombo.com', 'https://www.marcombo.com/', NULL),
(4, 'RC libros', 'Cl. Mar Mediterráneo, 2. Nv. 6 28830 - San Fernando de Henares Madrid', '+34916775722', 'info@rclibros.es', 'https://rclibros.es/', NULL),
(5, 'RA-MA', 'Cl. Jarama, 33 - Pol. Industrial IGARSA 28860 Paracuellos de Jarama España', '+34916584280', 'info@grupoeditorialrama.com', 'https://www.ra-ma.es/', NULL),
(6, 'Penguin', 'Travessera de Gràcia 47-49, 08021 Barcelona', '+34933660300', 'mail@penguin.es', 'https://www.penguinlibros.com/es/', NULL),
(7, 'Hoja de Lata editorial S.L.', 'Camino del Lucero, 15, bajo izda. (esquina C/ Pachín de Melás) 33212 Xixón, Asturies, España', '+34609736028', 'info@hojadelata.net', 'https://www.hojadelata.net/', NULL),
(8, 'Editorial La Felguera', 'S.L., calle Cava Alta 17, 28005, Madrid', '', 'lafelguera@nodo50.org', 'https://lafelguera.net/', NULL),
(9, 'Norma editorial', 'Passeig de Sant Joan 7 08010 Barcelona.', '933036820', 'norma@normaeditorial.com', 'https://www.normaeditorial.com/', NULL),
(10, 'Grupo Planeta', 'Av. Diagonal, 662-664 08034 Barcelona - España', '', 'foreignrights@gmail.com', 'https://www.planetadelibros.com/', NULL);

CREATE TABLE `generos` (
  `pk_id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(50) NOT NULL,
  `comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `generos` (`pk_id_genero`, `nombre_genero`, `comentarios`) VALUES
(1, 'Ciencia ficción', NULL),
(2, 'Fantasia', NULL),
(3, 'Histórica', NULL),
(4, 'Romántica', NULL),
(5, 'Aventuras', NULL),
(6, 'Terror', NULL),
(7, 'Autoayuda', NULL),
(8, 'Matemáticas', NULL),
(9, 'Física', NULL),
(10, 'Ciencias naturales', NULL),
(11, 'Cocina', NULL),
(12, 'Juegos educativos', NULL),
(13, 'Hobbies', NULL),
(14, 'Medicina', NULL),
(15, 'Ensayo', NULL),
(16, 'Filosofía', NULL),
(17, 'Poesía', NULL),
(18, 'Teatro', NULL),
(19, 'Novela gráfica', NULL),
(20, 'Cómic', NULL),
(21, 'Biografía', NULL),
(22, 'Novela negra', NULL),
(23, 'Arte', NULL),
(24, 'Juvenil', NULL),
(25, 'Infantil', NULL),
(26, 'Informática', NULL),
(27, 'Otro', NULL),
(28, 'Astrología', NULL),
(32, 'Astronomía', '');

CREATE TABLE `libros` (
  `pk_id_libro` int(11) NOT NULL,
  `isbn10` char(10) NOT NULL,
  `isbn13` char(13) NOT NULL,
  `caratula` varchar(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `paginas` int(11) NOT NULL,
  `idioma` enum('Español','Catalan','Valenciano','Balear','Euskera','Gallego','Asturiano','Frances','Ingles','Aleman','Italiano') DEFAULT NULL,
  `precio` float NOT NULL,
  `formato` enum('Tapa dura','Tapa blanda','Bolsillo','Edicion coleccionista','eBook') DEFAULT NULL,
  `anio_publicacion` int(11) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `fk_id_editorial` int(11) DEFAULT NULL,
  `fk_id_genero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `libros` (`pk_id_libro`, `isbn10`, `isbn13`, `caratula`, `titulo`, `paginas`, `idioma`, `precio`, `formato`, `anio_publicacion`, `sinopsis`, `fk_id_editorial`, `fk_id_genero`) VALUES
(2, 'FI100024', 'FI10002456', 'img/percyjacksonladronrayo.jpg', 'Percy Jackson y los dioses del Olimpo 1', 300, 'Ingles', 58, 'Tapa dura', 2013, 'El ladrón del rayo da comienzo a la serie «Percy Jackson y los Dioses del Olimpo».\r\n\r\nAcompaña a Percy a través de esta apasionante serie de aventuras sobre un mundo secreto, el mundo que los antiguos dioses griegos han recreado a nuestro alrededor en pleno siglo XXI.\r\n\r\n¿Qué pasaría si un día descubrieras que, en realidad, eres hijo de un dios griego que debe cumplir una misión secreta?\r\n\r\nPues eso es lo que le sucede a Percy Jackson, que a partir de ese momento se dispone a vivir los acontecimientos más emocionantes de su vida.\r\n\r\nExpulsado de seis colegios, Percy padece dislexia y dificultades para concentrarse, o al menos ésa es la versión oficial. Objeto de burlas por inventarse historias fantásticas, ni siquiera él mismo acaba de creérselas hasta el día que los dioses del Olimpo le revelan la verdad: Percy es nada menos que un semidiós, es decir, el hijo de un dios y una mortal. Y como tal ha de descubrir quién ha robado el rayo de Zeus y así evitar que estalle una guerra entre los dioses. Para cumplir la misión contará con la ayuda de sus amigos Grover, un joven sátiro, y Annabeth, hija de Atenea.', 10, 2),
(3, 'FI2000456', 'FI200045678', 'img/harrypotter.png', 'Harry Potter y la piedra filosofal', 400, 'Español', 80, 'Edicion coleccionista', 1996, 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y el insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado como alumno en el Colegio Hogwarts de Magia. A partir de ese momento, la suerte de Harry da un vuelco espectacular. En esa escuela tan especial aprenderá encantamientos, trucos fabulosos y tácticas de defensa contra las malas artes. Se convertirá en el campeón escolar de Quidditch, especie de fútbol aéreo que se juega montado sobre escobas, y hará un puñado de buenos amigos... aunque también algunos temibles enemigos. Pero, sobre todo, conocerá los secretos que le permitirán cumplir su destino. Pues, aunque no lo parezca a primera vista, Harry no es un chico común y corriente: ¡es un verdadero mago!', 4, 1),
(4, '8420484628', '8420484628465', 'img/fisicacuqnticagatozombi.jpg', 'Cómo explicar física cuántica con un gato zombi', 200, 'Asturiano', 90, 'Bolsillo', 2023, '¿Sabías que el teletransporte es real? ¿Que a veces un electrón tiene probabilidades de atravesar una pared? ¿Que dos partículas pueden influenciarse mutuamente aunque estén a años luz de distancia? ¿Y que las partículas cuánticas son como Clark Kent y disimulan sus poderes cuando los científicos las están observando?\r\n\r\nEn Cómo explicar la física cuántica con un gato zombi descubrirás que, aunque no lo parezca, la física cuántica está por todas partes en nuestra vida cotidiana. Y además aprenderás...\r\n\r\n...¡los principios más locos y flipantes de la física cuántica!\r\n\r\n...¡experimentos low cost que puedes hacer en tu casa!', 6, 9),
(5, '9788491048', '9788491048961', 'img/janeery.jpg', 'JANE EYRE', 656, 'Frances', 14, 'Tapa blanda', 2017, 'Dueña de un singular temperamento desde su complicada infancia de huérfana, primero a cargo de una tía poco cariñosa y después en la escuela Lowood, Jane Eyre logra el puesto de institutriz en Thornfield Hall para educar a la hija de su atrabiliario y peculiar dueño, el señor Rochester. Poco a poco, el amor irá tejiendo su red entre ellos, pero la casa y la vida de Rochester guardan un estremecedor y terrible misterio.\r\nDueña de un singular temperamento desde su complicada infancia de huérfana, primero a cargo de una tía poco cariñosa y después en la escuela Lowood, Jane Eyre logra el puesto de institutriz en Thornfield Hall para educar a la hija de su atrabiliario y peculiar dueño, el señor Rochester. Poco a poco, el amor irá tejiendo su red entre ellos, pero la ', 7, 3),
(6, '546132548A', '546132548ASF', 'img/excalibur.jpg', 'EXCALIBUR', 800, 'Aleman', 23, 'eBook', 2016, 'En sus ansias por reunir de una vez por todas los trece objetos esparcidos por toda Britania, Merlín y Nimue encargan a Derfel Cardan que obtenga el último de ellos: la mítica espada del rey Arturo, Excalibur. Dos terribles luchas en las que la religión y la política están inextricablemente ligadas.\r\nMientras los hombres de Arturo se preparan para afrontar la batalla decisiva contra los sajones invocando a sus dioses, Merlín y Nimue inician un sangriento ritual que implica el sacrificio de un rey. Sin embargo, por extraños caminos en los que se cruza el cautiverio de Ginebra a manos de Morgana, los hechiceros y el rey Arturo unirán sus fuerzas para enfrentarse a una nueva invación de Dumnonia emprendida por los sajones, cuyo desenlace será la terrible y violentísima batalla de Camlann. La mítica isla de Avalon les espera al final de este tortuoso camino, pero no todos los héroes llegarán a ella.', 2, 4),
(7, '8989898AAA', '8989898AAA', 'img/nannyalien.jpg', 'THE NANNY AND THE ALIEN WARRIOR', 421, 'Italiano', 60, 'Edicion coleccionista', 2014, 'Joanna is snatched away from her peaceful academic life and sold to K’herr, a forbidding alien warlord. To her relief, he only wants her as a caretaker for his precocious daughter, Sultavi.\r\n\r\nA year later, Lord K’herr is dead, and Joanna and Sultavi are on the run from his killers. Their only hope is to locate a down-on-his-luck mercenary who owes K’herr a debt of honor. Joanna doesn’t expect to find a massive green warrior with the saddest eyes she’s ever seen.\r\n\r\nCraxan lost his family and his future in the great plague that decimated the Cire race. Since then, he’s led a hollow life using his warrior skills for anyone who can pay.', 4, 19),
(8, '752852HOKL', '752852HOKL', 'img/bridgerton.jpg', 'Seduciendo a Mr. Bridgerton', 1230, 'Ingles', 88, 'Tapa blanda', 2020, 'A sus veintiocho años, Penélope se ha resignado ya a convertirse en una solterona destinada a envejecer cuidando a su madre. Durante una década, ha asistido a todas las fiestas de la aristocracia londinense, y siempre ha sido la muchacha mediocre, callada, la que nadie saca a bailar más que por compromiso, la que pasa inadvertida para todos. También para Colin Bridgerton, hermano de la mejor amiga de Penélope, guapo, audaz, soltero de oro... y su amor platónico desde siempre. Para Colin, Penélope siempre ha estado ahí, á simpática, agradable, pero casi invisible. ¿Cómo es posible que todo cambie de repente? Sin saber bien cómo, el menor de los Bridgerton descubre a una mujer inteligente, sensible, audaz... y muy atractiva. Durante años se han conocido casi como hermanos, y de repente se dan cuenta de que no saben nada el uno del otro. Pero no todo lo que descubrirán va a resultar tan placentero...', 2, 5),
(9, '848574KDW', '848574KPQJDW', 'img/cursophp.jpg', 'CURSO DE PHP 8 Y MYSQL 8', 302, 'Español', 42, 'eBook', 2019, 'PHP es uno de los lenguajes más utilizados en Internet y está presente en aplicaciones muy conocidas como WordPress, Joomla, Moodle o el propio Facebook.', 1, 26);

CREATE TABLE `libro_autor` (
  `fk_id_autor` int(11) DEFAULT NULL,
  `fk_id_libro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `libro_autor` (`fk_id_autor`, `fk_id_libro`) VALUES
(11, 3),
(1, 6),
(18, 2),
(3, 4),
(17, 9),
(15, 7),
(7, 5),
(14, 8);


ALTER TABLE `autores`
  ADD PRIMARY KEY (`pk_id_autor`),
  ADD UNIQUE KEY `dni` (`dni`);

ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`pk_id_editorial`);

ALTER TABLE `generos`
  ADD PRIMARY KEY (`pk_id_genero`);

ALTER TABLE `libros`
  ADD PRIMARY KEY (`pk_id_libro`),
  ADD UNIQUE KEY `isbn10` (`isbn10`),
  ADD UNIQUE KEY `isbn13` (`isbn13`),
  ADD KEY `fk_id_editorial` (`fk_id_editorial`),
  ADD KEY `fk_id_genero` (`fk_id_genero`);

ALTER TABLE `libro_autor`
  ADD KEY `fk_id_autor` (`fk_id_autor`),
  ADD KEY `fk_id_libro` (`fk_id_libro`);


ALTER TABLE `autores`
  MODIFY `pk_id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `editoriales`
  MODIFY `pk_id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `generos`
  MODIFY `pk_id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

ALTER TABLE `libros`
  MODIFY `pk_id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`fk_id_editorial`) REFERENCES `editoriales` (`pk_id_editorial`),
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`fk_id_genero`) REFERENCES `generos` (`pk_id_genero`);

ALTER TABLE `libro_autor`
  ADD CONSTRAINT `libro_autor_ibfk_1` FOREIGN KEY (`fk_id_autor`) REFERENCES `autores` (`pk_id_autor`),
  ADD CONSTRAINT `libro_autor_ibfk_2` FOREIGN KEY (`fk_id_libro`) REFERENCES `libros` (`pk_id_libro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

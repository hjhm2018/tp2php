-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2018 a las 23:06:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(40) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `Titulo`, `Descripcion`, `Direccion`) VALUES
(3, 'TITULO3ASDSASDA', 'ASDASDASDASDSAD', 'FotoGoogle.png'),
(4, 'Titulo4asdasd', 'agsdasdasdgasdg', 'mysqllogo.jpg'),
(5, 'titulo5asdgdasg', 'asfdasdfasdffasd', 'mysqllogo.jpg'),
(6, 'Titulo6sdfafasd', 'asdfdfasasdfasdfasdf', 'mysqllogo.jpg'),
(7, 'LALALALAL', '5444444444444444444444444444444444444444', 'mysqllogo.jpg'),
(8, 'Elephantidae', 'Los elefantes o elefÃ¡ntidos (Elephantidae) son una familia de mamÃ­feros placentarios del orden Proboscidea. Antiguamente se clasificaban, junto con otros mamÃ­feros de piel gruesa, en el orden, ahora invÃ¡lido, de los paquidermos (Pachydermata). Existen hoy en dÃ­a tres especies y diversas subespecies. Entre los gÃ©neros extintos de esta familia destacan los mamuts.\r\nLos elefantes son los animales terrestres mÃ¡s grandes que existen en la actualidad.  El periodo de gestaciÃ³n es de 22 meses, el mÃ¡s largo en cualquier animal terrestre. El peso al nacer usualmente es 120 kg. Normalmente viven de 50 a 70 aÃ±os, pero registros antiguos documentan edades mÃ¡ximas de 82 aÃ±os.  El elefante mÃ¡s grande que se ha cazado, de los que se tiene registro, pesÃ³ alrededor de 11 000 kg (Angola, 1956),  alcanzando una altura en la cruz de 3,96 m, un metro mÃ¡s alto que el elefante africano promedio.  El elefante mÃ¡s pequeÃ±o, de alrededor del tamaÃ±o de una crÃ­a o un cerdo grande, es una especie ', 'Elefantes.jpg'),
(9, 'Formicidae', 'Los formÃ­cidos (Formicidae), conocidos comÃºnmente como hormigas, son una familia de insectos eusociales que, como las avispas y las abejas, pertenecen al orden de los himenÃ³pteros. Las hormigas evolucionaronde antepasados similares a una avispa a mediados del CretÃ¡ceo, hace entre 110 y 130 millones de aÃ±os, diversificÃ¡ndose tras la expansiÃ³n de las plantas con flor por el mundo. Son uno de los grupos zoolÃ³gicos de mayor Ã©xito, con cerca de 14 000 especies descritas, aunque se estima que pueden ser mÃ¡s de 22 000. Se identifican fÃ¡cilmente por sus antenas en Ã¡ngulo y su estructura en tres secciones con una estrecha cintura. La rama de la entomologÃ­a que las estudia se denomina mirmecologÃ­a.\r\nForman colonias de un tamaÃ±o que se extiende desde unas docenas de individuos predadores que viven en pequeÃ±as cavidades naturales, a colonias muy organizadas que pueden ocupar grandes territorios compuestas por millones de individuos. Estas grandes colonias consisten sobre todo en he', 'Hormiga.jpg'),
(10, 'Panthera leonida', 'ewtwetwetwetwetwetwetwetwetwetwetwet\r\nSi sobreviven a las dificultades de la infancia, las leonas que viven e', ''),
(11, 'Panthera tigris', 'El tigre (Panthera tigris) es una de las cuatro especies de la subfamilia de los panterinos (familia Felidae) pertenecientes al gÃ©nero Panthera. Se encuentra solamente en el continente asiÃ¡tico; es un predador carnÃ­voro y es la especie de fÃ©lido mÃ¡s grande del mundo junto con el leÃ³n pudiendo alcanzar ambos un tamaÃ±o comparable al de los fÃ³siles de fÃ©lidos de mayor tamaÃ±o.\r\nExisten seis subespecies de tigre, de las cuales la de Bengala es la mÃ¡s numerosa; sus ejemplares constituyen cerca del 80 % de la poblaciÃ³n total de la especie; se encuentra en la India, BangladÃ©s, ButÃ¡n, Birmania y Nepal. Es una especie en peligro de extinciÃ³n,  y en la actualidad, la mayor parte de los tigres en el mundo viven en cautiverio. El tigre es el animal nacional de Bangladesh y la India. \r\nEs un animal solitario y territorial que generalmente suele habitar bosques densos, pero tambiÃ©n Ã¡reas abiertas, como sabanas. Normalmente, el tigre caza animales de tamaÃ±o medio o grande, generalmen', 'Tigre.jpg'),
(12, 'Selachimorphafafa', '1321516515\r\nSe caracterizan por ser grandes depredadores. Los tiburones incluyen desde especies pequeÃƒÂ±as de las profundidades marinas, hasta el tiburÃƒÂ³n ballena, el mayor de los peces, el cual se cree puede llegar a medir una longitud de 18 m y se alimenta ÃƒÂºnicamente de plancton. El tiburÃƒÂ³n sarda puede desplazarse a agua dulce y algunos ataques de tiburones han ocurrido en rÃƒÂ­os. Algunas de las especies mayores, en especial el tiburÃƒÂ³n makoy el tiburÃƒÂ³n blanco, son endotermos parciales, capaces de mantener parcialmente su temperatura corporal por encima de la que tiene el medio acuÃƒÂ¡tico en el que viven. De las mÃƒÂ¡s de 375 e', ''),
(13, 'Panthera leo', 'instanciamos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

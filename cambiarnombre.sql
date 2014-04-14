-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2013 a las 23:10:37
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cambiarnombre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2A6A65D8D93D649` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `user`) VALUES
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nombre` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `langelier` tinyint(4) NOT NULL,
  `rysnar` tinyint(4) NOT NULL,
  `puckorius` tinyint(4) NOT NULL,
  `informacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `autoguardado` tinyint(4) NOT NULL,
  `ph` float NOT NULL,
  `tds` float NOT NULL,
  `t` float NOT NULL,
  `ca2` float NOT NULL,
  `alcalinidad` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `user`, `fecha`, `nombre`, `langelier`, `rysnar`, `puckorius`, `informacion`, `autoguardado`, `ph`, `tds`, `t`, `ca2`, `alcalinidad`) VALUES
(8, 1, '2013-09-07 00:49:26', 'ejemplo1', 1, 1, 1, 'este es un proyecto de prueba3', 0, 1, 1, 1, 1, 4),
(9, 1, '2013-09-06 23:52:27', 'ejemplo2', 1, 1, 1, 'este es un texto de ejemplo', 1, 7, 6, 6, 6, 65),
(10, 1, '2013-09-07 00:50:21', 'bien', 1, 1, 0, 'excelente', 1, 7, 8, 9, 7, 0),
(11, 1, '2013-09-10 22:33:27', 'probando', 1, 0, 0, 'bien', 1, 7.5, 320, 25, 150, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE IF NOT EXISTS `sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcioncorta` longtext COLLATE utf8_unicode_ci NOT NULL,
  `descripcionlarga` longtext COLLATE utf8_unicode_ci NOT NULL,
  `acercade` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`id`, `nombre`, `version`, `descripcioncorta`, `descripcionlarga`, `acercade`) VALUES
(1, 'SDIS', 'V.1.0', 'Software para la determinacion de indices de Saturacion', 'La elaboración de un softwareque permita vigilar constantemente el comportamiento de los índices de saturación del agua para conocer si existe la formación de  incrustaciones o corrosión en los equipos de tratamiento, puede simplificar las tareas en la determinación de estos problemas en cualquier sección del transporte de las aguas de producción, la cantidad de materiales incrustantes en el agua y si estos pueden ser disueltos o no por ella.', 'Desarrollado por los bachilleres DANIEL JOSÉ MENESES LÁREZ & JUAN CARLOS LOPERA HURTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `apellido`, `username`, `salt`, `password`, `email`, `sexo`, `is_active`, `path`, `descripcion`) VALUES
(1, 'jonathan', 'araul', 'Jonathan.araul', 'e1508464552a0178374563db109a450f', '8c09316865a0145de4f3a4a0cacd52e189582c07', 'Jonthan.araul@gmail.com', 0, 1, 'avatars/jonathan-araul.jpg', '&lt;p&gt;&lt;span class=\\&quot;text-success\\&quot;&gt;Web And Mobile Developer&lt;/span&gt;&lt;/p&gt; Con 5 \n\na&Atilde;&plusmn;os de experiencia. Creando mi propio camino, fundador de Zona de \n\nSistemas, ODU Monagas, Veninsoftware e Hispano Soluciones. &lt;a \n\nhref=\\&quot;https://twitter.com/jonathan_araul\\&quot; target=\\&quot;_blank\\&quot;&gt;Sigueme en 140 \n\ncaracteres&lt;/a&gt;.'),
(3, 'daniel', 'meneses', 'danieljml', '3e85d67927d029746005ddb43b7f23f0', '5267ba77ce5bc77760fe600e10200c18c81b8300', 'daniel_jml8@hotmail.com', 0, 1, 'avatars/avatar-man.PNG', 'Estudiante de Ing. de Petroleo'),
(4, 'juan', 'lopera', 'juanlopera', '2f54286328db7a8bf89ddf667730df56', '9bdac90998a5293d3f883a3d0697a1c8a62fefb4', 'juank_lopera27@hotmail.com', 0, 1, 'avatars/avatar-man.png', 'Estudiante de Ing. de Petroleo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autores`
--
ALTER TABLE `autores`
  ADD CONSTRAINT `FK_2A6A65D8D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

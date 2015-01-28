-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2015 a las 15:43:55
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rqt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE IF NOT EXISTS `resultado` (
`id` int(11) NOT NULL,
  `idsorteo` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `resultado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_resultado_sorteo1_idx` (`idsorteo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
ADD CONSTRAINT `fk_resultado_sorteo1` FOREIGN KEY (`idsorteo`) REFERENCES `sorteo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


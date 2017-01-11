-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2015 a las 20:49:49
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actividades`
--

--
CREATE DATABASE IF NOT EXISTS `actividades` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `actividades`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `comprobarSiexiste`(IN `DNI` varchar(9))
BEGIN
   		DECLARE existe BOOL;
		SELECT existe=count(*) FROM apweb WHERE num_part=num;
		IF existe THEN DELETE FROM  apweb WHERE num_part=num;
			      ELSE SELECT 'Ya está apuntado';
		END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE IF NOT EXISTS `apweb` (
  `num_part` int(4) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `modulo` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `nota` int(2) NOT NULL,
  `curso` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Idiomas` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `apweb` (`num_part`, `nombre`, `apellido`, `DNI`, `edad`, `modulo`, `nota`, `curso`, `Idiomas`) VALUES
(1, 'ANA', 'EGIA', '25641256F', 25, 'Aplicaciones web', 8, 'DAM', 2),
(2, 'ENMA', 'GARCES', '18526325K', 36, 'Seguridad', 6, 'DAW', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `apweb`
  ADD PRIMARY KEY (`num_part`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `apweb`
  MODIFY `num_part` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

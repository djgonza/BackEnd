-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2016 a las 19:47:11
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdempleadosporcomision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nss` varchar(14) CHARACTER SET utf8 NOT NULL,
  `fijo` int(11) NOT NULL,
  `ventasbrutas` float NOT NULL,
  `tarifacomision` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`nombre`, `apellido`, `nss`, `fijo`, `ventasbrutas`, `tarifacomision`) VALUES
('Ana', 'Portu Sainz', '12564855V', 800, 50000, 4.3),
('Juan Luis', 'De Luis Elizalde', '14316528P', 600, 35000, 3),
('Andrés', 'Huici Valero', '22364666C', 600, 30000, 5),
('María', 'Echaide Arbelaiz', '32323926L', 700, 10000, 4.5),
('Carmen', 'Lekuona Mar', '55256314V', 650, 25000, 3.6),
('Gaizka', 'Yañez karra', '73111524K', 720, 15000, 3.8),
('Andoni', 'Reta Fuerte', '88543602D', 450, 50000, 2.8),
('Josu', 'Velasco Pérez', '99865422X', 550, 20000, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`nss`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

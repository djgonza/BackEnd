-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2016 a las 10:39:59
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdformaciondj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnoscursillosdj`
--

CREATE TABLE `alumnoscursillosdj` (
  `CODAL` varchar(8) NOT NULL,
  `CODCUR` varchar(2) NOT NULL,
  `NOTAL` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnoscursillosdj`
--

INSERT INTO `alumnoscursillosdj` (`CODAL`, `CODCUR`, `NOTAL`) VALUES
('14156329', 'C2', '7.5'),
('15156329', 'C2', '4.5'),
('16156329', 'C2', '8.0'),
('16325102', 'C1', '9.0'),
('17156329', 'C2', '6.4'),
('18156329', 'C2', '3.5'),
('21256314', 'C4', '8.6'),
('22256314', 'C4', '3.5'),
('23256314', 'C4', '9.9'),
('24256314', 'C4', '8.0'),
('25256314', 'C4', '5.4'),
('26256314', 'C4', '2.6'),
('26325102', 'C1', '8.0'),
('27256314', 'C4', '6.1'),
('30256314', 'C6', '4.8'),
('31256314', 'C6', '7.0'),
('32256314', 'C6', '6.6'),
('36325102', 'C1', '9.0'),
('46325102', 'C1', '9.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosdj`
--

CREATE TABLE `alumnosdj` (
  `CODAL` varchar(8) NOT NULL,
  `NOMAL` varchar(25) NOT NULL,
  `APELAL` varchar(50) NOT NULL,
  `FECHAL` date NOT NULL,
  `DIRAL` varchar(50) NOT NULL,
  `POB` varchar(25) NOT NULL,
  `TELFAL` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnosdj`
--

INSERT INTO `alumnosdj` (`CODAL`, `NOMAL`, `APELAL`, `FECHAL`, `DIRAL`, `POB`, `TELFAL`) VALUES
('10156329', 'Rogelia', 'Zarra García', '1986-11-21', 'Mayor ;19', 'Pamplona', '918726159'),
('11156329', 'Marta', 'Giokoetxea Esbort', '1989-04-01', 'Milagro;5', 'Donostia', '975513003'),
('12156329', 'Marta', 'Mendia García', '1960-08-05', 'Corta;18', 'Estella', '932273126'),
('13156329', 'Antonio', 'Tortola Garzon', '1986-06-11', 'Gral Malo;1', 'Buñuel', '907905633'),
('14156329', 'Ohiana', 'Garzon Mendia', '1967-10-23', 'Corta;6', 'Madrid', '981089531'),
('15156329', 'Marta', 'Gomez Tortola', '1982-05-07', 'Nagusia;1', 'Pamplona', '960054145'),
('16156329', 'Antonio', 'Tortola Giroto', '1966-10-31', 'Larga;11', 'Madrid', '974167308'),
('16325102', 'Zigor', 'Tortola Esbort', '1974-03-16', 'Encartaciones;18', 'Pamplona', '945675608'),
('17156329', 'Antonio', 'Giroto Tortola', '1987-08-10', 'Pez;14', 'Pamplona', '916753682'),
('18156329', 'Eufrasio', 'Zarra Mantua', '1961-03-18', 'Encartaciones;15', 'Pamplona', '948557744'),
('19156329', 'Ander', 'Gomez Garzon', '1978-06-25', 'Encartaciones;18', 'Pamplona', '952153150'),
('20256314', 'Zigor', 'Esbort Giokoetxea', '1970-05-24', 'Larga;22', 'Madrid', '940492806'),
('21256314', 'Ander', 'García García', '1985-05-13', 'Larga;12', 'Logroño', '918793202'),
('22256314', 'Ohier', 'Giokoetxea Tortola', '1989-01-25', 'Gral Malo;7', 'Pamplona', '923370807'),
('23256314', 'Eufrasio', 'Esbort Tortola', '1966-02-02', 'Zapatería;10', 'Pamplona', '962130349'),
('24256314', 'Felisa', 'Garzon Garzon', '1973-09-12', 'Milagro;13', 'Pamplona', '901070821'),
('25256314', 'Marta', 'Tortola Giokoetxea', '1988-11-23', 'Nagusia;13', 'Tudela', '901324458'),
('26256314', 'Ohier', 'Giroto Gomez', '1967-10-06', 'Corta;9', 'Donostia', '908121413'),
('26325102', 'Marisa', 'Tortola Giokoetxea', '1978-08-15', 'Pez;19', 'Buñuel', '977068464'),
('27256314', 'Felisa', 'Zarra Mendia', '1990-01-29', 'Zapatería;14', 'Estella', '984261500'),
('28256314', 'Antonio', 'Zarra Tortola', '1967-12-03', 'Milagro;0', 'Pamplona', '926319336'),
('29256314', 'Ohiana', 'Giokoetxea Giokoetxea', '1961-10-24', 'Gral Malo;5', 'Donostia', '903193349'),
('30256314', 'Ander', 'Mendia Zarra', '1990-06-26', 'Milagro;1', 'Buñuel', '935256568'),
('31256314', 'Antonio', 'Gomez García', '1965-02-17', 'Pez;2', 'Logroño', '952208509'),
('32256314', 'Felisa', 'Zarra Zarra', '1967-08-05', 'Larga;6', 'Buñuel', '926853546'),
('36325102', 'Ohier', 'Giokoetxea Mendia', '1986-08-31', 'Encartaciones;16', 'Pamplona', '969090854'),
('46325102', 'Ohiana', 'Mendia Mantua', '1993-01-30', 'Gral Malo;12', 'Pamplona', '975922128'),
('56325102', 'Zigor', 'García Giokoetxea', '1983-05-22', 'Libertad;6', 'Logroño', '921477720'),
('66325102', 'Zigor', 'Mantua Giokoetxea', '1989-11-15', 'Libertad;9', 'Pamplona', '936662432'),
('76325102', 'Antonio', 'García Giokoetxea', '1976-04-09', 'Larga;16', 'Buñuel', '904847447'),
('86325102', 'Zigor', 'Giokoetxea Mantua', '1965-11-19', 'Pez;15', 'Pamplona', '953829111'),
('96325102', 'Felisa', 'García Giroto', '1959-07-14', 'Milagro;18', 'Donostia', '920865984');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursillosdj`
--

CREATE TABLE `cursillosdj` (
  `CODCUR` varchar(2) NOT NULL,
  `NOMCUR` varchar(25) NOT NULL,
  `NUMHORAS` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `CODP` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursillosdj`
--

INSERT INTO `cursillosdj` (`CODCUR`, `NOMCUR`, `NUMHORAS`, `FECHA`, `CODP`) VALUES
('C1', 'YOGA', 30, '2016-08-01', 'P1'),
('C2', 'STRETCHING', 40, '2016-08-02', 'P1'),
('C3', 'PATINAJE', 30, '2016-07-16', 'P2'),
('C4', 'TIRO CON ARCO', 20, '2016-08-01', 'P3'),
('C5', 'RAPSBERRY PI', 20, '2016-08-05', 'P4'),
('C6', 'PATINAJE', 35, '2016-11-12', 'P2'),
('C7', 'FOTOGRAFIA', 50, '2016-11-12', 'P4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesoresdj`
--

CREATE TABLE `profesoresdj` (
  `CODP` varchar(2) NOT NULL,
  `NOMP` varchar(25) NOT NULL,
  `NIVEL` varchar(1) NOT NULL,
  `FECCONTRATO` date NOT NULL,
  `SALARIO` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnoscursillosdj`
--
ALTER TABLE `alumnoscursillosdj`
  ADD PRIMARY KEY (`CODAL`,`CODCUR`),
  ADD KEY `CODCUR` (`CODCUR`);

--
-- Indices de la tabla `alumnosdj`
--
ALTER TABLE `alumnosdj`
  ADD PRIMARY KEY (`CODAL`);

--
-- Indices de la tabla `cursillosdj`
--
ALTER TABLE `cursillosdj`
  ADD PRIMARY KEY (`CODCUR`);

--
-- Indices de la tabla `profesoresdj`
--
ALTER TABLE `profesoresdj`
  ADD PRIMARY KEY (`CODP`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnoscursillosdj`
--
ALTER TABLE `alumnoscursillosdj`
  ADD CONSTRAINT `alumnoscursillosdj_ibfk_1` FOREIGN KEY (`CODAL`) REFERENCES `alumnosdj` (`CODAL`),
  ADD CONSTRAINT `alumnoscursillosdj_ibfk_2` FOREIGN KEY (`CODCUR`) REFERENCES `cursillosdj` (`CODCUR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

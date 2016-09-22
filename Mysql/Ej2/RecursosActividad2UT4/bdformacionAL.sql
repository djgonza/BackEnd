
--
-- Estructura de tabla para la tabla `cursillosTusIniciales`
--

CREATE TABLE IF NOT EXISTS `cursillosdj` (
  `CODCUR` varchar(2) NOT NULL,
  `NOMCUR` varchar(25) NOT NULL,
  `NUMHORAS` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `CODP` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `alumnosdj` (
  `CODAL` varchar(8) NOT NULL,
  `NOMAL` varchar(25) NOT NULL,
  `APELAL` varchar(50) NOT NULL,
  `FECHAL` date NOT NULL,
  `DIRAL` varchar(50) NOT NULL,
  `POB` varchar(25) NOT NULL,
  `TELFAL` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `profesoresdj` (
  `CODP` varchar(2) NOT NULL,
  `NOMP` varchar(25) NOT NULL,
  `NIVEL` varchar(1) NOT NULL,
  `FECCONTRATO` date NOT NULL,
  `SALARIO` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `alumnoscursillosdj` (
  `CODAL` varchar(8) NOT NULL,
  `CODCUR` varchar(2) NOT NULL,
  `NOTAL` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `alumnoscursillosdj` ADD PRIMARY KEY( `CODAL`, `CODCUR`);
ALTER TABLE `alumnosdj` ADD PRIMARY KEY(`CODAL`);
ALTER TABLE `cursillosdj` ADD PRIMARY KEY(`CODCUR`);
ALTER TABLE `profesoresdj` ADD PRIMARY KEY(`CODP`);

--
-- Volcado de datos para la tabla `cursillos`
--

INSERT INTO `cursillosdj` (`CODCUR`, `NOMCUR`, `NUMHORAS`, `FECHA`, `CODP`) VALUES
('C1', 'YOGA', 30, '2016-08-01', 'P1'),
('C2', 'STRETCHING', 40, '2016-08-02', 'P1'),
('C3', 'PATINAJE', 30, '2016-07-16', 'P2'),
('C4', 'TIRO CON ARCO', 20, '2016-08-01', 'P3'),
('C5', 'RAPSBERRY PI', 20, '2016-08-05', 'P4'),
('C6', 'PATINAJE', 35, '2016-11-12', 'P2'),
('C7', 'FOTOGRAFIA', 50, '2016-11-12', 'P4');

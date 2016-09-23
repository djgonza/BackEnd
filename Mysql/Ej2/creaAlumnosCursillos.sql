CREATE TABLE `alumnosdj` (
  `CODAL` varchar(8) NOT NULL,
  `NOMAL` varchar(25) NOT NULL,
  `APELAL` varchar(50) NOT NULL,
  `FECHAL` date NOT NULL,
  `DIRAL` varchar(50) NOT NULL,
  `POB` varchar(25) NOT NULL,
  `TELFAL` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `alumnosdj`
  ADD PRIMARY KEY (`CODAL`);
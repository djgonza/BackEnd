CREATE TABLE `profesoresdj` (
  `CODP` varchar(2) NOT NULL,
  `NOMP` varchar(25) NOT NULL,
  `NIVEL` varchar(1) NOT NULL,
  `FECCONTRATO` date NOT NULL,
  `SALARIO` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `profesoresdj`
  ADD PRIMARY KEY (`CODP`);

INSERT INTO `profesoresdj` (`CODP`, `NOMP`, `NIVEL`, `FECCONTRATO`, `SALARIO`) VALUES
('P1', 'Patricia Perez', 'A', '2008-10-05', '1500.00'),
('P2', 'Paula Puerta', 'B', '2010-03-19', '1300.00'),
('P3', 'Aingeru Pagoaga', 'A', '2011-10-25', '1000.00'),
('P4', 'Julen Pagoaga', 'A', '2011-10-25', '1000.00');
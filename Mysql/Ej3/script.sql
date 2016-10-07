-- 1 

SELECT `CODAL`, `NOMAL`,`APELAL`,`TELFAL` 
FROM `alumnosdj` 
WHERE `POB` in ("Pamplona", "Donostia", "Estella");

-- 2

SELECT `CODAL`, `NOMAL`,`APELAL`,`FECHAL`,`TELFAL` 
FROM `alumnosdj` 
WHERE year('FECHAL') 
BETWEEN 1980 and 1990 
ORDER BY `FECHAL`;

-- 3

SELECT count(*), `POB` FROM `alumnosdj` GROUP BY POB

-- 4

SELECT `NOMCUR`, `NUMHORAS`, `FECHA`  
FROM `cursillosdj` 
ORDER BY `FECHA` limit 0,3

-- 5

SELECT A.codal, A.nomal, A.diral, A.telfal, C.nomcur \n"
    . "FROM (alumnoska A INNER JOIN alumnoscursilloska AC ON A.codal=AC.codal) INNER JOIN cursilloska C ON C.codcur=AC.codcur WHERE C.nomcur=\'STRETCHING\


-- 6

SELECT `SALARIO` FROM `profesoresdj` 
WHERE `CODP` = (
	SELECT `CODP` FROM `cursillosdj` WHERE `NOMCUR` = "TIRO CON ARCO")

UPDATE `profesoresdj` 
SET `SALARIO` = `SALARIO` + 250
WHERE `CODP` = (
	SELECT `CODP` FROM `cursillosdj` WHERE `NOMCUR` = "TIRO CON ARCO")

-- 7

	-- actualizar el profesor de tiro con arco a Patricia Perez
	UPDATE cursillosdj 
	set CODP = (select CODP from profesoresdj where nomp = "Patricia Perez")
	where NOMCUR = "TIRO CON ARCO"

	-- Dar de baja a los alumnos de Estella
	DELETE FROM `alumnosdj` WHERE `POB` = "Estella"

-- 8

DROP FUNCTION IF EXISTS conLetrasDJ;
DELIMITER $$
CREATE FUNCTION conLetrasDJ(fecha date)
RETURNS VARCHAR(50)
BEGIN
	
	DECLARE fechaSalida varchar(50) default "Enero";
	DECLARE mes int(2) default month(fecha);

	/*CASE mes
		WHEN 01 THEN set fechaSalida = "Enero";
		WHEN 02 THEN set fechaSalida = "Febrero";
		WHEN 03 THEN set fechaSalida = "Marzo";
		WHEN 04 THEN set fechaSalida = "Abril";
		WHEN 05 THEN set fechaSalida = "Mayo";
		WHEN 06 THEN set fechaSalida = "Junio";
		WHEN 07 THEN set fechaSalida = "Julio";
		WHEN 08 THEN set fechaSalida = "Agosto";
		WHEN 09 THEN set fechaSalida = "Septiembre";
		WHEN 10 THEN set fechaSalida = "Octubre";
		WHEN 11 THEN set fechaSalida = "Noviembre";
		WHEN 12 THEN set fechaSalida = "Diciembre";
	END CASE;*/

	fechaSalida = concat(fechaSalida, " de ", year(fecha));
	return fechaSalida;

END
$$
DELIMITER ;

-- 9
DROP VIEW IF EXISTS viewProfesoreska;
CREATE VIEW viewProfesoreska AS
SELECT P.nomp as Profesor,conLetraska(P.feccontrato)as Contrato, COUNT(AC.codal) as NumeroAlumnos FROM (cursilloska C INNER JOIN alumnoscursilloska AC ON C.codcur=AC.codcur)INNER JOIN profesoreska P ON C.codp=P.codP GROUP BY P.nomp,P.feccontrato;

      		select * FROM viewprofesoreska


      		-- 10
      		DELIMITER $$
DROP PROCEDURE IF EXISTS notaMediaka $$
CREATE PROCEDURE notaMediaka (IN nombre varchar(25) )
BEGIN
    SELECT C.nomcur as CURSILLO, AVG(CA.notal) as MEDIA
	FROM cursilloska C INNER JOIN alumnoscursilloska CA ON C.codcur = CA.codcur
	WHERE C.nomcur = nombre;
END $$
DELIMITER $$


call notaMediaka("PATINAJE")

Con parámetro de salida:

DELIMITER $$
DROP PROCEDURE IF EXISTS notaMediaka $$
CREATE PROCEDURE notaMediaka (IN nombre varchar(25), OUT media float )
BEGIN
    SELECT C.nomcur as CURSILLO, AVG(CA.notal) INTO media
	FROM cursilloska C INNER JOIN alumnoscursilloska CA ON C.codcur = CA.codcur
	WHERE C.nomcur = nombre;
END $$
DELIMITER $$

Para probar, en dos líneas:

call notaMediaka("PATINAJE",@media);
SELECT @media;

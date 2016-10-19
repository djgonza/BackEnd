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

SELECT A.codal, A.nomal, A.diral, A.telfal, C.nomcur FROM (alumnoska A INNER JOIN alumnoscursilloska AC ON A.codal=AC.codal) INNER JOIN cursilloska C ON C.codcur=AC.codcur WHERE C.nomcur='STRETCHING'

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
    
    CASE mes
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
	END CASE;
    
    return concat(fechaSalida, " de ", year(fecha));

END
$$
DELIMITER ;

SELECT conletrasdj("2016-12-18")

-- 9

DROP VIEW IF EXISTS viewProfesoresdj;
CREATE VIEW viewProfesoresdj AS
SELECT 
	P.nomp as Profesor, 
	conLetrasdj(P.feccontrato) as Contrato, 
	COUNT(AC.codal) as NumeroAlumnos 
FROM (cursillosdj C LEFT JOIN alumnoscursillosdj AC ON C.codcur = AC.codcur) 
LEFT JOIN profesoresdj P ON C.codp = P.codP GROUP BY P.nomp, P.feccontrato;

select * FROM viewprofesoresdj

-- 10

DELIMITER $$
DROP PROCEDURE IF EXISTS notaMediadj $$
CREATE PROCEDURE notaMediadj (IN nombre varchar(25), OUT notaSalida float)
BEGIN

    set notaSalida = Select AVG(AC.notal) as MEDIA 
	FROM cursillosdj C INNER JOIN alumnoscursillosdj AC ON C.codcur = AC.codcur
	WHERE C.nomcur = nombre;

END $$
DELIMITER $$

set @prueba = 0;
call notaMediadj("PATINAJE", @prueba);
select @prueba;

CREATE TABLE `curso`.`cursos` ( `idCurso` INT(3) NOT NULL AUTO_INCREMENT ,  `nombreCurso` VARCHAR(50) NOT NULL ,  `horas` INT(3) NOT NULL ,    PRIMARY KEY  (`idCurso`)) ENGINE = InnoDB;

CREATE TABLE `curso`.`alumnosCursos` ( `idAlumno` INT(3) NOT NULL , `idCurso` INT(3) NOT NULL , PRIMARY KEY  (`idAlumno`, `idCurso`)) ENGINE = InnoDB;


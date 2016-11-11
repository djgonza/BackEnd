DELIMITER //

CREATE PROCEDURE getPass (INOUT name text)
BEGIN
	
	set name = "SELECT pass FROM `usuarios` WHERE `name` = name";
	
END//

DELIMITER ;
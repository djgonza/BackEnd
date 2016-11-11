<?php 

	function obtenerRegistros($conexion, $sql) {

		$resul = mysqli_query($conexion, $sql);

		if (!$resul) { // ha ocurrido un error
			$error = "Error en consulta - ".mysqli_error($conexion);
			include "vistas/error.php";
			exit();
		}

		while ($fila = mysqli_fetch_array($resul)) {
			$personas[] = $fila;
		}

		return $personas;
	}

	function insertar($conexion, $sql) {

		return mysqli_query($conexion, $sql);

	}

	function enciptar($password, $digito = 7) {  
		$set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';  
		$salt = sprintf('$2a$%02d$', $digito);  
		for($i = 0; $i < 22; $i++)  
		{  
			$salt .= $set_salt[mt_rand(0, 63)];  
		}  
		return crypt($password, $salt);  
	}

	function login($conexion, $user, $pass){
		
		//$sql = "SELECT pass FROM `usuarios` WHERE `name` = '$user'";
		//$sql = "call getPass('$user', @var)";
		//$query = mysqli_query($conexion, $sql);
		
		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if ($mysqli->connect_errno) {
		    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}


		if (!$mysqli->query("SET @var = ''") || !$mysqli->query("call getPass('$user', @var)")) {
		    echo "Falló CALL: (" . $mysqli->errno . ") " . $mysqli->error;
		}

		if (!($resultado = $mysqli->query("SELECT @var as pass"))) {
		    echo "Usuario Incorrecto";
		}

		$fila = $resultado->fetch_assoc();

		if(crypt($pass, $fila['pass']) == $fila['pass']) {
				echo 'El usuario se ha loggeado. ';
		}else{
				echo "Contraseña incorecta";
		}

	}

?>
<?php

class DaoEmpleado {

	private $db;

	public function DaoEmpleado () {

		$this->db = new DB();

	}

	public function getEmpleados ($nss) {

		$this->db->connect();

		$sql = "SELECT * FROM `empleados` WHERE `nss` like '%?%'";

		return $this->db->execute($sql, array($nss));

		$this->db->disconnect();

	}

	public function insertEmpleado ($empleado) {

		$this->db->connect();

		$sql = "INSERT INTO `empleados` (`nombre`, `apellido`, `nss`, `fijo`, `ventasbrutas`, `tarifacomision`) VALUES (?, ?, ?, ?, ?, ?);";
		$args = array(
			utf8_encode($empleado->getNombre()),
			utf8_encode($empleado->getApellido()),
			utf8_encode($empleado->getNSS()),
			utf8_encode($empleado->getFijo()),
			utf8_encode($empleado->getVentasBrutas()),
			utf8_encode($empleado->getTarifaComision())
		);

		$this->db->executeAction($sql, $args);

		$this->db->disconnect();

	}

	public function updateEmpleado ($nss, $empleado) {

	}

	public function deleteEmpleado ($nss) {

		$this->db->connect();

		$this->db->executeAction("DELETE FROM `empleados` WHERE `empleados`.`nss` = ?", array($nss));

		$this->db->disconnect();

	}

	public function listEmpleados () {

		$this->db->connect();

		return $this->db->execute("SELECT * FROM `empleados`");

		$this->db->disconnect();


	}

	public function balance () {

	}

}

?>
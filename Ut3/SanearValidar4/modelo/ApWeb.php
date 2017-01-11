<?php 
/**
* 
*/
class ApWeb{	
	private $nombre;
	private $apellido;
	private $dni;
	private $edad;
	private $modulo;
	private $nota;
	private $curso;
	private $idiomas;
	
	function ApWeb($nombre, $apellido, $dni, $edad, $modulo, $nota, $curso, $idiomas){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->dni = $dni;
		$this->edad = $edad;
		$this->modulo = $modulo;
		$this->nota = $nota;
		$this->curso = $curso;
		$this->idiomas = $idiomas;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getApellido(){
		return $this->apellido;
	}

	function setApellido($apellido){
		$this->apellido = $apellido;
	}

	function getDni(){
		return $this->dni;
	}

	function setDni($dni){
		$this->dni = $dni;
	}

	function getEdad(){
		return $this->edad;
	}

	function setEdad($edad){
		$this->edad = $edad;
	}

	function getModulo(){
		return $this->modulo;
	}

	function setModulo($modulo){
		$this->modulo = $modulo;
	}

	function getNota(){
		return $this->nota;
	}

	function setNota($nota){
		$this->nota = $nota;
	}

	function getCurso(){
		return $this->curso;
	}

	function setCurso($curso){
		$this->curso = $curso;
	}

	function getIdiomas(){
		return $this->idiomas;
	}

	function setIdiomas($idiomas){
		$this->idiomas = $idiomas;
	}
}

?>
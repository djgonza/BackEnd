<?php

abstract class Empleado {
    private $primerNombre;
    private $apellido;
    private $numeroSeguroSocial;
    
    function Empleado($var_primerNombre, $var_apellido, $var_numeroSeguroSocial){
        $this->primerNombre = $var_primerNombre;
        $this->apellido = $var_apellido;
        $this->numeroSeguroSocial = $var_numeroSeguroSocial;
    }
    
    function mostrar(){
         echo "<p> Nombre: " .$this -> getPrimerNombre()."</p>"; 
         echo "<p>Apellido: ".$this -> getApellido()."</p>";
         echo "<p> Seguridad Social: ".$this -> getNumeroSeguroSocial()."</p>";     
    }
    function getNombre()
    {
        return $this->primerNombre;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function getNSS()
    {
        return $this->numeroSeguroSocial;
    }
    function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;
    }

    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function setNumeroSeguroSocial($numeroSeguroSocial)
    {
        $this->numeroSeguroSocial = $numeroSeguroSocial;
    }

    abstract function ingresos();
    

}
?>


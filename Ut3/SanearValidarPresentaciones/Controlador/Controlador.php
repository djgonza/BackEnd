<?php
include "helper/ValidadorForm.php";

class Controlador
{

    public function run()
    {
        if (!isset($_POST['validar']))
        {
            $this->mostrarFormulario("validar", null, null);
          
            exit();
        }

        if (isset($_POST["validar"]) && ($_POST["validar"]) == "validar")
        {
           
            $this->validar();
            
            exit();
        }

        if (isset($_POST["validar"]) && ($_POST["validar"]) == "continuar")
        {
            unset($_POST);
            $this->mostrarFormulario("validar", null, null);
           
            exit();
        }
    }

    private function mostrarFormulario($fase, $validador, $resultado)
    {
        include 'Vistas/form_alumno.php';
    }

    public function crearReglasDeValidacion()
    {
        $reglasValidacion = array(
            "nombre" => array("requiered" => true),
            "apellido" => array("requiered" => true),
            "edad" => array("min"=>18, "requiered" => true));

        return $reglasValidacion;
    }

    function validar()
    {
        $validador = new ValidadorForm();
        $reglasValidacion = $this->crearReglasDeValidacion();
        $validador->validar($_POST, $reglasValidacion);

        if ($validador->esValido())
        {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $resultado = "Alumno $nombre $apellido  <br /> ";
            $resultado.="Edad: $edad <br /> ";

            $modulo = $_POST['modulo'];
            $nota = $_POST['nota'];

            $resultado .= "<br /> Modulo: $modulo <br /> Nota: $nota";


            $this->mostrarFormulario("continuar", $validador, $resultado);
            exit();
        }

        $this->mostrarFormulario("validar", $validador, null);
        exit();
    }

}
?>


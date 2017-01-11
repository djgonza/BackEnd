<?php
include "helper/ValidadorForm.php";

class Controlador{

    public function run(){
        if (!isset($_POST['validar'])){
            $this->mostrarFormulario("validar", null, null);
            exit();
        }

        if (isset($_POST["validar"]) && ($_POST["validar"]) == "validar"){
            $this->validar();
            exit();
        }

        if (isset($_POST["validar"]) && ($_POST["validar"]) == "continuar"){
            unset($_POST);
            $this->mostrarFormulario("validar", null, null);
            exit();
        }
    }

    private function mostrarFormulario($fase, $validador, $resultado){
        include 'Vistas/form_alumno.php';
    }

    public function crearReglasDeValidacion(){
        
        $reglasValidacion = array(
            "nombre" => array("requiered" => true),
            "apellido" => array("requiered" => true),
            "dni" => array("requiered" => true),
            "edad" => array("min" => 18, "requiered" => true),
            "curso" => array("requiered" => true),
            "idiomas" => array("requiered" => true));

        return $reglasValidacion;
    }

    function validar(){

        $validador = new ValidadorForm();
        $reglasValidacion = $this->crearReglasDeValidacion();
        $validador->validar($_POST, $reglasValidacion);

        if ($validador->esValido()){
            $resultado = $this->registrar();
            $this->mostrarFormulario("continuar", $validador, $resultado);
            exit();
        }

        $this->mostrarFormulario("validar", $validador, NULL);
        exit();
    }

    function crearApWeb($datos){

        $apweb = new ApWeb(htmlspecialchars($datos['nombre']), htmlspecialchars($datos['apellido']), ($datos['dni']), htmlspecialchars($datos['edad']), htmlspecialchars($datos['modulo']), htmlspecialchars($datos['nota']), htmlspecialchars($datos['curso']), htmlspecialchars(count($datos['idiomas'])));
        return $apweb;
    }

    function registrar(){

        $this->dao = new DaoApWeb();
        $datos = array('nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'dni' => $_POST['dni'], 'edad' => $_POST['edad'],
            'modulo' => $_POST['modulo'], 'nota' => $_POST['nota'], 'curso' => $_POST['curso'], 'idiomas' => $_POST['idiomas']);
        $apweb = $this->crearApWeb($datos);
        if ($this->dao->existeApWeb($apweb->getDni())){
            return "El DNI ya existe en la base de datos";
        } else {
            return $this->dao->insertarApweb($apweb);
        }
    }

}

?>


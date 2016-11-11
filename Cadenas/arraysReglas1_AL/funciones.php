<?php

function verArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//function validar1:
function validar($array) {

    $errores = array();
    foreach ($array as $key => $value) {
        
        if($value["nombre"] == null){
            $errores[] = "El nombre del registro $key esta vacio";
        }
        if($value["apellidos"] == null){
            $errores[] = "El apellido del registro $key esta vacio";
        }
        if($value["mail"] == null){
            $errores[] = "El email del registro $key esta vacio";
        }else if (strpos($value["mail"], "@") === false) {
            $errores[] = "El email del registro $key no esta bien formado";
        }
    }

    return $errores;

}



//function validar2: los campos de un array:
    // Las reglas que deben cumplir los campos las
    //tenemos establecidas en un array y los errores los devuelve
    //en otro array (Todos los arrays son asociativos)


    //recorro las reglas de validación de cada campo

    //De cada campo obtengo sus reglas de validación

    //compruebo si cumple que es el campo requerido
    //en caso de ser requerido y no tener valor
    //incluyo en un array el error

    //devuelve el array errores


function validarDos ($validacion, $datos) {

    $errores = array();
    foreach ($datos as $key => $value) {

        if($validacion["nombre"] == "required" && $value["nombre"] == null){
            $errores[] = "El nombre del resgistro $key es requerido";
        }
        if($validacion["apellidos"] == "required" && $value["apellidos"] == null){
            $errores[] = "Los apellidos del resgistro $key son requerido";
        }
        if($validacion["edad"] == "required" && $value["edad"] == null){
            $errores[] = "La edad del registro $key es requerido";
        }else if($value["edad"] > 20) {
            $errores[] = "La edad del registro $key es mayor a 20 años";
        }

    }
    return $errores;

}


?>
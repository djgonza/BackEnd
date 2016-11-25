<?php 

class MiClase {

    private $publ;
    private $priva;
    static $pi = 3.14156;
    private $saludo;

    static function longitud_circunferencia($diametro) {
        return MiClase:: $pi * $diametro;
    }

    function metPublic($texto) {
        $this->publ = $texto;
        $this->priva = $texto;
    }

    private function metPrivate($texto) {

        $this->publ= $texto;
        $this->priva = $texto;
    }

    public function metPublic2($texto) {
        $this->metPrivate = ($texto);
          echo "Estoy dentro del método metPublico2!<br>"; 
           echo "Dentro de la clase puedo visualizar la variable private:" .$this->priva. "<br>";
    }

    function _construct() {

        echo "_Construct: ¡Se está ejecutando el constructor en la clase! MiClase <br />";
    }

    function _destruct() {

        echo "_Destruct: ¡Se esta destryundo un objeto de la clase! Mi clase<br>";
    }

    function saludar() {
        echo $this->saludo;
    }

}


?>
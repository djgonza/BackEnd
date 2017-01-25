<?php

class Utilidades {

    static function verificarLista($camposComparar, $campos){
        if ($camposComparar == $campos){
            echo 'selected ="selected"';
        }
    }

    static function verificarBotones($botonComparar, $boton){
        if ($botonComparar == $boton){
            echo 'checked ="checked"';
        }
    }

    static function verificarCasillas($arrayCasillas, $casilla){
        if (!empty($arrayCasillas)){
            if (in_array($casilla, $arrayCasillas))
                echo 'checked == "checked"';
        }
    }

}

?>
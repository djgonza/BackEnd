<?php

class DaoApWeb{

    private $db;

    function DaoApWeb(){
        $this->db = new DataBase();
    }

    function existeApweb($dni){

        $this->db->conectar();
        $sql = "SELECT * FROM apweb WHERE DNI = '$dni'";
        $resul = $this->db->ejecutarSql($sql);
        $numFilas = $this->db->cantidadFilas($resul);

        $this->db->desconectar();

        //$numFilas == 0 ? return false : return true;
        return $numFilas <> 0;

    }

    function insertarApweb($apweb){
        
        $this->db->conectar();

        $sql = "Insert into apweb(nombre, apellido, DNI, edad, modulo, nota, curso, Idiomas) values (?,?,?,?,?,?,?,?)";
        $arg = array(utf8_decode($apweb->getNombre()), utf8_decode($apweb->getApellido()), $apweb->getDni(), $apweb->getEdad(), $apweb->getModulo(), $apweb->getNota(), $apweb->getCurso(), $apweb->getIdiomas());

        try{
            $this->db->ejecutarSqlActualizacion($sql, $arg);
            $this->db->desconectar();
        } catch (Exception $ex){
            return "Error en la consulta de inserción de Apweb";
            $this->db->desconectar();
        }

    }

    function listar () {

        $this->db->conectar();

        $sql = "SELECT `nombre`, `apellido`, `DNI`, `edad`, `modulo`, `nota`, `curso`, `Idiomas` FROM `apweb`";

        try{
            return $this->db->ejecutarSqlActualizacion($sql, NULL);
            $this->db->desconectar();
        } catch (Exception $ex){
            return "Error en la consulta de inserción de Apweb";
            $this->db->desconectar();
        }

    }

}

?>
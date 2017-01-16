<?php

class DataBase implements iDataBase{

    private $conexion;

    public function conectar(){

        try{
            $this->conexion = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASS);
    		//$this->conexion->setAttibute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    		//$this->conexion->exec('SET names utf8');
        } catch (Exception $e){
            $error = "Error: no se pudo conectar a la base de datos";
            include 'vistas/error.php';
            exit();
        }

    }

    public function desconectar(){
        $this->conexion = null;
    }

    public function ejecutarSql($sql){

        try{
            return $this->conexion->query($sql);
            /*$this->conexion->prepare($sql);
            return $this->conexion->execute($sql);*/
        } catch (Exception $e){
            $this->db->desconectar();
            return "Error en la consulta de inserción de Apweb";
        }

    }

    public function ejecutarSqlActualizacion($sql, $args){
        
        try{
            $resul = $this->conexion->prepare($sql);
            $resul->execute($args);
            return $resul->fetchAll();
        } catch (Exception $e){
            $error = "Error: no se pudo conectar a la base de datos";
            include 'vistas/error.php';
            exit();
        }

    }

    public function siguienteFila($resul){
        return $resul->fetch();
    }

    public function cantidadFilas($resul){
        return $resul->rowcount();
    }

}

?>
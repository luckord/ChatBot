<?php

class Consulta {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "bot";
    private $conexion;
    function __construct() {
        $this->ConexionDB();
    }

    function ConexionDB() {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db) or die(mysqli_error($this->conexiondb));
        $this->conexion->set_charset("utf8_decode");
    }
    
    function consulta($msg){
        try {
            $this->ConexionDB();
            $sql = "call consulta_cli('$msg')";
            $resultado = $this->conexion->query($sql) or die($this->conexion->error);
            if ($resultado) {
                return $resultado->fetch_all(MYSQLI_ASSOC);
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo 'Error al consultar'.$ex;
        } finally {
            $this->CerrarDB();
        }
    }
    
     function CerrarDB() {
        mysqli_close($this->conexion);
    }
}

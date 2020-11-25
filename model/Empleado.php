<?php

class Empleado {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "bot";
    private $conexiondb;
    function __construct() {
        $this->ConexionDB();
    }

    function ConexionDB() {
        $this->conexiondb = new mysqli($this->host, $this->user, $this->pass, $this->db) or die(mysqli_error($this->conexiondb));
        $this->conexiondb->set_charset("utf8_decode");
    }
    
    public function emp_login($dni, $pas)
    {
        $sql = "call ingreso_emp('$dni','$pas')";
        $resultado = $this->conexiondb->query($sql) or die($this->conexiondb->error);
        if ($resultado) {
            return $resultado->fetch_array(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    
}

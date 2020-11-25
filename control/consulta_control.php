<?php
require_once '../model/Consulta.php';
$con = new Consulta();

if(isset($_GET['msg'])){
    $msg = strtolower($_GET['msg']);
    if($con->consulta(trim($msg)) != false){
        $respuesta = $con->consulta($msg);
        echo $respuesta[0]['res'];
    } else {        
        echo 'Lo siento ';
    }
}


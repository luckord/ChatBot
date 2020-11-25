<?php
require_once '../model/Empleado.php';;
$con = new Empleado();
$dni = $_GET["dni"];
$pas = $_GET["pas"];
$datos = $con->emp_login($dni, $pas);
if ($datos == false) {
    header("Location: index.php");
    die();
} else {
    session_start();
    if ($datos["id_car"] == 1) {
        header("Location: listaEmpleados.php");
        die();
    } else {
        header("Location: listaConsultas.php");
        die();
    }
}

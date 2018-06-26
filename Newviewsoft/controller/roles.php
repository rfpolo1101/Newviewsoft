<?php
session_start();
if(!isset($_SESSION["Administrador"]))
{

header ("Location: /");
}

include_once ("../views/Administrador/ARol.php");
if (isset($_POST["enviar"]))
{
    $t_doc=$_POST["tdocumento"];
    $n_doc=$_POST["documento"];
    $rol=$_POST["cargo"];
    require_once ("../model/Administrador/asignar_rol.php");

    $roles=new Asignar_rol();
    $roles->set_recive($t_doc,$n_doc,$rol);
    $roles->set_rol();
}


?>
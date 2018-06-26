<?php
session_start();
if(!isset($_SESSION["Administrador"]))
{

header ("Location: /");
}

if(isset($_SESSION["Administrador"]))
{

    require_once ("../views/administrador/menuAdministrador.php");
}



?>
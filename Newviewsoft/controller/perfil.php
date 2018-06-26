<?php
session_start();
if(!isset($_SESSION["Administrador"]))
{

header ("Location: /");
}

$documento=$_SESSION["documento"];

require_once ("../views/Administrador/perfil.php");
?>
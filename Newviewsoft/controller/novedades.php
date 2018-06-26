<?php
session_start();
include_once ("../views/Administrador/".$_GET["novedad"] . ".php");

if(isset($_POST["enviar"]))
{
    /**********Cambio de jornada************/
    if($_GET["novedad"]=="CambioJornada")
    {
        include_once("RetiroVoluntario");
    }
    /**********Retiro Voluntario************/
    if($_GET["novedad"]=="RetiroVoluntario")
    {
        include_once("asd");
    }
    /**********Aplazamientos************/
    if($_GET["novedad"]=="Aplazamientos")
    {
        include_once("asd");
    }
    /**********Deserciones************/
    if($_GET["novedad"]=="Deserciones")
    {
        include_once("asd");
    }
    /**********Traslados************/
    if($_GET["novedad"]=="Traslados")
    {
        include_once("asd");
    }
    /**********Reintegro************/
    if($_GET["novedad"]=="Reintegro")
    {
        include_once("asd");
    }


}



?>
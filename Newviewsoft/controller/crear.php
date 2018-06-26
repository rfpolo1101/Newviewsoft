<?php
session_start();
include_once ("../views/Administrador/".$_GET["tipos"] . ".php");


if(isset($_POST["enviar"]))
{
    /************Fomacion*************/
    if($_GET["tipos"]=="Formacion")
    {
        $formacion=$_POST["formacion"];

        include_once ("../model/Administrador/crear_modelo.php");
    
        $forma=new Crear_modelo();
        $forma->recibe_formacion($formacion);
        $forma->registro_Formacion();
    
    }
    /************Trimestre*************/

    if($_GET["tipos"]=="Trimestre")
    {
             $trimestre=$_POST["trimestre"];

             include_once ("../model/Administrador/crear_modelo.php");

             $tri=new Crear_modelo();
             $tri->recibe_Trimestre($trimestre);
             $tri->registro_Trimestre();
    }

    /************Jornada*************/

    if($_GET["tipos"]=="Jornada")
    {
            $jornada=$_POST["jornada"];

            include_once ("../model/Administrador/crear_modelo.php");
    
            $jorna=new Crear_modelo();
            $jorna->recibe_Jornada($jornada);
            $jorna->registro_Jornada();
    }

    /************Ficha*************/

    if($_GET["tipos"]=="Ficha")
    {
            $ficha=$_POST["ficha"];
            $trimestre=$_POST["trimestre"];
            $jornada=$_POST["jornada"];
            $sede=$_POST["sede"];
            $formacion=$_POST["formulario"];
    
            include_once ("../model/Administrador/crear_modelo.php");
            $fichas=new Crear_modelo();
            $fichas->recibe_Ficha($ficha,$trimestre,$jornada,$sede,$formacion);
            $fichas->registro_Ficha();
    }

    /************Sede*************/
    if($_GET["tipos"]=="Sede")
    {

        $sede=$_POST["sede"];

        include_once ("../model/Administrador/crear_modelo.php");
        $sedes=new Crear_modelo();
        $sedes->recibe_Sede($sede);
        $sedes->registro_Sede();

    }

    if ($_GET["tipos"]=="TipoDocumento"){

        $tdoc=$_POST["tdocumento"];

        include_once ("../model/Administrador/crear_modelo.php");
    
        $tdocumento=new Crear_modelo();
        $tdocumento->recibe_TipoDocumento($tdoc);
        $tdocumento->registro_TipoDocumento();
    

    }



    
}//FIN CLASE






?>
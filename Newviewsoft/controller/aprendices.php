<?php
session_start();
if(!isset($_SESSION["Administrador"])){
header ("Location: /");
}

require_once ("../views/administrador/ForAprendiz.php");

if(isset($_POST ['enviar']))
{

     $t_doc=$_POST['tdocumento'];
     $p_nombre=$_POST['pnom'];
     $s_nombre=$_POST['snom'];
     $p_apellido=$_POST['papel'];
     $s_apellido=$_POST['sapel'];
     $n_doc=$_POST['documento'];
     $correo=$_POST['correo'];
     $telefono=$_POST['tfijo'];
     $celular=$_POST['tcel'];
     $ficha=$_POST['ficha'];

require_once ("../model/Administrador/crear_aprendiz_modelo.php");
    
    $aprendiz=new Crear_Aprendiz();
    $aprendiz->set_resive($t_doc,$p_nombre,$s_nombre,$p_apellido,$s_apellido,$n_doc,$correo,$telefono,$celular,$ficha);
    $aprendiz->set_crear();
}

?>
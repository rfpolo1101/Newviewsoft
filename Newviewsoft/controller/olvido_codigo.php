<?php

require_once("../views/inicio/olvido.php");

if (isset($_POST['enviar']))
{
    $tipo_doc=$_POST['tdocumento'];
	$documento=$_POST['docuUsu'];
    $correo=$_POST['correo'];
    require_once ("../model/olvido_modelo.php");
    $olvido=new Olvido_modelo();
    $olvido->correo();
    $olvido->set_codigo(rand(1,9));
    $olvido->set_olvido($tipo_doc,$documento,$correo);
    $olvido->set_recuperar();
	
}


?> 
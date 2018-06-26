<?php

if (isset($_POST["enviar"]))
{
	$tipo_doc=$_POST['tdocumento'];
	$documento=$_POST['docuUsu'];
	$rol=$_POST['cargo'];
	$contra=$_POST['password'];	

	if(!empty($tipo_doc) AND !empty($documento) AND is_numeric($documento) AND !empty($contra))
	{
		require_once("../model/Sessiones/login.php");	

		$login=new Login();
		
		$login->set_login($tipo_doc,$documento,$rol,$contra);
		
		$login->get_login();
	}

}


require_once("../views/inicio/logeo.php");


?>
<?php



require_once("../views/inicio/registro.php");


if (isset($_POST['enviar']))
{

$tipo_doc=$_POST['tip_doc'];
$numero_doc=$_POST['docuUsu'];
$mail=$_POST['correo'];
$nom=$_POST['prinom'];
$apelli=$_POST['priapel'];
require_once("../model/Sessiones/registro_modelo.php");
$registro=new Registro_modelo();
$registro->correo();
$registro->set_codigo(rand(1,9));
$registro->set_registro($tipo_doc,$numero_doc,$mail,$nom,$apelli);
$registro->set_registrando();

}


?>
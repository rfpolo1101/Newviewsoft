<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$Tdocumento=$_REQUEST ['Tdocumento'];
$Ndocumento=$_REQUEST ['Ndocumento'];
$Mail=$_REQUEST ['mail'];
$asunto="Codigo usuario";
$header="MIME-Version: 1.0\r\n";
$header.="Content-type: text/html; charset=iso-8859-1\r\n";
$header.="From:  codigo usuarios < rafaelfc515454@gmail.com >\r\n";

//Esta es la funcion que hace el codigo azar para todos los usuarios
require ('codigos.php');

include ("datosdeconexion.php");



$texto="<h3>Bienvenido a deser-thor<h3><br><br><a><img src='logo.png' width='50px' /></a><br><br>
tu codigo es:  <b>$codigo<b><br><br> por favor ingresar a esta direccion y verificar que todo este correcto http://localhost:8080/proyecto/ <br><br> gracias por usar nuestro sistema de informacion";


//aqui finaliza no quedara asi estoy hacienddo pruebas 

//aqui enpiesa el try con sus condiciones y en el try esta la conexion a la base de datos
try{  


$conexion=mysqli_connect($db_host,$db_root,$db_contra,$db_nombre);


	
if (mysqli_connect_errno()){


	echo "error";		
	exit ();
}

mysqli_set_charset($conexion,"utf8");

$registro="UPDATE registro  SET CCcodigo='$codigo'  WHERE  Tdocumento='$Tdocumento' AND Ndocumento='$Ndocumento' AND Mail='$Mail'";	

$total=mysqli_query($conexion,$registro);	

if ($total==false){

	echo "error al registrar";
}else {

$exito=mail($Mail,$asunto,$texto,$header);

if($exito==true){

echo "correo enviado";

}else{

	echo "error en mail";
}


}

	








}catch (excepción $mal){


echo "error en la conexion"; // si pasa algo mal


}finally{

echo "";//esto se ejecuta si o si


}




?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

$Ndocumento=$_REQUEST ['id_aprendiz'];
$Fsoli=$_REQUEST ['fecha_soli'];
$Msoli=$_REQUEST ['moti_solicitud'];
$descripcion=$_REQUEST ['descripcion'];
$respuesta=$_REQUEST ['tipo_res'];
include ("datosdeconexion.php");

try{  


$conexion=mysqli_connect($db_host,$db_root,$db_contra,$db_nombre);


	
if (mysqli_connect_errno()){


	echo "error";		
	exit ();
}

mysqli_set_charset($conexion,"utf8");


$registro="INSERT INTO traslado (Ndocumento,Fsolicitud,motivo,Descripcion,Respuesta)  Values ('$Ndocumento','$Fsoli','$Msoli','$descripcion','$respuesta')";	

$total=mysqli_query($conexion,$registro);	


if($total==false){

header ('Location: /proyecto4/modelos/Cargo/Administrador/Anovedades/traslado.html');
}else{

header ('Location: /proyecto4/modelos/Cargo/Administrador/Anovedades/traslado.html');

}







}catch (excepción $mal){


echo "error en la conexion"; // si pasa algo mal


}finally{

echo "";//esto se ejecuta si o si


}


















	?>
</body>
</html>
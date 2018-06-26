<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$Tdocumento=$_REQUEST ['Tdocumento'];
$Ndocumento=$_REQUEST ['Ndocumento'];
$pri_nom=$_REQUEST ['pri_nom'];
$segu_nom=$_REQUEST ['segu_nom'];
$pri_apell=$_REQUEST ['pri_apell'];
$segu_apell=$_REQUEST ['segu_apell'];
$edad=$_REQUEST ['edad'];
$pri_tele=$_REQUEST ['pri_tele'];
$segu_tele=$_REQUEST ['segu_tele'];
$formacion=$_REQUEST ['formacion'];
$trimestre=$_REQUEST ['trimestre'];
$ficha=$_REQUEST ['Ficha'];
$grupo=$_REQUEST ['grupo'];
$jornada=$_REQUEST ['jornada'];

include ("datosdeconexion.php");

try{  


$conexion=mysqli_connect($db_host,$db_root,$db_contra,$db_nombre);


	
if (mysqli_connect_errno()){


	echo "error";		
	exit ();
}

mysqli_set_charset($conexion,"utf8");


$registro="INSERT INTO aprendices (Tdocumento,Ndocumento,Pnombre,Snombre,Papellido,Sapellido,edad,Telefono,TelefonoC,Formacion,Ficha,Grupo,Jornada,Trimestre)  Values ('$Tdocumento','$Ndocumento','$pri_nom','$segu_nom','$pri_apell','$segu_apell','$edad','$pri_tele','$segu_tele','$formacion','$ficha','$grupo','$jornada','$trimestre')";	

$total=mysqli_query($conexion,$registro);	


if($total==false){

header ('Location: /proyecto4/modelos/Cargo/Administrador/Crearaprendiz/aprendices.html');

}else{

header ('Location: /proyecto4/modelos/Cargo/Administrador/Crearaprendiz/aprendices.html');


}







}catch (excepción $mal){


echo "error en la conexion"; // si pasa algo mal


}finally{

echo "";//esto se ejecuta si o si


}




?>

</body>
</html>
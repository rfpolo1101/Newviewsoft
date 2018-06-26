<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


$Ndocumento=$_REQUEST ['id_aprendiz'];
$Finicial=$_REQUEST ['fecha_inicial'];
$Ffinal=$_REQUEST ['fecha_final'];
$descripcion=$_REQUEST ['descripcion'];

include ("datosdeconexion.php");

try{  


$conexion=mysqli_connect($db_host,$db_root,$db_contra,$db_nombre);


	
if (mysqli_connect_errno()){


	echo "error";		
	exit ();
}

mysqli_set_charset($conexion,"utf8");


$registro="INSERT INTO retirovoluntario (Ndocumento,Finicio,Ffinal,Descripcion)  Values ('$Ndocumento','$Finicial','$Ffinal','$descripcion')";	

$total=mysqli_query($conexion,$registro);	


if($total==false){

header ('Location: /proyecto4/modelos/Cargo/Administrador/Anovedades/rvoluntario.html');
}else{

header ('Location: /proyecto4/modelos/Cargo/Administrador/Anovedades/rvoluntario.html');

}







}catch (excepción $mal){


echo "error en la conexion"; // si pasa algo mal


}finally{

echo "";//esto se ejecuta si o si


}



?>
</body>
</html>
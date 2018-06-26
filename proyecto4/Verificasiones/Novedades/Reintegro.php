<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php


$Ndocumento=$_REQUEST ['id_aprendiz'];
$Freintegro=$_REQUEST ['fecha_rein'];
$descripcion=$_REQUEST ['descripcion'];

include ("datosdeconexion.php");

try{  


$conexion=mysqli_connect($db_host,$db_root,$db_contra,$db_nombre);


	
if (mysqli_connect_errno()){


	echo "error";		
	exit ();
}

mysqli_set_charset($conexion,"utf8");


$registro="INSERT INTO reintegro (Ndocumento,Freintegro,descripcion)  Values ('$Ndocumento','$Freintegro','$descripcion')";	

$total=mysqli_query($conexion,$registro);	


if($total==false){

header ('Location: /proyecto4/modelos/Cargo/Administrador/Anovedades/reintegro.html');
}else{

header ('Location: /proyecto4/modelos/Cargo/Administrador/Anovedades/reintegro.html');

}







}catch (excepción $mal){


echo "error en la conexion"; // si pasa algo mal


}finally{

echo "";//esto se ejecuta si o si


}












	?>

</body>
</html>
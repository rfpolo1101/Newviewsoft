<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$Tdocumento=$_REQUEST ['Tdocumento'];
$Ndocumento=$_REQUEST ['Ndocumento'];
$roles=$_REQUEST ['rol'];
$codigo=$_REQUEST ['codigo'];


include ("datosdeconexion.php");



$conexion=mysqli_connect($db_host,$db_root,$db_contra);

if(mysqli_connect_errno()){
	
	echo "error de conexion";
	exit ();
	}

	mysqli_select_db($conexion,$db_nombre) or die ("error casual");
		
	mysqli_set_charset($conexion,"utf8");

	
	$consulta="SELECT reg.Cusuario AS Tdocumento,Ndocumento,Nombre,Apellido,CCcodigo,rol FROM registro AS reg INNER JOIN roles AS rol ON rol.codigo=reg.Cusuario WHERE Tdocumento='$Tdocumento' AND Ndocumento='$Ndocumento' AND CCcodigo='$codigo' AND Cusuario='$roles';";

	$resultado=mysqli_query($conexion,$consulta);

	
if ($resultado==false){


	echo "error Nombre";
}else{


	if($fila=mysqli_fetch_array($resultado)){

if ($fila ['rol']=='Invitado'){


}

if ($fila ['rol']=='Apoyo administrador'){



}

if ($fila ['rol']=='Administrador'){

header('Location: /proyecto4/modelos/Cargo/Administrador/MenuAdmin/menu.html');
	
}



}else{


header("Location: /proyecto4/index.html");

}
}













?>
</body>
</html>
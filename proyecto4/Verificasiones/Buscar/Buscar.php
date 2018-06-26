<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$Buscar=$_GET ['Buscar'];

require ("datosdeconexion.php");

$conexion=mysqli_connect($db_host,$db_root,$db_contra);

if (mysqli_connect_errno()){

echo "error al conectar con la base de datos por favor cargue de nuevo la pagina";

exit();

}

mysqli_select_db($conexion,$db_nombre) or die ("error al conectar con la base de datos por favor cargue de nuevo la pagina");

mysqli_set_charset($conexion,"utf8");

$consulta=






?>
</body>
</html>
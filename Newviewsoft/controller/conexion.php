<?php

class Conexion
{

	public static function conectar()
	{

		try
		{
			$conectar=new PDO('mysql:host=localhost; dbname=newviewsoft', 'root', '');
			$conectar->exec("SET CHARACTER SET UTF8");
			
		}catch(Exeption $e)
		{
			die ($e->getMessage);
		}

return $conectar;
	}


}


?>
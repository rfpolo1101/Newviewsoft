<?php
session_start();
class Login
{
	private $bd;
	private $tdocumento;
	private $ndocumento;
	private $cargo;
	private $codigo;

	public function __construct()
	{

		require_once("conexion.php");
		$this->bd=Conexion::conectar();

	}


	public function set_login($tdoc,$ndoc,$cargo,$cod)
	{

		$this->tdocumento=$tdoc;
		$this->ndocumento=$ndoc;
		$this->cargo=$cargo;
		$this->codigo=$cod;

	}
	public function get_login()
	{

		$sql=("SELECT name_tipo_doc,numero_doc,contraseña,nombre_cargo,nombre,apellido	
									From usuarios as usu INNER JOIN tipo_documento as tipo 	
									ON usu.codigo_tipo_doc=tipo.codigo_tipo_doc INNER JOIN cargo as car 	
									ON usu.codigo_cargo=car.codigo_cargo WHERE usu.codigo_tipo_doc= :tdoc	
									AND usu.numero_doc= :ndoc AND usu.codigo_cargo= :carg	
									AND usu.contraseña= :codig");


			$resultado=$this->bd->prepare($sql);
			$resultado->bindValue(":tdoc", $this->tdocumento);
			$resultado->bindValue(":ndoc", $this->ndocumento);
			$resultado->bindValue(":carg", $this->cargo);
			$resultado->bindValue(":codig", $this->codigo);
			$resultado->execute();
			$numero_login=$resultado->rowCount(); 
			if ($numero_login!=0 ){


			if($fila=$resultado->fetch(PDO :: FETCH_ASSOC)){

				if ($fila ['nombre_cargo']=='invitado')
				{

						$_SESSION['invitado']=$_POST[''];

						header("Location: a");

				}

				if ($fila ['nombre_cargo']=='apoyo administrador')
				{

						$_SESSION['apoyo']=$_POST[''];

						header("location: /newviewsoft/modelos/roles/apoyo administrador/menu.php");

				}

				if ($fila ['nombre_cargo']=='administrador')
				{
					$_SESSION['documento']=$fila ['numero_doc'];
					$_SESSION['Administrador']=$fila ['nombre'];
					$_SESSION['Administrador'].=" ";
					$_SESSION['Administrador'].=$fila ['apellido'];
					header("Location: menu.php");
				}

				if ($fila ['nombre_cargo']=='instructor')
				{


					$_SESSION['Instructor']=$_POST['docuUsu'];

					header("location: /newviewsoft/modelos/roles/instructor/menu.php");	

				}

			}
		}else{


			$_SERVER ["error1"]="<div align='center'><div  class='errores'><span class='closebtn'				
				 		onclick=this.parentElement.style.display='none';>&times;</span> 
  						<strong>Error:</strong> datos no existentes verifique de nuevo </div></div>";

		}
		
	}
	
}


?>
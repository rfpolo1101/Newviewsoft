<?php


//**********Inicio clase*********//
class Registro_modelo
{

//***********************Variables Globales***********************//
	private $db;
	private $tdocumento;
	private $ndocumento;
	private $nombre;
	private $apellido;
	private $codigo;
	private $correo;
	private $asunto;
	private $heade;
	private $texto;

//***************************************************************//

//**********************Metodo Constructor***********************//
	public function __construct()
	{

		require_once ("conexion.php");

		$this->db=Conexion::conectar();

	}


//***************************************************************//

//*********************Metodo Correo*****************************//	

	public  function correo()
	{

		$asun="Codigo usuario";
		$head="MIME-Version: 1.0\r\n";
		$head.="Content-type: text/html; charset=iso-8859-1\r\n";
		$head.="From: codigo usuarios < rafaelfc515454@gmail.com >\r\n";
		$text="<h3>Bienvenido a Newviewsoft<h3><br><br><a><img src='logo.png' width='50px' /></a><br><br>
				Hola <b>$this->nombre $this->apellido<b> tu codigo es:  <b>$this->codigo<b><br><br> por favor ingresar a esta direccion y verificar					que todo este correcto http://localhost:8080/proyecto/ <br><br> gracias por usar nuestro sistema de informacion";
		$this->asunto=$asun;
		$this->heade=$head;
		$this->texto=$text;
	
	}	

//***************************************************************//

//***********************Metodo Generador de codigos *************//	

	public function  set_codigo ($codigo)
	{


 		 $azar = "1234567890abcdefghijklmnopqrstuvwxyz";

   		 for($i = 1; $i < 8; $i++) 
   		 { 

         $codigo .= $azar{rand(0, 35)};

				
    	 } 
    	 $this->codigo=$codigo;
	  	}

//***************************************************************//

//***************************Recive los registros****************//

	public function set_registro($tdoc,$ndoc,$correo,$nombre,$apellido)
	{

		$this->tdocumento=$tdoc;
		$this->ndocumento=$ndoc;
		$this->correo=$correo;
		$this->nombre=$nombre;
		$this->apellido=$apellido;


	}


//***************************************************************//



//************************SQL registro***************************//
	public function set_registrando()
	{
		$sql="INSERT INTO usuarios (codigo_tipo_doc,numero_doc,nombre,apellido,correo,contraseña) 	
				VALUES ('$this->tdocumento','$this->ndocumento','$this->nombre','$this->apellido','$this->correo','$this->codigo')";


		$resultado=$this->db->prepare($sql);
		
		$resultado->execute();

		if($resultado==false)
		{
			echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
  					<strong>Error:</strong>el documento ya existe</div></div>";

		}else{

			$exito=mail($this->correo,$this->asunto,$this->texto,$this->heade);

		if($exito==true)
		{
			echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
  			<strong>Registrado:</strong>    
  			le enviamos un correo de verificacion </div></div>";

		}else{}//else correo

 		}//else de resultado
	}

}

?>
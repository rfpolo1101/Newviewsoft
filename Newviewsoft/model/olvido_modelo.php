<?php
class Olvido_modelo
{
//*************************varivable globales ****************************//
    private $db;
    private $tdocumento;
    private $ndocumento;
    private $correo;
    private $codigo;
    private $asunto;
	private $heade;
    private $texto;
//***************************************************************//
//***********************constructor****************************//   
    public function __construct()
	{

		require_once ("conexion.php");
		$this->db=Conexion::conectar();

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
//*********************Metodo Correo*****************************//	
                    

	public  function correo()
	{

		$asun="Codigo usuario";
		$head="MIME-Version: 1.0\r\n";
		$head.="Content-type: text/html; charset=iso-8859-1\r\n";
		$head.="From: codigo usuarios < rafaelfc515454@gmail.com >\r\n";
		$text="<h3>Bienvenido a Newviewsoft<h3><br><br><a><img src='logo.png' width='50px' /></a><br><br> tu nuevo codigo es:  <b>$this->codigo<b><br><br> por favor ingresar a esta direccion y verificar					que todo este correcto http://localhost:8080/proyecto/ <br><br> gracias por usar nuestro sistema de informacion";
		$this->asunto=$asun;
		$this->heade=$head;
		$this->texto=$text;
	
	}	

//***************************************************************//
//***********************Metodo recive datod *******************//
    public function set_olvido($tdoc,$ndoc,$correo)
    {
        $this->tdocumento=$tdoc;
        $this->ndocumento=$ndoc;
        $this->correo=$correo;
    }
//***************************************************************//
//***********************Metodo consulta sql*******************//

    public function set_recuperar()
    {

        $sql="UPDATE usuarios SET contraseña='$this->codigo' WHERE codigo_tipo_doc='$this->tdocumento'  
                AND numero_doc='$this->ndocumento' AND correo='$this->correo'";

        $resultado=$this->db->prepare($sql);
        $resultado->execute();

        if($resultado==true)
        {
            $prueba="SELECT * FROM usuarios WHERE  codigo_tipo_doc='$this->tdocumento' AND numero_doc='$this->ndocumento' AND correo='$this->correo'";

            $resultado2=$this->db->prepare($prueba);
            $resultado2->execute();
            
            if ($array=$resultado2->fetch (PDO :: FETCH_ASSOC))
            {
                if($array ['codigo_tipo_doc']==$this->tdocumento AND $array ['numero_doc']==$this->ndocumento AND $array ['correo']==$this->correo)
                {
                $exito=mail($this->correo,$this->asunto,$this->texto,$this->heade);

                if ($exito==true)
                {
                    echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
                    <strong>Actualizado:</strong> actualizado verifique su correo</div></div>";
                }
                }else{ echo "error";}
            }else{echo "error1";}

       }

    }//fin metodo
//***************************************************************//

}//fin clase

?>
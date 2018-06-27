<?php

class Sessiones
{   
    private $db;
    private $codigo;
    private $asunto;
    private $heade;
    private $texto;
    //constructor
    public function __construct()
    {
        $this->db= new Base();
    }
    
    //***********************Metodo Generador de codigos ************************************************************//	

    public function  generarCodigo($codigo)
	{


 		 $azar = "1234567890abcdefghijklmnopqrstuvwxyz";

   		 for($i = 1; $i < 8; $i++) 
   		 { 

         $codigo .= $azar{rand(0, 35)};

				
    	 } 
    	 $this->codigo=$codigo;
	}
         
    //***********************Correo ************************************************************//	

    public  function correo()
	{

        $asun="Codigo usuario";
		$head="MIME-Version: 1.0\r\n";
		$head.="Content-type: text/html; charset=iso-8859-1\r\n";
		$head.="From: codigo usuarios < rafaelfc515454@gmail.com >\r\n";
		$text="<h3>Bienvenido a Newviewsoft<h3><br><br><a><img src='logo.png' width='50px' /></a><br><br>
		<b> tu codigo es:  <b>$this->codigo<b><br><br> por favor ingresar a esta direccion y verificar					que todo este correcto http://localhost:8080/proyecto/ <br><br> gracias por usar nuestro sistema de informacion";
		$this->asunto=$asun;
		$this->heade=$head;
		$this->texto=$text;
	
	}	
    //***********************Fin metodos crear y enviar codigo ****************************************************************//	
	
    //login usuarios
    public function ingreso($datos)
    {   
            $this->db->query("SELECT name_tipo_doc,numero_doc,contraseña,nombre_cargo,nombre,apellido	
									From usuarios as usu INNER JOIN tipo_documento as tipo 	
									ON usu.codigo_tipo_doc=tipo.codigo_tipo_doc INNER JOIN cargo as car 	
									ON usu.codigo_cargo=car.codigo_cargo WHERE usu.codigo_tipo_doc= :tdoc	
									AND usu.numero_doc= :ndoc AND usu.codigo_cargo= :carg	
                                    AND usu.contraseña= :codig");

            $this->db->bind(':tdoc', $datos['tdocumento']);
            $this->db->bind(':ndoc', $datos['ndocumento']);
            $this->db->bind(":carg", $datos ['cargo']);
            $this->db->bind(":codig", $datos ['password']);
            $this->db->execute();
                    

            $numero_login=$this->db->rowCount();


            if ($numero_login==1 ){

                if($fila=$this->db->assoc()){
    
                    if ($fila ['nombre_cargo']=='invitado')
                    {
                        $_SESSION['cargo']=$fila ['nombre_cargo'];
                        $_SESSION['ndocumento']=$fila ['numero_doc'];
                        $_SESSION['invitado']=$fila ['nombre'];
                        $_SESSION['invitado'].=" ";
                        $_SESSION['invitado'].=$fila ['apellido'];                           
                            return true;


                    }
    
                    if ($fila ['nombre_cargo']=='apoyo administrador')
                    {
                        $_SESSION['cargo']=$fila ['nombre_cargo'];
                        $_SESSION['ndocumento']=$fila ['numero_doc'];
                        $_SESSION['ApoyoAdministrador']=$fila ['nombre'];
                        $_SESSION['ApoyoAdministrador'].=" ";
                        $_SESSION['ApoyoAdministrador'].=$fila ['apellido'];                           
                            return true;

                    }
    
                    if ($fila ['nombre_cargo']=='administrador')
                    {
                        $_SESSION['cargo']=$fila ['nombre_cargo'];
                        $_SESSION['ndocumento']=$fila ['numero_doc'];
                        $_SESSION['Administrador']=$fila ['nombre'];
                        $_SESSION['Administrador'].=" ";
                        $_SESSION['Administrador'].=$fila ['apellido'];
                        return true;

                    }
    
                   /* if ($fila ['nombre_cargo']=='instructor')
                    {

                        $_SESSION['Instructor']=$_POST['docuUsu'];
                        return true;
                    }*/
                }
            }else{
                return false;
            }
    }


    //Registro usuarios

    public function registrarUsuario($datos)
    {
            $this->db->query('SELECT numero_doc FROM usuarios WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();

            if($busca==0){
            $this->db->query('INSERT INTO usuarios (codigo_tipo_doc,numero_doc,nombre,apellido,correo,contraseña) VALUES (:tdoc, :ndoc, :nombre1, :apellido1, :email, :codigo)');
            //vincular los valores
            $this->db->bind(':tdoc', $datos['tdocumento']);
            $this->db->bind(':ndoc', $datos['ndocumento']);
            $this->db->bind(':email', $datos['correo']);
            $this->db->bind(':nombre1', $datos['pnombre']);
            $this->db->bind(':apellido1', $datos['papellido']);
            $this->db->bind(':codigo', $this->codigo);
            $resul=$this->db->execute();                
            if($resul==true)
            {
                $exito=mail($datos ["correo"],$this->asunto,$this->texto,$this->heade);

                if($exito==true)
                {
                  return true;
        
                }else{return false;}//else correo

                
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    //metodo olvido contraseña
    public function recuperarCodigo($datos)
    {
        $tdoc=$datos['tdocumento'];
         $ndoc=$datos ['ndocumento'];
         $correo=$datos ['correo'];

        $this->db->query("SELECT * FROM usuarios  WHERE codigo_tipo_doc='$tdoc'  AND   numero_doc= '$ndoc' AND correo= '$correo'");
        $this->db->execute();
        $busca=$this->db->rowCount();

        if($busca==1)
        { 
            echo $this->codigo;
            $this->db->query("UPDATE usuarios SET contraseña= :codigo WHERE 
                codigo_tipo_doc= :tdoc AND numero_doc= :ndoc AND correo= :email");
            $this->db->bind(':tdoc', $datos['tdocumento']);
            $this->db->bind(':ndoc', $datos['ndocumento']);
            $this->db->bind(':email', $datos['correo']);
            $this->db->bind(':codigo', $this->codigo);
            $this->db->execute();     
            $resul=$this->db->rowCount(); 
            if($resul==1)
            {
                
                $exito=mail($datos ["email"],$this->asunto,$this->texto,$this->heade);

                if($exito==true)
                {
                  return true;
        
                }else{return false;}//else correo
                
            }else{
                    return false;
                }//else resul
        }else{
            return false;
            }//else busca

    }


}


?>
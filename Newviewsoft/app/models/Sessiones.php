<?php

class Sessiones
{   
    private $db;
    private $codigo;
    private $asunto;
    private $heade;
    private $texto;
    private $identificador;
    private $documento;

    //constructor
    public function __construct()
    {
        //llama a base y se guarda en la variable db
        $this->db= new Base();
    }
    
    /***********************Metodo Generador de codigos *********************************/	
    public function  setpassword()
	{
        $codigo=false;
        $azar = [
                    0 => "1234567890",
                    1 => "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz",
                    2 => "!$%&/()=?¿*^_:;*.@"
                ];
 		  
   		 for($i = 1; $i < 5; $i++) 
   		 {
            $codigo .= $azar[0]{rand(0, 9)};	
            $codigo .= $azar[1]{rand(0, 50)};	
            $codigo .= $azar[2]{rand(0, 17)};	
         } 
         
    	    $this->codigo=$codigo;
	}
         
    //***********************Correo *******************//	

    public  function correo()
	{

        //asunto
        $asun="Codigo usuario";
        $head="MIME-Version: 1.0\r\n";
        
        //desde donde se envia
		$head.="Content-type: text/html; charset=iso-8859-1\r\n";
        $head.="From: codigo usuarios < rafaelfc515454@gmail.com >\r\n";
        //texto con lo que se envia
		$text="<h3>Bienvenido a Newviewsoft<h3><br><br><a><img src='logo.png' width='50px' /></a><br><br>
        <b> tu codigo es:  <b>$this->codigo<b><br><br> por favor ingresar a esta direccion y verificar que todo este correcto http://localhost:8080/proyecto/ <br><br> gracias por usar nuestro sistema de informacion";
        
        //se pasan a variables globales     
        $this->asunto=$asun;
		$this->heade=$head;
		$this->texto=$text;
	
    }	

    /*****************************METODO DOCUMENTO************************************** */

    public function documentos($datos)
    {

            //Si tipo de documento es cedula de ciudadania
            if($datos["tipo_documento"]=='CC'){

                $this->identificador = 1;
                $this->documento = $datos["tipo_documento"] . $datos["documento"];
            }

            //Si tipo de documento es tipo documento
            if($datos["tipo_documento"]=='TI'){

                $this->identificador = 2;
                $this->documento = $datos["tipo_documento"] . $datos["documento"];
            }

            //Si tipo de documento es cedula de extrangeria
            if($datos["tipo_documento"]=='CE'){
                
                $this->identificador = 3;
                $this->documento = $datos["tipo_documento"] . $datos["documento"];
            }
    }


    /***********************METODO INGRESO USUARIOS********************************/
    public function ingreso($datos)
    {   
            

            $this->db->query("SELECT documento,fk_estado FROM dato_persona WHERE documento = ? && fk_estado = '1'");
            $this->db->bind(1, $this->documento);
            $this->db->execute();
            $estado=$this->db->rowCount();

        //if para saber el estadi del usuario (1. activo o 0. inactivo)
        if($estado == 1){   

                $this->db->query("SELECT documento, contrasena, primer_nombre, primer_apellido, tipo_documento, tipo_rol FROM  dato_persona     
                                    INNER JOIN tipo_documento ON dato_persona.fk_tipo_documento = tipo_documento.id_tipo_documento  
                                    INNER JOIN rol ON rol.fk_documento = dato_persona.documento     
                                    INNER JOIN tipo_rol ON rol.fk_tipo_rol = tipo_rol.id_tipo_rol   
                                    WHERE dato_persona.documento = ? AND dato_persona.fk_tipo_documento = ? 
                                    AND dato_persona.contrasena = ?");


                $this->db->bind(1, strip_tags($this->documento));
                $this->db->bind(2, strip_tags($this->identificador));
                $this->db->bind(3, strip_tags(md5($datos['password'])));
                $this->db->execute();
                $login=$this->db->rowCount();       

            //if para saber si todo esta correcto (1. correcto o 0. incorrecto)
            if($login == 1){         

                //if para  convertir todo en un array
                if($cargo=$this->db->assoc()){

                    //si el cargo es  administrador 
                    if($cargo['tipo_rol'] == 'Administrador'){

                            $_SESSION['Administrador'] = 4 ;
                            $_SESSION['nombre']=$cargo["primer_nombre"];
                            $_SESSION['apellido']=$cargo["primer_apellido"];
                            return true;
                        }
                        //si el cargo es apoyo administrador
                        if($cargo['tipo_rol'] == 'Apoyo Administrativo'){

                            $_SESSION['Apoyo Admin'] = 3;
                        }
                        //si el cargo es instructor
                        if($cargo['tipo_rol'] == 'Instructor'){

                            $_SESSION['Instructor'] = 2;
                        }
                    }
                //else del login    
            }else{

                 return false;   
            }
            // else de estado    
            }else{

                return false;
            }
    }


    /*********************METODO REGISTRO USUARIOS************************** */
    public function registro($datos)
    {

            $this->db->query('SELECT * FROM permiso WHERE id_documento = ?');
            $this->db->bind(1, $this->documento );
            $this->db->execute();
            $busca=$this->db->rowCount();

            //Se comprueba si esta en las tabla permisos
            if($busca==1) {

                    $this->db->query("INSERT INTO dato_persona (documento, primer_nombre, segundo_nombre, primer_apellido,  
                                      segundo_apellido, correo, contrasena, fk_tipo_documento) VALUES (? , ?, ?, ?, ?, ?, ?, ?)");

                    //vincular los valores
                    $this->db->bind(1, strip_tags($this->documento));
                    $this->db->bind(2, strip_tags(ucwords(strtolower($datos['primer_nombre']))));
                    $this->db->bind(3, strip_tags(ucwords(strtolower($datos['segundo_nombre']))));
                    $this->db->bind(4, strip_tags(ucwords(strtolower($datos['primer_apellido']))));
                    $this->db->bind(5, strip_tags(ucwords(strtolower($datos['segundo_apellido']))));
                    $this->db->bind(6, strip_tags($datos['correo']));
                    $this->db->bind(7, strip_tags($this->codigo));
                    $this->db->bind(8, strip_tags($this->identificador));
                    $resul=$this->db->execute();
                
                //registro de usuario       
                if($resul==true){

                        return true;//true para eliminar cuando funcione los correos

                        $exito=mail($datos ["correo"],$this->asunto,$this->texto,$this->heade);

                    //if del email
                    if($exito==true){

                          return true;
                    //else correo
                    }else{

                        return false;
                    }
            //else de registro usuario           
            }else{

                return false;
            }
        //else de permiso
        }else{

            return false;
        }
    }

    /*******************METODO RECUPERAR CONTRASEÑA***************************/
    public function recuperarCodigo($datos)
    {
        $correo=$datos ['correo'];
        $this->db->query("SELECT * FROM dato_persona  WHERE   fk_tipo_documento= ?  AND documento= ?  ");
        $this->db->bind(1, $this->identificador);
        $this->db->bind(2, $this->documento);
        
        $this->db->execute();
        $busca=$this->db->rowCount();
        
        echo $busca;

        if($busca==1)
        { 
            echo $this->codigo;
            $this->db->query("UPDATE dato_persona SET contrasena= :codigo WHERE 
                id_tipo_documento= :tdoc AND documento= :documento AND correo= :email");
            $this->db->bind(':tdoc',$this->identificador);
            $this->db->bind(':documento',$this->documento);
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
<?php

    class Aprendiz
    {
        private $db;
        private $documento;
        private $identificador;
        
        public function __construct()
        {
            $this->db=new Base();
        }

        public function documento($datos){

                //Se convierten  y concatenan los tipos de documento y documento al codigo db
                if ($datos['tipo_documento'] == 'CC'){

                    $this->identificador=1;
                    $this->documento = $datos['tipo_documento'] . $datos['documento'];
                }
    
                if ($datos['tipo_documento'] == 'TI'){
    
                    $this->identificador=2;
                    $this->documento = $datos['tipo_documento'] . $datos['documento'];
                }
    
                if ($datos['tipo_documento'] == 'CE'){
    
                    $this->identificador=3;
                    $this->documento = $datos['tipo_documento'] . $datos['documento'];
                }


        }

        //crear aprendiz
        public function crear($datos)
        {

            $this->db->query("SELECT dato.documento, permiso.id_documento FROM dato_persona as dato, permiso WHERE  dato.documento = ? AND permiso.id_documento = ?");
            $this->db->bind(1,$this->documento);
            $this->db->bind(2,$this->documento);
            $this->db->execute();
            $cont=$this->db->rowCount();
            if($cont==0) {

                $this->db->query("INSERT INTO permiso VALUES (?)");
                $this->db->bind(1, $this->documento);
                $this->db->execute();
                $cont2=$this->db->rowCount();
                if($cont2==1){

                    $this->db->query("INSERT INTO dato_persona (documento, primer_nombre, segundo_nombre, primer_apellido,  
                    segundo_apellido, correo, contrasena,fk_estado,fk_ficha,fk_tipo_documento) VALUES (:doc,:pnombre,:snombre,:papellido,
                    :sapellido,:mail,'Null','2',:fichas,:tdocumento )");

                    //vincular los valores
                    $this->db->bind(':doc', strip_tags($this->documento));
                    $this->db->bind(':pnombre', strip_tags(ucwords(strtolower($datos['primer_nombre']))));
                    $this->db->bind(':snombre', strip_tags(ucwords(strtolower($datos['segundo_nombre']))));
                    $this->db->bind(':papellido', strip_tags(ucwords(strtolower($datos['primer_apellido']))));
                    $this->db->bind('sapellido', strip_tags(ucwords(strtolower($datos['segundo_apellido']))));
                    $this->db->bind(':mail', strip_tags($datos['correo']));
                    $this->db->bind(':fichas', strip_tags($datos['ficha']));
                    $this->db->bind(':tdocumento', strip_tags($this->identificador));
                    $this->db->execute();
                    $cont3=$this->db->rowCount();
                    
                    if($cont3==1){
                        return true;
                    }else{

                        return false;
                    }

                }

            }else{

                return false;

            }
        }
        
        
        /*****************Consulta fichas******************/
        public function consultaFicha(){
            $this->db->query("SELECT codigo_ficha FROM ficha WHERE codigo_ficha LIKE '%%' ");
            $this->db->execute();
            $respuesta=$this->db->objetos();
            return $respuesta;
        }
  
      

    }


?>
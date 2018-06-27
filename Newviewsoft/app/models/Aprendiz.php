<?php

    class Aprendiz
    {
        private $db;
        
        public function __construct()
        {
            $this->db=new Base();
        }

        //crear aprendiz
        public function crear($datos)
        {

            $this->db->query('SELECT numero_doc FROM aprendices WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){
            $this->db->query('INSERT INTO aprendices (codigo_tipo_doc,numero_doc,primer_nom,segundo_nom,primer_apelli,segundo_apelli,correo,telefono_fijo,telefono_celu,codigo_ficha)
             VALUES (:tdoc , :ndoc, :nombre1, :nombre2, :apellido1, :apellido2, :email, :tfijo, :tcelular, :ficha)');
            //vincular los valores
            $this->db->bind(':tdoc', $datos['tdocumento']);
            $this->db->bind(':nombre1', $datos['nombre1']);
            $this->db->bind(':nombre2', $datos['nombre2']);
            $this->db->bind(':apellido1', $datos['apellido1']);
            $this->db->bind(':apellido2', $datos['apellido2']);
            $this->db->bind(':ndoc', $datos['ndocumento']);
            $this->db->bind(':email', $datos['correo']);
            $this->db->bind(':tfijo', $datos['tfijo']);
            $this->db->bind(':tcelular', $datos['tcelular']);
            $this->db->bind(':ficha', $datos['ficha']);
            $this->db->execute();  
            $resul=$this->db->rowCount();
            if($resul==1)
            {
                return true;  
            }else{
                return false;
            }
                
            }else{
                return false;
            }

        }

        //cambio de jornada
        public function cambioJornada($datos)
        {

            $this->db->query('SELECT numero_doc FROM cambio_jornada WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();

            if($busca==0){
              $this->db->query("INSERT INTO cambio_jornada (fecha_cambio_j,tiempo_cambio_j,numero_doc,descripcion_cambio_j) VALUES (:fecha, :tiempo, :ndoc, :descripcion)");
              $this->db->bind(':fecha', $datos ['fecha']);
              $this->db->bind(':tiempo', $datos ['tiempo']);
              $this->db->bind(':ndoc', $datos ['ndocumento']);
              $this->db->bind(':descripcion', $datos ['descripcion']);  
              $this->db->execute();
              $result=$this->db->rowCount();

              if($result==1)
              {
                return true;
              }else{return false;}
            }else{
                return false;
            }

        }
        
        //retiro voluntario
        public function retiroVoluntario($datos)
        {

            $this->db->query('SELECT numero_doc FROM retiro_voluntario WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();

            if($busca==0){

              $this->db->query("INSERT INTO retiro_voluntario (fecha_retiro_volun,tiempo,numero_doc,observacion_retiro_volun
              ) VALUES (:fecha, :tiempo, :ndoc, :observacion)");
              $this->db->bind(':fecha', $datos ['fecha']);
              $this->db->bind(':tiempo', $datos ['tiempo']);
              $this->db->bind(':ndoc', $datos ['ndocumento']);
              $this->db->bind(':observacion', $datos ['observacion']);  
              $this->db->execute();
              $result=$this->db->rowCount();

              if($result==1)
              {
                return true;

              }else{return false;}
            }else{
                return false;
            }

        }

        //aplazamiento
        public function aplazamiento($datos)
        {

            $this->db->query('SELECT numero_doc FROM aplazamiento WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();

            if($busca==0){

              $this->db->query("INSERT INTO aplazamiento (apla_fecha_inicial,apla_fecha_final,tiempo,numero_doc,apla_motivo_solicitud,respuesta_apla) VALUES (:fecha1, :fecha2, :tiempo, :ndoc, :observacion, :respuesta)");
              $this->db->bind(':fecha1', $datos ['fecha1']);
              $this->db->bind(':fecha2', $datos ['fecha2']);
              $this->db->bind(':tiempo', $datos ['tiempo']);
              $this->db->bind(':ndoc', $datos ['ndocumento']);
              $this->db->bind(':observacion', $datos ['motivo']);  
              $this->db->bind(':respuesta', $datos ['respuesta']);  
              $this->db->execute();
              $result=$this->db->rowCount();

              if($result==1)
              {
                return true;

              }else{return false;}
            }else{
                return false;
            }

        }

        public function desercion($datos)
        {

            $this->db->query('SELECT numero_doc FROM desercion WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){
                echo $busca;

              $this->db->query("INSERT INTO desercion (fecha_ini_desercion,fecha_fin_desercion,tiempo_deser,numero_doc,penalizacion,documento_inst) VALUES (:fecha1, :fecha2, :tiempo, :ndoc, :penalizacion, :docInstructor)");
              $this->db->bind(':fecha1', $datos ['fecha1']);
              $this->db->bind(':fecha2', $datos ['fecha2']);
              $this->db->bind(':tiempo', $datos ['tiempo']);
              $this->db->bind(':ndoc', $datos ['ndocumento']);
              $this->db->bind(':penalizacion', $datos ['penalizacion']);  
              $this->db->bind(':docInstructor', $datos ['docInstructor']);  
              $this->db->execute();
              $result=$this->db->rowCount();

              if($result==1)
              {
                return true;

              }else{return false;}
            }else{
                return false;
            }

        }

        //traslado
        public function traslado($datos){

            $this->db->query('SELECT numero_doc FROM traslado WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){

              $this->db->query("INSERT INTO traslado (fecha_traslado,tiempo_traslado,numero_doc,traslado_motivo_solicitud,traslado_respuesta) 
                                VALUES (:fecha, :tiempo, :ndoc, :motivo, :respuesta)");
              $this->db->bind(':fecha', $datos ['fecha']);
              $this->db->bind(':tiempo', $datos ['hora']);
              $this->db->bind(':ndoc', $datos ['ndocumento']);
              $this->db->bind(':motivo', $datos ['motivo']);  
              $this->db->bind(':respuesta', $datos ['respuesta']);  
              $this->db->execute();
              $result=$this->db->rowCount();

              if($result==1)
              {
                return true;

              }else{return false;}
            }else{
                return false;
            }

        }

        //reintegro
        public function reintegro($datos){


            $this->db->query('SELECT numero_doc FROM reintegro WHERE numero_doc='. $datos['ndocumento'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){

              $this->db->query("INSERT INTO reintegro (fecha_ini,fecha_fin,hora,numero_doc,descripcion) 
                                VALUES (:fecha1, :fecha2, :tiempo, :ndoc, :descripcion)");
              $this->db->bind(':fecha1', $datos ['fecha1']);
              $this->db->bind(':fecha2', $datos ['fecha2']);
              $this->db->bind(':tiempo', $datos ['tiempo']);
              $this->db->bind(':ndoc', $datos ['ndocumento']);
              $this->db->bind(':descripcion', $datos ['descripcion']);  
              $this->db->execute();
              $result=$this->db->rowCount();

              if($result==1)
              {
                return true;

              }else{return false;}
            }else{
                return false;
            }   

        }







    }


?>
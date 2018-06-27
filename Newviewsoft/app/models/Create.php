<?php

    class Create
    {
        private $db;

        public function __construct()
        {
            $this->db = new Base();
        }

        public function formacion($datos)
        {       
            $this->db->query('SELECT nombre_formacion FROM formacion WHERE nombre_formacion='. $datos['formacion'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){
            $this->db->query('INSERT INTO formacion (nombre_formacion) VALUES (:formacion)');
            //vincular los valores
            $this->db->bind(':formacion', $datos['formacion']);
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
    
        public function trimestre($datos)
        {

            $this->db->query('SELECT nombre_trimestre FROM trimestre WHERE nombre_trimestre='. $datos['trimestre'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){
            $this->db->query('INSERT INTO trimestre (nombre_trimestre) VALUES (:trimestre)');
            //vincular los valores
            $this->db->bind(':trimestre', $datos['trimestre']);
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
    
        public function jornada($datos)
        {
            $this->db->query('SELECT nombre_jornada FROM jornada WHERE nombre_jornada='. $datos['jornada'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){
            $this->db->query('INSERT INTO jornada (nombre_jornada) VALUES (:jornada)');
            //vincular los valores
            $this->db->bind(':jornada', $datos['jornada']);
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
    
        public function ficha($datos)
        {
    
        }
    
        public function sede($datos)
        {

            $this->db->query('SELECT nombre_sede FROM sede WHERE nombre_sede='. $datos['sede'] . "");
            $this->db->execute();
            $busca=$this->db->rowCount();
            if($busca==0){
            $this->db->query('INSERT INTO sede (nombre_sede) VALUES (:sede)');
            //vincular los valores
            $this->db->bind(':sede', $datos['sede']);
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




    }


?>
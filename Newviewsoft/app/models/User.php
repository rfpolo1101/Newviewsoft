<?php

class User
{

    private $db;

    public function __construct()
    {

        $this->db = new Base();

    }


    public function asignar($datos)
    {
            
        $this->db->query('SELECT numero_doc FROM usuarios WHERE numero_doc='. $datos['ndocumento'] . "");
        $this->db->execute();
        $busca=$this->db->rowCount();
        if($busca==1){
          $this->db->query("UPDATE usuarios SET codigo_cargo=:cargo WHERE numero_doc=:ndocumento");
          $this->db->bind(':ndocumento', $datos ['ndocumento']);
          $this->db->bind(':cargo', $datos ['cargo']); 
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
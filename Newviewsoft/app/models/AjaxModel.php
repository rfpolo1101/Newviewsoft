<?php

class AjaxModel
{

    private $db;
    private $documento;

    public function __construct()
    {

        $this->db = new Base();

    }


    public function programaAjaxModel($datos){

        $this->db->query("SELECT * FROM programa_formacion WHERE id_programa_formacion = $datos");
        $this->db->execute();
        return $this->db->objeto();

    }

    public function ConsultaPrograma($datos){

        $this->db->query("SELECT * FROM competencias WHERE fk_programa = $datos");
        $this->db->execute();
        return $this->db->objetos();
    }

}

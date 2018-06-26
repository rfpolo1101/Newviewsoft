<?php
class perfil_modelos
 {
    private $bd;
    private $documento;
    public function __construct()
    {

        require_once ("conexion.php");
        $this->bd->Conexion::conectar();
    }

    public function set_recive1($documento)
    {

        $this->documento=$documento;

    }

    public function consulta_perfil()
    {

        $sql="SELECT * FROM usuarios";

    }


 }


?>
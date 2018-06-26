<?php 

class Tdocumento_modelo
{

    private $bd;
    private $tdocumento;

    public function __construct()
    {
        require_once ("conexion.php");

        $this->bd=Conexion::conectar();
    }

    public function set_recibe($tdocumento)
    {
        $this->tdocumento=$tdocumento;
    }

    public function set_tdocumento()
    {
        $consulta="SELECT name_tipo_doc FROM tipo_documento WHERE name_tipo_doc='$this->tdocumento'";
        $resultado2=$this->bd->prepare($consulta);
        $resultado2->execute();
        $busca=$resultado2->rowCount();

        if($busca==0)
        {
            $sql="INSERT INTO tipo_documento (name_tipo_doc) VALUES ('$this->tdocumento')";
            $resultado=$this->bd->prepare($sql);
            $resultado->execute();

            if($resultado==true)
            {

                echo "el documento: $this->tdocumento fue guardada con exito!";  

            }else{
                echo "error por favor intente de nuevo";
            }


        }else{
                echo "el tipo de documento ya existe";
            }

        }


    }








?>
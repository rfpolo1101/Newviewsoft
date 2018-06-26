<?php


class Jornada_modelo
{

    private $bd;
    private $jornada;
    public function __construct()
    {

        require_once("conexion.php");

        $this->bd=Conexion::conectar();
    }

    public function set_recibe($jornada)
    {

        $this->jornada=$jornada;
    }

    public function set_jornada()
    {
        $consulta="SELECT nombre_jornada FROM jornada WHERE nombre_jornada='$this->jornada'";
        $resultado1=$this->bd->prepare($consulta);
        $resultado1->execute();
        $busca=$resultado1->rowCount();

        if($busca==0)
        {
            $sql="INSERT INTO jornada (nombre_jornada) VALUES ('$this->jornada')";
            $resultado=$this->bd->prepare($sql);
            $resultado->execute();

            if($resultado==true)
            {
                echo "la jornada: $this->jornada fue guardada con exito!";  

            }else{
                    echo "error por favor intente de nuevo";
                 }


        }else{
                echo "la jornada: $this->jornada ya existe";
             }

        }




    }



?>
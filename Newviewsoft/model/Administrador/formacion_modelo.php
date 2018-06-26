<?php

class Formacion_modelo
{
    private $bd;
    private $formacion;

    public function __construct()
    {
        require_once ("conexion.php");

        $this->bd=Conexion::conectar();

    }

    public function set_recibe($forma)
    {
        $this->formacion=$forma;

    }

    public function set_formacion()
    {

        $consulta="SELECT nombre_formacion FROM formacion WHERE nombre_formacion='$this->formacion'";
        $resultado2=$this->bd->prepare($consulta);
        $resultado2->execute();
        $busca=$resultado2->rowCount();

        if($busca==0)
        {
            $sql="INSERT INTO formacion (nombre_formacion) VALUES ('$this->formacion')";
            $resultado=$this->bd->prepare($sql);
            $resultado->execute();

            if($resultado==true)
            {

                echo "la formacion: $this->formacion fue guardada con exito!";  

            }else{
                echo "error por favor intente de nuevo";
            }


        }else{
                echo "esta formacion ya existe";
            }

        }
    }









?>
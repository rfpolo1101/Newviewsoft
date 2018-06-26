<?php

class Trimestre_modelo
{
    private $bd;
    private $trimestre;
    public function __construct()
    {   
        require_once("conexion.php");
        
        $this->bd=Conexion::conectar();
    }

    public function set_recive($tri)
    {

        $this->trimestre=$tri;

    }


    public function set_trimestre()
    {
        $consulta="SELECT nombre_trimestre FROM trimestre WHERE nombre_trimestre='$this->trimestre'";
        $resultado1=$this->bd->prepare($consulta);
        $resultado1->execute();
        $busca=$resultado1->rowCount();

        if($busca==0)
        {
            $sql="INSERT INTO trimestre (nombre_trimestre) VALUES ('$this->trimestre')";
            $resultado=$this->bd->prepare($sql);
            $resultado->execute();

            if($resultado==true)
            {
                echo "la formacion: $this->trimestre fue guardada con exito!";  

            }else{
                    echo "error por favor intente de nuevo";
                 }


        }else{
                echo "el trimestre $this->trimestre ya existe";
             }

        }

    }






?>
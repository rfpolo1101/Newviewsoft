<?php

class Ficha_modelo
{
    private $bd;
    private $ficha;
    private $ctrimestre;
    private $cjornada;
    private $csede;
    private $cformacion;

    public function __construct()
    {
        require_once ("conexion.php");
        $this->bd=Conexion::conectar();
    }

    public function set_recibe($ficha,$trimestre,$jornada,$sede,$formacion){

        $this->ficha=$ficha;
        $this->ctrimestre=$trimestre;
        $this->cjornada=$jornada;
        $this->csede=$sede;
        $this->cformacion=$formacion;
    }

    public function set_ficha(){
        
        $consulta="SELECT codigo_ficha FROM ficha WHERE codigo_ficha='$this->ficha'";
        $resultado1=$this->bd->prepare($consulta);
        $resultado1->execute();
        $busca=$resultado1->rowCount();

        if($busca==0)
        {
            $sql="INSERT INTO ficha (codigo_ficha,codigo_trimestre,codigo_jornada,codigo_sede,codigo_formacion) 
                    VALUES ('$this->ficha','$this->ctrimestre','$this->cjornada','$this->csede','$this->cformacion')";
            $resultado=$this->bd->prepare($sql);
            $resultado->execute();

            if($resultado==true)
            {
                echo "la ficha: $this->ficha fue guardada con exito!";  

            }else{
                    echo "error por favor intente de nuevo";
                 }


        }else{
                echo "el trimestre $this->ficha ya existe";
             }

        }


        
    }





?>
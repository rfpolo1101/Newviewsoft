<?php
class Sede_modelo
{
    private $bd;
    private $sede;
    public function __construct()
    {
        require_once ("conexion.php");
        $this->bd=Conexion::conectar();

    }

    public function set_recibe($sede)
    {

        $this->sede=$sede;

    }

    public function set_sede()
    {
        
        $consulta="SELECT nombre_sede FROM sede WHERE nombre_sede='$this->sede'";
        $resultado2=$this->bd->prepare($consulta);
        $resultado2->execute();
        $busca=$resultado2->rowCount();

        if($busca==0)
        {
            $sql="INSERT INTO sede (nombre_sede) VALUES ('$this->sede')";
            $resultado=$this->bd->prepare($sql);
            $resultado->execute();

            if($resultado==true)
            {

                echo "la sede: $this->sede fue guardada con exito!";  

            }else{
                echo "error por favor intente de nuevo";
            }


        }else{
                echo "esta sede ya existe";
            }

        }

    }




?>
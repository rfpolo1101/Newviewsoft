<?php

class Novedades_modelo
{
    private $bd;
    private $fecha1;
    private $fecha2;
    private $hora;
    private $documento;
    private $doc_instructor;
    private $descripcion;
    private $respuesta;
    private $msolicitud;
    private $penalizacion;
    public function __construct()
    {

        require_once ("conexion.php");

        $this->bd=Conexion::conectar();

    }

    /*******************Cambio jornada**********************/
    public function recibe_Cjornada($fecha,$hora,$documento,$descripcion)
    {
        $this->fecha1=$fecha;
        $this->hora=$hora;
        $this->documento=$documento;
        $this->descripcion=$descripcion;
    }

    public function registro_Cjornada()
    {
        $consulta="SELECT aprendices FROM numero_doc WHERE numero_doc='$this->documento'";
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

    /*******************Retiro voluntario**********************/




?>
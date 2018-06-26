<?php

class Ficha_modelo
{
    private $bd;
    private $ficha;
    private $jornada;
    private $sede;
    private $formacion;

    public function __construct()
    {
        $this->bd=Conexion::conectar();
    }

    public function set_recibe($ficha,$jornada,$sede,$formacion){

        $this->ficha=$ficha;
        $this->jornada=$jornada;
        $this->sede=$sede;
        $this->formacion=$formacion;
    }

    public function set_ficha(){


        
    }



}

?>
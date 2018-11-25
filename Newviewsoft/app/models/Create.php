<?php

class Create
{
    private $db;

    /**********Constructor**************/
    public function __construct()
    {
        $this->db = new Base();
    }

    /* Metodo para guardar datos en tablas que necesitan un solo campo*/
    public function tiposCrear($datos)
    {

        $campos = strip_tags($datos['campo']);
        $this->db->query("SELECT * FROM $campos WHERE $campos = ?");
        $this->db->bind(1, strip_tags(ucwords(strtolower($datos['dato']))));
        $this->db->execute();
        $busca = $this->db->rowCount();
        if ($busca == 0) {
            $this->db->query("INSERT INTO $campos ($campos) VALUES (?)");
            //vincular los valores
            $this->db->bind(1, strip_tags(ucwords(strtolower($datos['dato']))));
            $this->db->execute();
            $resul = $this->db->rowCount();
            if ($resul == 1) {

                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }

    }

    /*Metodo para guardar fichas*/
    public function ficha($datos)
    {
        $this->db->query("SELECT codigo_ficha FROM ficha WHERE codigo_ficha= ?");
        $this->db->bind(1, strip_tags($datos["ficha"]));
        $this->db->execute();
        $busca = $this->db->rowCount();
        if ($busca == 0) {

            $this->db->query("INSERT INTO ficha (codigo_ficha,fk_sede,fk_jornada,fk_tipo_formacion,fk_modalidad,fk_programa_formacion,fk_trimestre)
                                    VALUES (?,?,?,?,?,?,?)");

            $this->db->bind(1, strip_tags($datos["ficha"]));
            $this->db->bind(2, strip_tags($datos["sede"]));
            $this->db->bind(3, strip_tags($datos["jornada"]));
            $this->db->bind(4, strip_tags($datos["tipo_formacion"]));
            $this->db->bind(5, strip_tags($datos["modalidad"]));
            $this->db->bind(6, strip_tags($datos["programa_formacion"]));
            $this->db->bind(7, strip_tags($datos["trimestre"]));
            $this->db->execute();
            $resul = $this->db->rowCount();

            if ($resul == 1) {
                return true;
            } else {

                return false;
            }

        } else {
            return false;
        }
    }

    /*Metodo para guardas sedes*/
    public function sede($datos)
    {

        $this->db->query("SELECT sede FROM sede WHERE sede= ?");
        $this->db->bind(1, strip_tags($datos["sede"]));
        $this->db->execute();
        $busca = $this->db->rowCount();
        if ($busca == 0) {
            $this->db->query("INSERT INTO sede (sede,fk_ciudad) VALUES (?,?)");
            //vincular los valores
            $this->db->bind(1, strip_tags(ucwords(strtolower($datos['sede']))));
            $this->db->bind(2, $datos['ciudad']);
            $this->db->execute();
            $resul = $this->db->rowCount();
            if ($resul == 1) {
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }

    }

    /* Metodo que  consulta distintas tablas al mismo tiempo 
    
    * Sede, jornada, tipos de formacion, modalidades,  programas de formacion, trimestre y ciudad.

    */
    public function consulta()
    {

        $this->db->query("SELECT * FROM sede WHERE sede LIKE '%%' ");

        $this->db->execute();
        $sede = $this->db->objetos();

        $this->db->query("SELECT * FROM jornada WHERE jornada LIKE '%%'");
        $this->db->execute();
        $jornada = $this->db->objetos();

        $this->db->query("SELECT * FROM tipo_de_formacion WHERE tipo_formacion LIKE '%%'");
        $this->db->execute();
        $tipo_formacion = $this->db->objetos();

        $this->db->query("SELECT * FROM modalidad WHERE modalidad LIKE '%%'");
        $this->db->execute();
        $modalidad = $this->db->objetos();

        $this->db->query("SELECT * FROM programa_formacion WHERE programa_formacion LIKE '%%'");
        $this->db->execute();
        $programa_formacion = $this->db->objetos();

        $this->db->query("SELECT * FROM trimestre WHERE trimestre LIKE '%%'");
        $this->db->execute();
        $trimestre = $this->db->objetos();

        $this->db->query("SELECT * FROM ciudad WHERE ciudad LIKE '%%'");
        $this->db->execute();
        $ciudad = $this->db->objetos();

        $respuesta = [

            "sede" => $sede,
            "jornada" => $jornada,
            "tipo_formacion" => $tipo_formacion,
            "modalidad" => $modalidad,
            "programa_formacion" => $programa_formacion,
            "trimestre" => $trimestre,
            "ciudad" => $ciudad,
        ];

        return $respuesta;

    }

}

<?php

class User
{

    private $db;
    private $documento;

    public function __construct()
    {

        $this->db = new Base();

    }

    public function documento($datos)
    {

        //Se convierten  y concatenan los tipos de documento y documento al codigo db
        if ($datos['tipo_documento'] == 'CC') {

            $this->identificador = 1;
            $this->documento = $datos['tipo_documento'] . $datos['documento'];
        }

        if ($datos['tipo_documento'] == 'TI') {

            $this->identificador = 2;
            $this->documento = $datos['tipo_documento'] . $datos['documento'];
        }

        if ($datos['tipo_documento'] == 'CE') {

            $this->identificador = 3;
            $this->documento = $datos['tipo_documento'] . $datos['documento'];
        }

    }

    /*Metod el cual permite asignar roles. */
    public function asignar($datos)
    {   


        
        $this->db->query("SELECT * FROM rol WHERE fk_documento= ? ");
        $this->db->bind(1, $this->documento);
        $this->db->execute();
        $user = $this->db->objetos();
        $busca = $this->db->rowCount();
        if(isset(SESSSION['Super_admin']) and $user["rol"] != 5){

            if ($busca == 1) {
                $this->db->query("UPDATE rol SET fk_tipo_rol = :rol WHERE fk_documento= :doc");
                $this->db->bind(":rol", strip_tags($datos['cargo']));
                $this->db->bind(":doc", trim(strip_tags($this->documento)));
                $this->db->execute();
                $result = $this->db->rowCount();
                if ($result == 1) {
                    return true;

                } else {return false;}
            } else {
                return false;
            }

        }

    }

    /*Metodo el cual permite adtualizar el perfil */
    public function actualizarPefil($datos)
    {
        $this->db->query("SELECT * FROM dato_persona WHERE documento = ? ");
        $this->db->bind(1, $_SESSION["ddocumento"]);
        $this->db->execute();
        $busca = $this->db->rowCount();
        if ($busca == 1) {
            $this->db->query("UPDATE dato_persona SET primer_nombre = ?, segundo_nombre = ?, primer_apellido = ?,
                         segundo_apellido = ?, correo = ? WHERE documento = ? AND contrasena = ? ");

            $this->db->bind(1, strip_tags(ucwords(strtolower($datos["primer_nombre"]))));
            $this->db->bind(2, strip_tags(ucwords(strtolower($datos["segundo_nombre"]))));
            $this->db->bind(3, strip_tags(ucwords(strtolower($datos["primer_apellido"]))));
            $this->db->bind(4, strip_tags(ucwords(strtolower($datos["segundo_apellido"]))));
            $this->db->bind(5, strip_tags(ucwords(strtolower($datos["correo"]))));
            $this->db->bind(6, $_SESSION["ddocumento"]);
            $this->db->bind(7, strip_tags(md5($datos['password'])));
            $this->db->execute();
            $result = $this->db->rowCount();
            if ($result == 1) {
                return true;

            } else {return false;}
        } else {
            return false;
        }

    }

    /*Metodo el cual colsulta los datos de los usuarios*/
    public function perfiles()
    {

        $this->db->query("SELECT * FROM dato_persona WHERE documento = ? ");
        $this->db->bind(1, $_SESSION["ddocumento"]);
        $this->db->execute();
        return $this->db->objetos();

    }

}

<?php
class Busquedas
{

    private $db;
    protected $resul;

    public function __construct()
    {
        $this->db= new Base();

    }


    public function devuelveUser()
    {
      
        $this->db->query("SELECT * FROM dato_persona as dato 
        INNER JOIN tipo_documento as tipo ON dato.fk_tipo_documento= tipo.id_tipo_documento 
        INNER JOIN rol ON dato.documento = rol.fk_documento 
        INNER JOIN tipo_rol ON tipo_rol.id_tipo_rol = rol.fk_tipo_rol");
            $this->db->execute();
            return  $this->db->objetos();
     }

    public function devuelveNovedades(){

        $this->db->query("SELECT * FROM dato_persona as datos 
                        INNER JOIN novedad  on novedad.fk_documento = datos.documento 
                        INNER JOIN tipo_novedad ON novedad.fk_tipo_novedad = tipo_novedad.id_tipo_novedad ");
            $this->db->execute();
            return  $this->db->objetos();
    }


}
?>
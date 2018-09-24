<?php
class Busquedas
{

    private $db;
    protected $resul;

    public function __construct()
    {
        $this->db= new Base();

    }

    public function user($datos)
    {       
        $this->resul=$datos ['usuarios'];
        return true;
    }

    public function devuelveUser()
    {
      
        $this->db->query('SELECT * FROM dato_persona as dato 
        INNER JOIN tipo_documento as tipo ON dato.fk_tipo_documento= tipo.id_tipo_documento 
        INNER JOIN rol ON dato.documento = rol.fk_documento 
        INNER JOIN tipo_rol ON tipo_rol.id_tipo_rol = rol.fk_tipo_rol  
        WHERE documento LIKE "%1%"');
            $this->db->execute();
            return  $this->db->objetos();
     }

}
?>
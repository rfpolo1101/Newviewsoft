<?php

class Asignar_rol
{
    private $db;
    private $tdocumento;
    private $ndocumento;
    private $rol;

    public function __construct()
    {
        require_once ("conexion.php");
        $this->db=Conexion::conectar();
    }

    public function set_recive($tdoc,$ndoc,$ro){

        $this->tdocumento=$tdoc;
        $this->ndocumento=$ndoc;
        $this->rol=$ro;
    }
    
    public function set_rol()
    {
        $sql="UPDATE usuarios SET codigo_cargo='$this->rol' WHERE codigo_tipo_doc='$this->tdocumento'  
        AND numero_doc='$this->ndocumento'";
        $resultado=$this->db->prepare($sql);
        $resultado->execute();
        if($resultado==true)
        {
            $prueba="SELECT * FROM usuarios WHERE  codigo_tipo_doc='$this->tdocumento' AND numero_doc='$this->ndocumento'";
            $resultado2=$this->db->prepare($prueba);
            $resultado2->execute();
            
            if ($array=$resultado2->fetch (PDO :: FETCH_ASSOC))
            {
                if($array ['codigo_tipo_doc']==$this->tdocumento AND $array ['numero_doc']==$this->ndocumento)
                {
                    echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
                    <strong>Actualizado:</strong> actualizado verifique su correo</div></div>";
                
                }else{ echo "error";}
            }else{echo "error1";}

       }

    }

}

?>
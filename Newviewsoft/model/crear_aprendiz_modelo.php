<?php

class Crear_Aprendiz
{
    private $bd;
    private $tdocumento;
    private $p_nombre;
    private $s_nombre;
    private $p_apellido;
    private $s_apellido;
    private $ndocumento;
    private $correo;
    private $telefono;
    private $telefono_c;
    private $ficha;

    public function __construct()
    {
        require_once ("conexion.php");
        $this->bd=Conexion::conectar();
    }


    public function set_resive($tdoc,$pnombre,$snombre,$papellido,$sapellido,$ndoc,$correo,$telefono,$telefono_c,$ficha)
    {
        $this->tdocumento=$tdoc;
        $this->p_nombre=$pnombre;
        $this->s_nombre=$snombre;
        $this->p_apellido=$papellido;
        $this->s_apellido=$sapellido;
        $this->ndocumento=$ndoc;
        $this->correo=$correo;
        $this->telefono=$telefono;
        $this->telefono_c=$telefono_c;
        $this->ficha=$ficha;
    }

    public function set_crear()
    {
        $sql="INSERT INTO aprendices (codigo_tipo_doc,numero_doc,primer_nom,segundo_nom,primer_apelli,segundo_apelli,correo,telefono_fijo,telefono_celu,codigo_ficha)   
 VALUES ('$this->tdocumento','$this->ndocumento','$this->p_nombre','$this->s_nombre','$this->p_apellido','$this->s_apellido','$this->correo','$this->telefono','$this->telefono_c','$this->ficha')";    

        $resultado=$this->bd->prepare($sql);   
        $resultado->execute();

        if($resultado==false)
        {

            $a= "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
  					<strong>Error:</strong>error al crear el aprendiz intente mas tarde</div></div>";


        }else
        {
            echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
  			<strong>Registrado:</strong>El aprendiz $this->p_nombre $this->p_apellido fue registrado</div></div>";

        }


    } 

}



?>
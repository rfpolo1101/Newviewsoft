<?php

class Crear_modelo
{

    private $bd;
    private $formacion;
    private $trimestre;
    private $jornada;
    private $ficha;
    private $sede;
    private $tdocumento;

        public function __construct()
         {
            require_once("conexion.php");
            $this->bd=Conexion::conectar();

         }
    /**************Formacion*************************************************************/
        public function recibe_Formacion($forma)
        {
             $this->formacion=$forma;
        }

        public function registro_Formacion()
        {
            $consulta="SELECT nombre_formacion FROM formacion WHERE nombre_formacion='$this->formacion'";
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

            }else
            {
                echo "error por favor intente de nuevo";
            }

            }else{
                echo "esta formacion ya existe";
             }

        }

    /**************Trimestre************************************************************/
        public function recibe_Trimestre($trimestre)
        {
             $this->trimestre=$trimestre;
        }

        public function registro_Trimestre()
        {

             $consulta="SELECT nombre_trimestre FROM trimestre WHERE nombre_trimestre='$this->trimestre'";
             $resultado1=$this->bd->prepare($consulta);
             $resultado1->execute();
             $busca=$resultado1->rowCount();

            if($busca==0)
            {
                 $sql="INSERT INTO trimestre (nombre_trimestre) VALUES ('$this->trimestre')";
                 $resultado=$this->bd->prepare($sql);
                 $resultado->execute();

                 if($resultado==true)
                 {
                echo "la formacion: $this->trimestre fue guardada con exito!";  

                }else{
                    echo "error por favor intente de nuevo";
                 }
                 }else{
                echo "el trimestre $this->trimestre ya existe";
            }
        }

     /**************Jornada**********************************************************/
        
        public function recibe_Jornada($jornada)
        {
             $this->jornada=$jornada;
        }
     
        public function registro_Jornada()
        {  
        
            $consulta="SELECT nombre_jornada FROM jornada WHERE nombre_jornada='$this->jornada'";
            $resultado1=$this->bd->prepare($consulta);
            $resultado1->execute();
            $busca=$resultado1->rowCount();
    
            if($busca==0)
            {
                $sql="INSERT INTO jornada (nombre_jornada) VALUES ('$this->jornada')";
                $resultado=$this->bd->prepare($sql);
                $resultado->execute();
    
                if($resultado==true)
                {
                    echo "la jornada: $this->jornada fue guardada con exito!";  
    
                }else{
                        echo "error por favor intente de nuevo";
                     }

                 }else{

                    echo "la jornada: $this->jornada ya existe";
            }
    
        }

         /**************Ficha**********************************************************/

         public function recibe_Ficha($ficha,$trimestre,$jornada,$sede,$formacion)
         {
                 $this->ficha=$ficha;
                 $this->trimestre=$trimestre;
                 $this->jornada=$jornada;
                 $this->sede=$sede;
                 $this->formacion=$formacion;
         }

         public function registro_Ficha()
         {
                $consulta="SELECT codigo_ficha FROM ficha WHERE codigo_ficha='$this->ficha'";
                $resultado1=$this->bd->prepare($consulta);
                $resultado1->execute();
                $busca=$resultado1->rowCount();
    
                if($busca==0)
                {
                $sql="INSERT INTO ficha (codigo_ficha,codigo_trimestre,codigo_jornada,codigo_sede,codigo_formacion) 
                        VALUES ('$this->ficha','$this->trimestre','$this->jornada','$this->sede','$this->formacion')";
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

        /**************Ficha**************************************************************/

        public function recibe_Sede($sede)
        {
            $this->sede=$sede;
        }

        public function registro_Sede(){

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

        /**************Tipo documento**************************************************************/

        public function recibe_TipoDocumento($tdocumento)
        {
            $this->tdocumento=$tdocumento;

        }

        public function registro_TipoDocumento()
        {

                $consulta="SELECT name_tipo_doc FROM tipo_documento WHERE name_tipo_doc='$this->tdocumento'";
                $resultado2=$this->bd->prepare($consulta);
                $resultado2->execute();
                $busca=$resultado2->rowCount();
    
                if($busca==0)
                {
                $sql="INSERT INTO tipo_documento (name_tipo_doc) VALUES ('$this->tdocumento')";
                $resultado=$this->bd->prepare($sql);
                $resultado->execute();
                $registra=$resultado->rowCount();

                if($registra==1)
                {
    
                    echo "el documento: $this->tdocumento fue guardada con exito!";  
    
                }else{
                    
                    echo "error por favor intente de nuevo";
                }
    
    
                }else{
                    echo "el tipo de documento ya existe";
                }

        }//Fin Metodo

    }//FIN CLASE




    





    





?>
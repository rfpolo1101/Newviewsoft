<?php 

class Crear extends Controlador
{   

    public function __construct()
    {
        $this->crearModelos = $this->modelo("Create");

    }

    public function index()
    {
        $this->vista('/inicio/admtd');    
    }

    /*********************Insertar datos (tipo)************************************/
    public function tipo($datos_ficha)
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");

            }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $datos = [

                    'campo' => $datos_ficha,
                    'dato' => $_POST ["tipo"]
                    
                 ];
                 

                    if ($this->crearModelos->tipos_crear($datos)){

                        $_SERVER['crear']=true;
                        $this->vista('administrador/' .  $datos_ficha);

                    }else{
                        $_SERVER['crear']=false;
                        $this->vista('administrador/' .  $datos_ficha);
                    }

            }else{
                
                $this->vista('administrador/' . $datos_ficha);    
            }
        }
    }

    /******************Insertar ficha*********************** */
    public function ficha()
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");

            }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){


                $guardar = [

                        "ficha" => $_POST["ficha"],
                        "sede" => $_POST["sede"],
                        "jornada" => $_POST["jornada"],
                        "trimestre" => $_POST["trimestre"],
                        "modalidad" => $_POST["modalidad"],
                        "tipo_formacion" => $_POST["tipo_formacion"],
                        "programa_formacion" => $_POST["programa_formacion"]
                ];

                if($this->crearModelos->ficha($guardar)){

                    $_SERVER['crear']=true;
                    $resul= $this->crearModelos->consulta();
                
                    $datos = $resul;
    
                  $this->vista("administrador/ficha",$datos);
                }else{
                    $_SERVER['crear']=false;

                    $resul= $this->crearModelos->consulta();
                
                    $datos = $resul;
    
                  $this->vista("administrador/ficha",$datos);                }

            }else{
                $resul= $this->crearModelos->consulta();
                
                $datos = $resul;

              $this->vista("administrador/ficha",$datos); 

            }
        }
    }



      /******************Insertar sede*********************** */
      public function sede()
      {
          session_start();
          
          if(!isset($_SESSION['Administrador']))
          {
              header("Location:" .  RUTA_URL . "/inicio");
  
              }else{
  
              if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  
                  $guardar = [
  
                         "sede" => $_POST["sede"],
                         "ciudad" => $_POST["ciudad"]
                  ];
  
                  if($this->crearModelos->sede($guardar)){
  
                      $_SERVER['crear']=true;
                      $resul= $this->crearModelos->consulta();
                  
                      $datos = $resul;
      
                    $this->vista("administrador/sede",$datos);
                  }else{
                      $_SERVER['crear']=false;
  
                      $resul= $this->crearModelos->consulta();
                  
                      $datos = $resul;
      
                    $this->vista("administrador/sede",$datos);                }
  
              }else{
                  $resul= $this->crearModelos->consulta();
                  
                  $datos = $resul;
  
                $this->vista("administrador/sede",$datos); 
  
              }
          }
      }

}




?>
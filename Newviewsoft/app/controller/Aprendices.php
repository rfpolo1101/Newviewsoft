<?php
Class Aprendices extends Controlador
{

    //constructor
    public function __construct()
    {
        //se verifica si existe en la carpeta model un archivo Sessiones
        $this->crearModelo = $this->modelo("Aprendiz");
    }

    //index
    public function index()
    {
        session_start();
        if(isset($_SESSION['Administrador'])){   
        $this->vista('/inicio/admtd');    
        }
        if(isset($_SESSION['ApoyoAdministrador'])){   
            $this->vista('/inicio/apymd');    
            }
    }

    /*******************************Crear aprendiz *****************************************/
    public function crear()
    {
        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){

            header('Location:' . RUTA_URL . '/inicio');  

        }else{

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $datos = [

                    'tipo_documento' => $_POST['tipo_documento'],
                    'documento' => $_POST ['documento'],
                    'correo' => $_POST ['correo'],
                    'primer_nombre' => $_POST['primer_nombre'],
                    'segundo_nombre' => $_POST ['segundo_nombre'],
                    'primer_apellido' => $_POST ['primer_apellido'],
                    'segundo_apellido' => $_POST ['segundo_apellido'],
                    'ficha' => $_POST ['ficha']
                ];
                    $this->crearModelo->documento($datos);
                if($this->crearModelo->crear($datos)){
                    $_SERVER['crear']=true;
                    $ddatos = $this->crearModelo->consultaFicha();
                
                    $datos = [ "datos2" => $ddatos ];
    
                    $this->vista('administrador/crearAprendiz', $datos);    
                    
                }else{

                    $ddatos = $this->crearModelo->consultaFicha();
                
                    $datos = [ "datos2" => $ddatos ];

                     $_SERVER['crear']=false;

                    $this->vista('administrador/crearAprendiz', $datos);    
                    
                    

                }
            }else{

                $ddatos = $this->crearModelo->consultaFicha();

                $datos = [ "datos2" => $ddatos ];

                $_SERVER['crear']=false;

                $this->vista('administrador/crearAprendiz', $datos);    
                
            }

        }

        
    }

    /******************************Novedades de los aprendices*****************************************/
    public function novedades($novedad){
        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){
            
            header('Location: ../inicio');  

        }else{

            if($_SERVER['REQUEST_METHOD'] == 'POST'){



                
            }else{
                    
                $this->vista("administrador/aplazamiento");
            }
        }
    }

    

    //desercion
    public function desercion()
    {   
        session_start();
        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){

            $this->vista('Location: ../inicio');

        }else{

            if($_SERVER['REQUEST_METHOD'] == "POST"){

                $datos = [

                    'fecha1' => $_POST ['FechaIniD'],
                    'fecha2' => $_POST ['FechaFinaD'],
                    'tiempo' => $_POST ['TiempoDeser'],
                    'ndocumento' => $_POST ['documento'],
                    'penalizacion' => $_POST ['penalizacion'],
                    'docInstructor' => $_POST ['docuInstruc']
                ];

                if($this->crearModelo->desercion($datos)){

                    $_SERVER['crear']=true;
                    $this->vista('administrador/desercion'); 

                }else{

                $_SERVER['crear']=false;
                $this->vista('administrador/desercion'); 

                }

            }else{

                $this->vista('administrador/desercion');
            }

        }

    }

}



?>
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

    //crear aprendiz
    public function crear()
    {
        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){

            header('Location:' . RUTA_URL . '/inicio');  

        }else{

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $datos = [

                    'tdocumento' => $_POST['tdocumento'],
                    'nombre1' => $_POST['pnom'],
                    'nombre2' => $_POST ['snom'],
                    'apellido1' => $_POST ['papel'],
                    'apellido2' => $_POST ['sapel'],
                    'ndocumento' => $_POST ['documento'],
                    'correo' => $_POST ['correo'],
                    'tfijo' => $_POST ['tfijo'],
                    'tcelular' => $_POST ['tcel'],
                    'ficha' => $_POST ['ficha']
                ];

                if($this->crearModelo->crear($datos)){

                    $_SERVER['crear']=true;
                    $this->vista('administrador/crearAprendiz');
                }else{

                    $_SERVER['crear']=false;
                    $this->vista('administrador/crearAprendiz');

                }
            }else{ $this->vista('administrador/crearAprendiz');}

        }

        
    }

    //cambio de jornada
    public function cambioJornada(){
        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){

            header('Location: ../inicio');  

        }else{

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $datos = [

                    'fecha' => $_POST ['FechaJor'],
                    'tiempo' => $_POST ['TiempoJor'],
                    'ndocumento' => $_POST ['documento'],
                    'descripcion' => $_POST ['DesJor']
                ];
                if($this->crearModelo->cambioJornada($datos))
                {
                    $_SERVER['jornada']=true;
                    $this->vista('administrador/cambioJornada');
                }else{

                    $_SERVER['jornada']=false;
                    $this->vista('administrador/cambioJornada');
                }

            }else{$this->vista('administrador/cambioJornada');}

        }

    }

    //retiro voluntario
    public function retiroVoluntario(){

        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){
            
        
            header('Location: ../inicio');  

        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {

                $datos =    [

                    'fecha' => $_POST['fechaRetiro'],
                    'tiempo'  => $_POST['tiempoRetiro'],
                    'ndocumento' => $_POST ['documento'],
                    'observacion' => $_POST ['observacion']
                ];

                if($this->crearModelo->retiroVoluntario($datos)){

                    $_SERVER['retiroVolutario']=true;
                    $this->vista('administrador/retiroVoluntario');
                }else{  
                    $_SERVER['retiroVolutario']=false;
                    $this->vista('administrador/retiroVoluntario');
                }


            }else{

                $this->vista('administrador/retiroVoluntario');
            }


        }

    }

    //aplazamiento

    public function aplazamiento()
    {   
        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"]))
        {
            
            header('Location: ../inicio');  

        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {

                $datos = [

                    'fecha1' => $_POST['FechaIniApla'],
                    'fecha2' => $_POST['FechaFinaApla'],
                    'tiempo' => $_POST['TiempoApla'],
                    'ndocumento' => $_POST ['documento'],
                    'motivo' => $_POST ['msoloapla'],
                    'respuesta' => $_POST ['respuestapla']
                ];

                if($this->crearModelo->aplazamiento($datos)){

                    $_SERVER['aplazamiento']=true;
                    $this->vista('administrador/aplazamiento');

                }else{

                    $_SERVER['aplazamiento']=false;
                    $this->vista('administrador/aplazamiento');
                }

            }else{

                $this->vista('administrador/aplazamiento');

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

                    $_SERVER['desercion']=true;
                    $this->vista('administrador/desercion'); 

                }else{

                $_SERVER['desercion']=false;
                $this->vista('administrador/desercion'); 

                }

            }else{

                $this->vista('administrador/desercion');
            }

        }

    }

    //traslado
    public function traslado()
    {
        session_start();
        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){

            $this->vista('Location: ..inicio');

        }else{

            if($_SERVER['REQUEST_METHOD'] == "POST"){

                $datos = [
                   
                    'fecha' => $_POST ['FechaTras'],
                    'hora' => $_POST ['TiempoTras'],
                    'ndocumento' => $_POST ['documento'],
                    'motivo' => $_POST ['MotiSoli'],                  
                    'respuesta' => $_POST ['Res']  
                ];

                if ($this->crearModelo->traslado($datos)){
                    $_SERVER['traslado']=true;
                    $this->vista('administrador/traslado');
                }else{
                    
                    $_SERVER['traslado']=false;
                    $this->vista('administrador/traslado');
                }
            
            }else{
                $this->vista('administrador/traslado');
            }
        }

    }

    //reintegro
    public function reintegro()
    {

        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"])){

            $this->vista('Location: ..inicio');
        }else{

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $datos = [

                'fecha1' => $_POST['FechaIniRein'],
                'fecha2' => $_POST['FechaFinaRein'],
                'tiempo' => $_POST['TiempoRein'],
                'ndocumento' => $_POST['documento'],
                'descripcion' => $_POST['DesRein'],
            ];

            if ($this->crearModelo->reintegro($datos)){

                $_SERVER['reintegro']=true;
                $this->vista('administrador/reintegro');
            }else{
                $_SERVER['reintegro']=false;
                $this->vista('administrador/reintegro');

            }

        }else{

            $this->vista('administrador/reintegro');
             }   

         }
    }


 

}



?>
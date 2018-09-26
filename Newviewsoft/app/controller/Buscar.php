<?php


    class Buscar extends Controlador
    {


        public function __construct(){

            $this->buscarModelo = $this->modelo("Busquedas");
            //se verifica si existe en la carpeta model un archivo Sessiones
        }


        public function index(){

            session_start();
            if(isset($_SESSION['Administrador'])){   
            $this->vista('/inicio/admtd');    
            }
            if(isset($_SESSION['ApoyoAdministrador'])){   
                $this->vista('/inicio/apymd');    
                }
                 if(isset($_SESSION['Invitado'])){   
                $this->vista('/inicio/apymd');    
                }

        }

        public function usuarios()
        {
            session_start();

            if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"]) and  !isset($_SESSION["Invitado"])){
    
                header('Location: ../inicio');  
    
            }else{
    
                $resul = $this->buscarModelo->devuelveUser();

                $datos=['datos' => $resul ];
                            
                $this->vista('busquedas/usuario',$datos);
            }
        }      
    

    public function aprendices()
    {
        session_start();

        if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"]) and  !isset($_SESSION["Invitado"])){

            header('Location: ../inicio');  

        }else{

            $resul = $this->buscarModelo->devuelveUser();

            $datos=['datos' => $resul ];
                        
            $this->vista('busquedas/Aprendiz',$datos);
        }
    }      



public function novedades($buscar)
{
    session_start();

    if(!isset($_SESSION['ApoyoAdministrador']) and  !isset($_SESSION["Administrador"]) and  !isset($_SESSION["Invitado"])){

        header('Location: ../inicio');  

    }else{
        

        $resul = $this->buscarModelo->devuelveNovedades();

        $datos=['datos' => $resul,
                'xd' => $buscar
                ];

                    
        $this->vista('busquedas/novedades', $datos);
    }
}      
}





?>
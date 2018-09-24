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
    
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    $datos = [
                        
                        'usuarios' => $_POST ['usuarios']                       
                    ];
                    
                    if($this->buscarModelo->user($datos))
                    {
                    
                        $resul = $this->buscarModelo->devuelveUser();

                        
                        $dato=[
                            'datos' => $resul ];
                            
                            $_SESSION["busqueda"]=true;

                           $this->vista('busquedas/usuario',$dato);
                            

                    }else{
                        $this->vista('busquedas/usuario');
                        $_SESSION["busqueda"]=false;

                    }
    
                }else{          
                    $this->vista('busquedas/usuario');
                    $_SESSION["busqueda"]=false;

                }
    
            }
           

        }      
        

    }





?>
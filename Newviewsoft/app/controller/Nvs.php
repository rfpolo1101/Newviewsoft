<?php
    class Nvs extends Controlador
    {   
        
        public function __construct()
        {

        }
        
        //index
        public function index()
        {
            $this->vista('sessiones/inicio');    
        }

        //Administrador
        public function admtd()
        {
            session_start();

            if(!isset($_SESSION["Administrador"])){

                header("Location:" .  RUTA_URL . "/inicio");    

            }else{

                $this->vista('administrador/menu');
            }

        }

        //Apoyo Administrador
        public function apymd()
        {
            session_start();
            
            if(!isset($_SESSION["Apoyo_admin"])){

                header("Location:" .  RUTA_URL . "/inicio");    

            }else{

                $this->vista('apoyoAdministrador/menu');

            }

        }

        //invitado
        public function ivtd()
        {
            session_start();
            if(!isset($_SESSION["Instructor"])){

                header('Location: ../inicio');  

            }else{

                $this->vista('invitado/menu');

            }   
        }
        //cerrar session
        public function cerrar()
        {
            session_start();

            session_destroy();

            header("Location:" .  RUTA_URL . "/inicio");    

        }

        
    }


?>
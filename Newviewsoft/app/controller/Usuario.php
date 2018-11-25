<?php
    class Usuario extends Controlador
    {

        public function __construct()
        {
            $this->usuarioModelo = $this->modelo("User");

        }

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
        

        public function asignar()
        {
            session_start();

            if(!isset($_SESSION['Administrador']))
            {
                $this->vista('Location: ..inicio');
            }else{

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $datos = [
                    'ndocumento' => $_POST['documento'],
                    'cargo' => $_POST['cargo']
                        ];

             if($this->usuarioModelo->asignar($datos)){

                $_SERVER["asignar"]=true;
                $this->vista('administrador/asignarRol');
            }else{

                $_SEVER["asignar"]=false;
                $this->vista('administrador/asignarRol');

            }
            }else{ 

                $this->vista('administrador/asignarRol');

            }
        
        
         }


        
        }

        public function perfil()
        {
            session_start();
            
                 if(!isset($_SESSION['Administrador']) && !isset($_SESSION['Apoyo Administrador']) && !isset($_SESSION['Invitado']))
            {
                $this->vista('Location: ..inicio');
            }else{

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $datos = [
                    'ndocumento' => $_POST['documento'],
                    'cargo' => $_POST['cargo']
                        ];

             if($this->usuarioModelo->asignar($datos)){

                $_SERVER["asignar"]=true;
                $this->vista('administrador/asignarRol');
            }else{

                $_SEVER["asignar"]=false;
                $this->vista('administrador/asignarRol');

            }
            }else{ 

                $this->vista('administrador/asignarRol');

            }
            
            
        }

    }

}

?>
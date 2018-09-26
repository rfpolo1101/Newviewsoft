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
                    "tipo_documento" => $_POST["tipo_documento"],
                    'documento' => $_POST['documento'],
                    'cargo' => $_POST['cargo']
                ];

                $this->usuarioModelo->documento($datos);
             if($this->usuarioModelo->asignar($datos)){

                $_SERVER["asignar"]=true;
                $this->vista('administrador/asignar-rol');
            }else{

                $_SEVER["asignar"]=false;
                $this->vista('administrador/asignar-rol');

            }
            }else{ 

                $this->vista('administrador/asignar-rol');
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

                        "correo" => $_POST["correo"],
                        "primer_nombre" => $_POST["primer_nombre"],
                        "segundo_nombre" => $_POST["segundo_nombre"],
                        "primer_apellido" => $_POST["primer_apellido"],
                        "segundo_apellido" => $_POST["segundo_apellido"],
                        "contrasena" => $_POST["contrasena"]


                    ];
                    
                    
                if($this->usuarioModelo->actualizarPefil($datos)){

                    $resul = $this->usuarioModelo->perfiles();

                    $dato = [

                        "datos" => $resul
                    ];
                    $_SERVER["asignar"]=true;
                    $this->vista('general/perfil',$dato);
                }else{

                    $resul = $this->usuarioModelo->perfiles();

                    $dato = [

                        "datos" => $resul
                    ];
                    $_SERVER["asignar"]=false;
                    $this->vista('general/perfil',$dato);
                }
                }else{ 
                    $resul = $this->usuarioModelo->perfiles();

                    $dato = [

                        "datos" => $resul
                    ];
                    $_SERVER["asignar"]=true;
                    $this->vista('general/perfil',$dato);

                }   
            }
        }



        public function actualizarNovedad()
        {
            


        }

}

?>
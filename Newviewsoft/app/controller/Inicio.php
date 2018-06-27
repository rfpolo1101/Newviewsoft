<?php
    class Inicio extends Controlador
    {

        public function __construct()
        {   
            //se verifica si existe en la carpeta model un archivo Sessiones
            $this->usuarioModelo = $this->modelo('Sessiones');
        }
        //index
        public function index(){
        
            $this->vista('sessiones/inicio');    
        }


        //login
        public function login()
        {
            session_start();

            /*1*/ if($_SERVER['REQUEST_METHOD'] == 'POST')
            {   
                $datos = [
                    'tdocumento' => trim($_POST['tdocumento']),
                /*2*/    'ndocumento' => trim($_POST['docuUsu']),
                    'cargo' => trim($_POST['cargo']),
                    'password' => trim($_POST['password'])

                ];  
                
                //si este metodo existe en el modelo entoces...
             /*3*/  if ($this->usuarioModelo->ingreso($datos))
                {         

                    //si la session es de  admin
                  /*4*/ if($_SESSION['cargo']=='administrador')
                    { 
                    /*5*/    $_SESSION['Administrador'];
                        header ("Location:" . RUTA_URL  . "/nvs/admtd/");
                    } 

                    //si la session es de apoyo admin
                    /*6*/if($_SESSION['cargo']=="apoyo administrador")
                    {
                       /*7*/ $_SESSION['ApoyoAdministrador'];
                        header ("Location:" . RUTA_URL . "/nvs/apymd/");
                    }

                    /*8*/if($_SESSION['cargo']=="invitado"){

                       /*9*/ $_SESSION['invitado'];
                        header ("Location:" . RUTA_URL . "/nvs/ivtd/"); 
                    }

                /*10*/}else{
                    $_SERVER["inicio"]=false;
                /*11*/    $this->vista('sessiones/login');
                }

            /*12*/}else{

               /*13*/ $this->vista('sessiones/login');

            }

        }

        //registro
        public function registro()
        {

            //verifica si los envíos de formulario se realizaron correctamente
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $this->usuarioModelo->generarCodigo(rand(1,9));
                $this->usuarioModelo->correo();
                $datos = [
                    'tdocumento' => trim($_POST['tip_doc']),
                    'ndocumento' => trim($_POST['docuUsu']),
                    'correo' => trim($_POST['correo']),
                    'pnombre' => trim($_POST['prinom']),
                    'papellido' => trim($_POST['priapel'])
                ];

                //si este metodo existe en el modelo entoces...
                if($this->usuarioModelo->registrarUsuario($datos)){
                    $_SERVER['inicio']=true;
                    $this->vista('sessiones/registro');

                }else{
                    $_SERVER['inicio']=false;
                    $this->vista('sessiones/registro');

                }

            }else{

                $datos = [

                    'tdocumento' => '',
                    'ndocumento' => '',
                    'correo' => '',
                    'pnombre' => '',
                    'papellido' => ''

                ];
                $this->vista('sessiones/registro');   
            }
        }
        
        
        //olvido contraseña
        public function olvidoCodigo()
        {
            //verifica si los envíos de formulario se realizaron correctamente
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                 $this->usuarioModelo->generarCodigo(rand(1,9));
                 $this->usuarioModelo->correo();

                $datos= [

                    'tdocumento' => trim($_POST['tdocumento']),
                    'ndocumento' => trim($_POST['docuUsu']),
                    'correo' => trim($_POST['correo'])
                ];

                 //si este metodo existe en el modelo entoces...
                if($this->usuarioModelo->recuperarCodigo($datos)){
                    $_SERVER['inicio']=true;
                    $this->vista('sessiones/olvidoCodigo');
                }else{
                     $_SERVER['inicio']=false;
                     $this->vista('sessiones/olvidoCodigo');
                }

            }else{

                $datos = [

                    'tdocumento' => '',
                    'ndocumento' => '',
                    'correo' =>  ''
                ];
                $this->vista('sessiones/olvidoCodigo');

            }

        }


      
    }





?>
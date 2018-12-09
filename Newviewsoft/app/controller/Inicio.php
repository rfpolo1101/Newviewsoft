<?php

class Inicio extends Controlador
{

    //Metodo constructor para llamar las clases de los metodos
    public function __construct()
    {
        //se verifica si existe en la carpeta model un archivo Sessiones
        $this->usuarioModelo = $this->modelo('Sessiones');
    }
    //index
    public function index()
    {

        $this->vista('sessiones/inicio');
    }

    /* Metodo que permite el ingreso de usuarios tomando como referencia el rol
    por medio de sessione las cuales permiten dirigir a cada usuario al menu correspondiente*/
    public function login()
    {
        session_start();

        /*1*/if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $datos = [

                'tipo_documento' => trim($_POST['tipo_documento']),
                /*2*/'documento' => trim($_POST['documento']),
                'password' => trim($_POST['password']),
            ];

            $this->usuarioModelo->documentos($datos);

            //si este metodo existe en el modelo entoces...
            /*3*/if ($this->usuarioModelo->ingreso($datos)) {

                if ($_SESSION['Super_admin'] == 5) {

                    $_SESSION['Super_admin'];
                    header("Location:" . RUTA_URL . "/nvs/sdmtd/");
                }

                //si la session es de  admin
                /*4*/if ($_SESSION['Administrador'] == 4) {

                    /*5*/$_SESSION['Administrador'];
                    header("Location:" . RUTA_URL . "/nvs/admtd/");

                }

                //si la session es de apoyo admin
                /*6*/if ($_SESSION['Apoyo_admin'] == 3) {

                    /*7*/$_SESSION['Apoyo_admin'];
                    header("Location:" . RUTA_URL . "/nvs/apymd/");
                }

                /*8*/if ($_SESSION['Instructor'] == 2) {

                    /*9*/$_SESSION['Instructor'];
                    header("Location:" . RUTA_URL . "/nvs/ivtd/");
                }

                /*10*/} else {
                $_SERVER["inicio"] = false;
                $this->vista('sessiones/login');

            }
            /*12*/} else {

            $_SERVER["inicio"] = false;
            /*13*/$this->vista('sessiones/login');
        }

    }

    /* Metodo registro el cual permite el registro de usuarios para deben llegar los datos
    correspondientes y el controlador enviara los datos al metodo*/
    public function registro()
    {

        //verifica si los envíos de formulario se realizaron correctamente
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $cod = false;
            $azar = [
                0 => "1234567890",
                1 => "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz",
                2 => "!$%&/()@=?¿*^_:;*.",

            ];

            for ($i = 1; $i < 5; $i++) {

                $cod .= $azar[0]{rand(0, 8)};
                $cod .= $azar[1]{rand(0, 50)};
                $cod .= $azar[2]{rand(0, 17)};
            }

            $this->usuarioModelo->setpassword($cod);
            $this->usuarioModelo->correo();

            $datos = [

                'tipo_documento' => trim($_POST['tipo_documento']),
                'documento' => strip_tags(trim($_POST['documento'])),
                'correo' => strip_tags(trim($_POST['correo'])),
                'primer_nombre' => strip_tags(trim($_POST['primer_nombre'])),
                'segundo_nombre' => strip_tags(trim($_POST['segundo_nombre'])),
                'primer_apellido' => strip_tags(trim($_POST['primer_apellido'])),
                'segundo_apellido' => strip_tags(trim($_POST['segundo_apellido'])),
            ];

            $this->usuarioModelo->documentos($datos);

            //si este metodo existe en el modelo entoces...
            if ($this->usuarioModelo->registro($datos)) {

                $_SERVER['inicio'] = true;
                $this->vista('sessiones/registro');

            } else {

                $_SERVER['inicio'] = false;
                $this->vista('sessiones/registro');

            }

            //si no viene de un metodo post
        } else {

            $this->vista('sessiones/registro');
        }
    }

    /* Metodo Olvido codigo el cual permite recuperar contraseñas creando desde el controlador
    una fraccion de la contraseña y enviadosela al metodo con los datos que el usuario
    ingreso */
    public function olvidoCodigo()
    {
        //verifica si los envíos de formulario se realizaron correctamente
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $cod = false;
            $azar = [

                0 => "1234567890",
                1 => "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz",
                2 => "!$%&/()@=?¿*^_:;*.",
            ];

            for ($i = 1; $i < 5; $i++) {

                $cod .= $azar[0]{rand(0, 8)};
                $cod .= $azar[1]{rand(0, 50)};
                $cod .= $azar[2]{rand(0, 17)};
            }

            $this->usuarioModelo->setpassword($cod);
            $this->usuarioModelo->correo();

            $datos = [

                'tipo_documento' => trim($_POST['tipo_documen']),
                'documento' => trim($_POST['documento']),
                'correo' => trim($_POST['correo']),
            ];

            $this->usuarioModelo->documentos($datos);
            //si este metodo existe en el modelo entoces...
            if ($this->usuarioModelo->recuperarCodigo($datos)) {
                $_SERVER['inicio'] = true;
                $this->vista('sessiones/login');

            } else {
                $_SERVER['inicio'] = false;
                $this->vista('sessiones/login');

            }

        } else {

            $this->vista('sessiones/login');

        }

    }


    public function solitudPermiso(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $datos = [

                'documento' => trim($_POST['documento']),
                'correo' => trim($_POST['correo']),
                'motivo' => trim($_POST['mensaje']),
            ];


            if ($this->usuarioModelo->SolitaPermiso($datos)) {
                $_SERVER['inicio'] = true;
                $this->vista('sessiones/registro');

            }else{
                $_SERVER['inicio'] = true;
                $this->vista("sessiones/registro");

            }

        }else{

            $this->vista("sessiones/registro");
        }

    }

} 

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

    public function formacion()
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");    
        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $datos = [

                    'formacion' => $_POST ['formacion']

                ];

                if ($this->crearModelos->formacion($datos)){

                    $_SERVER['formacion']=true;
                    $this->vista('administrador/formacion');

                }else{
                    $_SERVER['formacion']=false;
                    $this->vista('administrador/formacion');
                }

            }else{
                $this->vista('administrador/formacion');
            }


        }
    }

    public function trimestre()
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");    
        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $datos = [

                    'trimestre' => $_POST ['trimestre']

                ];

                if ($this->crearModelos->trimestre($datos)){

                    $_SERVER['trimestre']=true;
                    $this->vista('administrador/trimestre');

                }else{
                    $_SERVER['trimestre']=false;
                    $this->vista('administrador/trimestre');
                }

            }else{
                $this->vista('administrador/trimestre');
            }


        }

    }

    public function jornada()
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");    
        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $datos = [

                    'jornada' => $_POST ['jornada']

                ];

                if ($this->crearModelos->jornada($datos)){

                    $_SERVER['jornada']=true;
                    $this->vista('administrador/jornada');

                }else{
                    $_SERVER['jornada']=false;
                    $this->vista('administrador/jornada');
                }

            }else{
                $this->vista('administrador/jornada');
            }


        }

    }

    public function ficha()
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");    
        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $datos = [

                    'ficha' => $_POST ['ficha']

                ];

                if ($this->crearModelos->ficha($datos)){

                    $_SERVER['ficha']=true;
                    $this->vista('administrador/ficha');

                }else{
                    $_SERVER['ficha']=false;
                    $this->vista('administrador/ficha');
                }

            }else{
                $this->vista('administrador/ficha');
            }


        }

    }

    public function sede()
    {
        session_start();
        
        if(!isset($_SESSION['Administrador']))
        {
            header("Location:" .  RUTA_URL . "/inicio");    
        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $datos = [

                    'sede' => $_POST ['sede']

                ];

                if ($this->crearModelos->sede($datos)){

                    $_SERVER['sede']=true;
                    $this->vista('administrador/sede');

                }else{
                    $_SERVER['sede']=false;
                    $this->vista('administrador/sede');
                }

            }else{
                $this->vista('administrador/sede');
            }


        }

    }

 

}




?>
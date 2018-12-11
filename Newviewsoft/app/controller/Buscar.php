<?php
class Buscar extends Controlador
{
    //Metodo constructor el cual llama el metodo que se va a usar
    public function __construct()
    {

        $this->buscarModelo = $this->modelo("Busquedas");
        //se verifica si existe en la carpeta model un archivo Sessiones
    }
    //Se verifica si existe alguna de las sessiones y se les lleva al menu correspondiente
    public function index()
    {

        session_start();

        if (isset($_SESSION['Super_admin'])) {
            $this->vista('/inicio/sdmtd');
        }
        if (isset($_SESSION['Administrador'])) {
            $this->vista('/inicio/admtd');
        }
        if (isset($_SESSION['Apoyo_admin'])) {
            $this->vista('/inicio/apymd');
        }
        if (isset($_SESSION['Invitado'])) {
            $this->vista('/inicio/apymd');
        }

    }

    //Metodo para consultar usuarios
    public function usuarios()
    {
        session_start();

        //Si no existe ninguna de estas sessiones se devuelve a la vista error.
        if (!isset($_SESSION["Administrador"]) and !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si existe alguna session
        } else {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $datos = [ 
                    "documento" => $_POST["documento"],
                    "estado"    => $_POST["id_estado"],
                ];
                $this->buscarModelo->actualizarUsuario($datos);

            }

            //Se llama al metodo que busca los usuarios
            $resul = $this->buscarModelo->devuelveUser();
            //Se guarda lo que devuelve en el array "datos"
            $datos = ['datos' => $resul];
            //Se retorna a la vista
            $this->vista('busquedas/usuario', $datos);
        }
    }

    //Metodo para consultar aprendices
    public function aprendices()
    {
        session_start();

        //Se verifica si alguna de esas sessiones existe
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Instructor"]) and !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si alguna existe entra en el else
        } else {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $datos = [ 
                    "documento"        => $_POST["documento"],
                    "primer_nombre"    => $_POST["primer_nombre"],
                    "segundo_nombre"   => $_POST["segundo_nombre"],
                    "primer_apellido"  => $_POST["primer_apellido"],
                    "segundo_apellido" => $_POST["segundo_apellido"],                  
                    "segundo_apellido" => $_POST["segundo_apellido"],
                    "email"            => $_POST["email"],
                    "ficha"            => $_POST["ficha"],
                ];
                $this->buscarModelo->actualizarAprendiz($datos);

            }

            //Se llama al metodo devuelveUser para colsultar aprendices
            $resul = $this->buscarModelo->devuelveUser();
            $resul2 = $this->buscarModelo->consultaFicha();
            
            //Se guarda lo que devuelve en el array "datos"
            $datos = [
                'datos' => $resul,
                'dato' => $resul2,
        
            ];
            //Se retorna a la vista 
            $this->vista('busquedas/aprendiz', $datos);
        }
    }

    //Metodo para colsuntar novedades
    public function novedades($buscar)
    {
        session_start();
        //Si verifica si existe alguna de estas sesssiones
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Instructor"]) and !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si existe alguna entra al else   
        } else {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if(is_uploaded_file($_FILES['acta']['tmp_name'])) { 
                    
                    $nameArchivo = trim($_FILES['acta']['name']);
                    $tamañoArchivo = trim($_FILES['acta']['size']);
                    $extencion = pathinfo($nameArchivo, PATHINFO_EXTENSION);
                    $nombre_fichero =  RUTA_APP . "/archivos/$nameArchivo";

                   
                    if (file_exists($nombre_fichero)) {
                        unlink($nombre_fichero);
                        $nameArchivo = trim($_FILES['acta']['name']);
                        $tamañoArchivo = trim($_FILES['acta']['size']);
                    }else{

                        $nameArchivo = $_POST["documento"] . $nameArchivo;
                    }

                    
                    
                    if($extencion != "docx" && $extencion != "pdf" && $extencion != "doc" && $extencion != "PDF"){

                        $a = $_POST["documento"];

                        $actas= $this->buscarModelo->devuelveNovedad($a);
     
                         $tamañoArchivo = $actas["tamano_acta"];
                         $nameArchivo   = $actas["acta"];
                    }
                }else{

                    $a = $_POST["documento"];

                   $actas= $this->buscarModelo->devuelveNovedad($a);

                    $tamañoArchivo = $actas["tamano_acta"];
                    $nameArchivo   = $actas["acta"];
                }

                $datos = [
                    
                    "documento"        => $_POST["documento"],
                    "primer_nombre"    => $_POST["primer_nombre"],
                    "segundo_nombre"   => $_POST["segundo_nombre"],
                    "primer_apellido"  => $_POST["primer_apellido"],
                    "segundo_apellido" => $_POST["segundo_apellido"],                  
                    "segundo_apellido" => $_POST["segundo_apellido"],
                    "email" => $_POST["email"],
                    "motivo" => $_POST["motivo"],
                    "respuesta" => $_POST["respuesta"],
                    "fecha_inicio" => $_POST["fecha_inicio"],
                    "fecha_fin" => $_POST["fecha_fin"],
                    "archivo" => str_replace(" ", "", $nameArchivo),
                    "tamaño" => $tamañoArchivo,
                    "tipo_respuesta" => $_POST["tipo_respuesta"],

                ]; 

                if($this->buscarModelo->actualizarNovedad($datos)){

                    $ruta        = RUTA_APP . "/archivos/";
                    $acta           = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                    $nombrefinal = str_replace(" ", "", $acta); //Sustituye una expresión regular
                    $nombre_fichero =  RUTA_APP . "/archivos/$nombrefinal";
                   
                    if (file_exists($nombre_fichero)) {
                        $nombrefinal = str_replace(" ", "", $nameArchivo);
                    }else{

                        $nombrefinal = str_replace(" ", "", $nameArchivo);
                    }


                    $extencion = pathinfo($nombrefinal, PATHINFO_EXTENSION);
                    if($extencion != "docx" && $extencion != "pdf" && $extencion != "doc" && $extencion != "PDF"){
                    }else{

                        $archivos   = $ruta . $nombrefinal;
                        move_uploaded_file($_FILES['acta']['tmp_name'], $archivos); 
                    }
                    
                }else{
                    echo "xd";
                }

            }

            //Se llama al metodo devuelveNovedades 
            $resul = $this->buscarModelo->devuelveNovedades();
            //Se guarda lo todo el el array "datos"
            $datos = [
                'datos' => $resul,
                'xd'    => $buscar,
            ];
            
            if(isset($_GET['file'])){
                $fileName = basename($_GET['file']);
                $filePath = RUTA_APP . "/archivos/$fileName";
                if(!empty($fileName) && file_exists($filePath)){
                    // Define headers
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($filePath));
                    readfile($filePath);
                }
            }
            $this->vista("busquedas/novedades", $datos);
        }
    }

    public function fichas(){

        session_start();

        //Se verifica si alguna de esas sessiones existe
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Instructor"]) and !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si alguna existe entra en el else
        } else {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $datos = [ 
                    "ficha"        => $_POST["ficha"],
                    "sede"    => $_POST["sede"],
                    "jornada"   => $_POST["jornada"],
                    "modalidad"  => $_POST["modalidad"],
                    "programa_formacion" => $_POST["programa_formacion"],                  
                    "trimestre" => $_POST["trimestre"],
                    "id_estado"            => $_POST["id_estado"],
                ];

                $this->buscarModelo->actualizarFicha($datos);

            }
            
            //Se llama al metodo devuelveUser para colsultar aprendices
            $resul = $this->buscarModelo->consultaFicha();
            $resul1 = $this->buscarModelo->consultaGeneral();
            //Se guarda lo que devuelve en el array "datos"
            $resul2= $resul1;
            
            $datos = [
                'datos'   => $resul,
                'sede'    => $resul2["sede"],
                'jornada' => $resul2["jornada"],
                'modalidad'    => $resul2["modalidad"],
                'programa_formacion'    => $resul2["programa_formacion"],
                'trimestre'    => $resul2["trimestre"],

            ];
            //Se retorna a la vista 
            $this->vista('busquedas/fichas', $datos);
        }
    }

    public function historial()
    {
        session_start();

        //Si no existe ninguna de estas sessiones se devuelve a la vista error.
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and  !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si existe alguna session
        } else {


            //Se llama al metodo que busca los usuarios
            $resul = $this->buscarModelo->devuelveHistorial();
            //Se guarda lo que devuelve en el array "datos"
            $datos = ['datos' => $resul];
            //Se retorna a la vista
            $this->vista('busquedas/historialAprendiz', $datos);
        }
    }


    public function programas()
    {
        session_start();

        //Si no existe ninguna de estas sessiones se devuelve a la vista error.
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and  !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si existe alguna session
        } else {

            //Se llama al metodo que busca los usuarios
            $resul = $this->buscarModelo->devuelveProgramas();
            //Se guarda lo que devuelve en el array "datos"
            $datos = ['datos' => $resul];
            //Se retorna a la vista
            $this->vista('busquedas/programasFormacion', $datos);
        }
    }

    
}


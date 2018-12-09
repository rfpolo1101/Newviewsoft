<?php
//clase Aprendices que hereda de la clase controlador
class Aprendices extends Controlador
{

    //Metodo constructor  de la clase aprendiz
    public function __construct()
    {
        //Se verifica si existe en la carpeta model un archivo Sessiones
        $this->crearModelo = $this->modelo("Aprendiz");
    }

    //Metodo index el cual verifica que si llaman a esta clase exista las sessiones administrador o apoyo administrador
    public function index()
    {
        session_start();
        if (isset($_SESSION['Administrador'])) {
            $this->vista('/inicio/admtd');
        }
        if (isset($_SESSION['Apoyo_admin'])) {
            $this->vista('/inicio/apymd');
        }
    }

    //Metodo crear el cual permite crear aprendices
    public function crear()
    {
        session_start();

        //Si no existe ninguna de estas sessiones lo devolvera al inicio
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Super_admin"])) {

            header('Location:' . RUTA_URL . '/inicio');

        } else { //Si existe una de las sessiones anteriores entra en el else

            //Si viene de un metodo post entra en el if
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Se guarda en el array "datos" los datos que vengan de metodo post
                $datos = [

                    'tipo_documento' => $_POST['tipo_documento'],
                    'documento' => $_POST['documento'],
                    'correo' => $_POST['correo'],
                    'primer_nombre' => $_POST['primer_nombre'],
                    'segundo_nombre' => $_POST['segundo_nombre'],
                    'primer_apellido' => $_POST['primer_apellido'],
                    'segundo_apellido' => $_POST['segundo_apellido'],
                    'ficha' => $_POST['ficha'],
                ];
                $ficha=$this->crearModelo->consultarFichas($datos);

                $datos2 = [
                    "ficha" => $ficha["codigo_ficha"],
                    "fk_sede" => $ficha["fk_sede"],
                    "fk_jornada" => $ficha["fk_jornada"],
                    "fk_modalidad" => $ficha["fk_modalidad"],
                    "fk_trimestre" => $ficha["fk_trimestre"],
                    "documento"    => $_POST["documento"],

                ];


                //Se llama a los metodos y se envian por parametros el array "datos"
                $this->crearModelo->documento($datos);
                $this->crearModelo->registroHistorial($datos2);
                if ($this->crearModelo->crear($datos)) {

                    //Session para alerta que todo salio correcto
                    $_SERVER['crear'] = true;

                    //Se colsultan las fichas existentes
                    $ddatos = $this->crearModelo->consultaFicha();

                    //Se guarda lo que devuelve la llamada del metodo en la variable "datos"
                    $datos = ["datos2" => $ddatos];
                    $this->vista("administrador/crearAprendiz",$datos);

                    //Se llama la vista y se le pasa la variable datos
                
                //Si el metodo retorna un false
                } else {

                    //Se consultan las fichas existentes
                    $ddatos = $this->crearModelo->consultaFicha();
                    //Se guardan lo que devuelve la colsulta en la variable "datos" 
                    $datos = ["datos2" => $ddatos];
                    //Se crea para sacar alerta de incorrecto
                    $_SERVER['crear'] = false;  
                    //Se retorna a la vista con lo que tenga la variable "datos"
                    $this->vista("administrador/crearAprendiz",$datos);

                }
            //Este else es para cuendo no viene de un metod post
            } else {

                 //Se consultan las fichas existentes
                 $ddatos = $this->crearModelo->consultaFicha();
                 //Se guardan lo que devuelve la colsulta en la variable "datos" 
                 $datos = ["datos2" => $ddatos];
                 //Se crea para sacar alerta de incorrecto
                 $_SERVER['crear'] = false;  
                 //Se retorna a la vista con lo que tenga la variable "datos"
                $this->vista("administrador/crearAprendiz",$datos);
            }

        }

    }

    //Metodo crear el cual permite crear anovedades para los aprendices
    public function novedades($tipos = 'xd')
    {
        session_start();

        //Se verifica si lo que viene de la variable "tipos" es diferente a esos condicionales
        if ($tipos != 'cambio-jornada' && $tipos != 'retiro-voluntario' && $tipos != 'aplazamiento' && $tipos != 'desercion' && $tipos != 'traslado' && $tipos != 'reintegro') {

            $tipos = 'xd';
        }

        //Se verifica si existe alguna session de los roles permitidos
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Super_admin"])) {

            //Si no existe ninguna se devuelve a la ventana error
            header('Location:' . RUTA_URL . '/inicio');
           
        //Si existe alguno entra en el else   
        } else {    

            //Se verifica si la llamada al metodo trae metodo post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                    //Se determina por medio de la varible tipos que novedad es.
                    if ($tipos == "cambio-jornada") {
                        $novedad = "2";
                    }
                    if ($tipos == "retiro-voluntario") {
                        $novedad = "3";
                    }
                    if ($tipos == "aplazamiento") {
                        $novedad = "4";
                    }
                    if ($tipos == "traslado") {
                        $novedad = "6";
                    }
                    if ($tipos == "reintegro") {
                        $novedad = "7";
                    }

                    if(is_uploaded_file($_FILES['acta']['tmp_name'])) { 
                    
                        $nameArchivo = trim($_FILES['acta']['name']);
                        $tamañoArchivo = trim($_FILES['acta']['size']);
                        $extencion = pathinfo($nameArchivo, PATHINFO_EXTENSION);
                        $nombre_fichero =  RUTA_APP . "/archivos/$nameArchivo";
    
                       
                        if (file_exists($nombre_fichero)) {
                            $nameArchivo = "NoExiste";
                            $tamañoArchivo = "00";
                        }else{
    
                            $nameArchivo = $_POST["documento"] . $nameArchivo;
                        }
    
                        
                        
                        if($extencion != "docx" && $extencion != "pdf" && $extencion != "doc" && $extencion != "PDF"){
        
                            $nameArchivo = "NoExiste";
                            $tamañoArchivo = "00";
                        }

                    }else{

                        $nameArchivo = "NoExiste";
                        $tamañoArchivo = "00";
                    }

                     //Los datos que vienen por metodo post se guardan en el array "datos"
                    
                    if(!isset($_POST["tiempo_estimado"])){
                        $tiempoEstimado = "Null";
                    }else{
                        
                        $tiempoEstimado = $_POST["tiempo_estimado"];
                    }

                     $datos = [

                        "fecha_inicio" => $_POST["fecha_inicial"],
                        "fecha_fin" => $_POST["fecha_final"],
                        "tipo_documento" => $_POST["tipo_documento"],
                        "documento" => $_POST["documento"],
                        "motivo" => $_POST["motivo"],
                        "respuesta" => $_POST["respuesta"],
                        "novedad" => $novedad,
                        "archivo" => str_replace(" ", "", $nameArchivo),
                        "tamaño" => $tamañoArchivo,
                        "tipo_respuesta" => $_POST["aprobado"],
                        "tiempo" => $tiempoEstimado,
                    ];
                    
                    //Se llama al metodo documento de los modelos y a tipoNovedades
                    $this->crearModelo->documento($datos);
                    if ($this->crearModelo->tipoNovedades($datos)) {

                        $ruta        = RUTA_APP . "/archivos/";
                        $acta           = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $nombrefinal = str_replace(" ", "", $acta); //Sustituye una expresión regular
                        $nombre_fichero =  RUTA_APP . "/archivos/$nombrefinal";
                        echo $nombrefinal;
    
                       
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
                        //Se devuelve una alerta de exito y se llama a la vista correspondiente
                        $_SERVER["crear"] = true;
                        $this->vista("administrador/" . $tipos);
                //Si devuelve false 
                } else {
                    //Se devuelve una alerta de error Y se llama a la vista correspondiente
                    $_SERVER["crear"] = false;
                    $this->vista("administrador/" . $tipos);
                }
           
                  
            } else {

                $this->vista("administrador/" . $tipos);
            }
        }
    }

    //Metodo para las deserciones
    public function novedad($tipos = 'xd')
    {
        session_start();

        //Se verifica si lo que viene de la variable "tipos" es diferente a esos condicionales
        if ($tipos != 'cambio-jornada' && $tipos != 'retiro-voluntario' && $tipos != 'aplazamiento' && $tipos != 'desercion' && $tipos != 'traslado' && $tipos != 'reintegro') {

            $tipos = 'xd';
        }

        //Se verifica si existe alguna session de los roles permitidos
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Super_admin"])) {

            //Si no existe ninguna se devuelve a la ventana error
            header('Location:' . RUTA_URL . '/inicio');
           
        //Si existe alguno entra en el else   
        } else {    

            //Se verifica si la llamada al metodo trae metodo post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if(is_uploaded_file($_FILES['acta']['tmp_name'])) { 
                    
                    $nameArchivo = trim($_FILES['acta']['name']);
                    $tamañoArchivo = trim($_FILES['acta']['size']);
                    $extencion = pathinfo($nameArchivo, PATHINFO_EXTENSION);
                    $nombre_fichero =  RUTA_APP . "/archivos/$nameArchivo";

                   
                    if (file_exists($nombre_fichero)) {
                        $nameArchivo = "NoExiste";
                        $tamañoArchivo = "00";
                    }else{

                        $nameArchivo = $_POST["documento"] . $nameArchivo;
                    }

                    
                    
                    if($extencion != "docx" && $extencion != "pdf" && $extencion != "doc" && $extencion != "PDF"){
    
                        $nameArchivo = "NoExiste";
                        $tamañoArchivo = "00";
                    }

                }else{

                    $nameArchivo = "NoExiste";
                    $tamañoArchivo = "00";
                }
                     //Los datos que vienen por metodo post se guardan en el array "datos"
                    
                     $novedad=5;

                     $datos = [

                        "fecha_inicio" => $_POST["fecha_inicial"],
                        "fecha_fin" => $_POST["fecha_final"],
                        "fallas" => $_POST["fallas"],
                        "tipo_documento" => $_POST["tipo_documento"],
                        "documento" => $_POST["documento"],
                        "motivo" => $_POST["motivo"],
                        "respuesta" => $_POST["respuesta"],
                        "documento_instructor" => $_POST["documento_instructor"],                        
                        "novedad" => $novedad,
                        "archivo" => str_replace(" ", "", $nameArchivo),
                        "tamaño" => $tamañoArchivo,
                        "tipo_respuesta" => $_POST["aprobado"],
                    ];
                    
                    //Se llama al metodo documento de los modelos y a tipoNovedades
                    $this->crearModelo->documento($datos);
                    if ($this->crearModelo->tipoNovedad($datos)) {

                        $ruta        = RUTA_APP . "/archivos/";
                        $acta           = trim($_FILES['acta']['name']); //Eliminamos los espacios en blanco
                        $nombrefinal = str_replace(" ", "", $acta); //Sustituye una expresión regular
                        $nombre_fichero =  RUTA_APP . "/archivos/$nombrefinal";
                        echo $nombrefinal;
    
                       
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
                        //Se devuelve una alerta de exito y se llama a la vista correspondiente
                        $_SERVER["crear"] = true;
                        $this->vista("administrador/" . $tipos);

                //Si devuelve false 
                } else {
                    //Se devuelve una alerta de error Y se llama a la vista correspondiente
                    $_SERVER["crear"] = false;
                    $this->vista("administrador/" . $tipos);


                }
            //Si no viene de metodo post de llama la vista correspondiente
                
                  
            } else {

                $this->vista("administrador/" . $tipos);
            }
        }
    }


}

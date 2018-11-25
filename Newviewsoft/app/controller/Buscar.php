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
        if (!isset($_SESSION["Apoyo_admin"]) and !isset($_SESSION["Administrador"]) and !isset($_SESSION["Instructor"]) and !isset($_SESSION["Super_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");
        
        //Si existe alguna session
        } else {

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

            //Se llama al metodo devuelveUser para colsultar aprendices
            $resul = $this->buscarModelo->devuelveUser();
            //Se guarda lo que devuelve en el array "datos"
            $datos = ['datos' => $resul];
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

            //Se llama al metodo devuelveNovedades 
            $resul = $this->buscarModelo->devuelveNovedades();

            //Se guarda lo todo el el array "datos"
            $datos = [
                'datos' => $resul,
                'xd'    => $buscar,
            ];
            //Se llama a la vista
            $this->vista('busquedas/novedades', $datos);
        }
    }
}

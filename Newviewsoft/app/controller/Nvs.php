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

    //Controlador que permite enviar al super administrador al menu
    public function sdmtd()
    {

        session_start();
        if (!isset($_SESSION["Super_admin"])) {

            herder("Location:" . RUTA_URL . "/inicio");
        } else {

            $this->vista('superAdministrador/menu');
        }
    }

    //Controlador que permite enviar al administrador al menu
    public function admtd()
    {
        session_start();

        if (!isset($_SESSION["Administrador"])) {

            header("Location:" . RUTA_URL . "/inicio");

        } else {

            $this->vista('administrador/menu');
        }

    }

    //Controlador que permite enviar al apoyo administrador al menu
    public function apymd()
    {
        session_start();

        if (!isset($_SESSION["Apoyo_admin"])) {

            header("Location:" . RUTA_URL . "/inicio");

        } else {

            $this->vista('apoyoAdministrador/menu');

        }

    }

    //Controlador que permite enviar al invitado al menu
    public function ivtd()
    {
        session_start();
        if (!isset($_SESSION["Instructor"])) {

            header('Location: ../inicio');

        } else {

            $this->vista('invitado/menu');

        }
    }
    //Metodo que destrulle las sessiones existentes y retorna al inicio
    public function cerrar()
    {
        session_start();

        session_destroy();

        header("Location:" . RUTA_URL . "/inicio");

    }

}

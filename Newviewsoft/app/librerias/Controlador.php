<?php

//Clase controlador principal
//aqui cargara los metodo y las vistas

class Controlador
{

    //Cargar modelo
    public function modelo($modelo)
    {
        //carga modelo

        require_once '../app/models/' . $modelo . '.php';

        //instanciar el modelo

        return new $modelo();

    }

    //metodo vista
    public function vista($vista, $datos = [])
    {
        //chequear si el archivo vista existe
        if (file_exists('../app/views/' . $vista . '.php')) {
            require_once '../app/views/' . $vista . '.php';
        } else {

            //si no existe
            die('');
        }
    }

}

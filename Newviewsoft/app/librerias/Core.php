<?php


/* Mapear la url ingresada en el navegador
    
    1- controller
    2- metodo
    3- Parametro 
    Ejemplo /articulo/actualizar/4
    */

    class Core 
    {
        protected $controladorActual = 'Inicio';

        protected $metodoActual = 'index';

        protected $parametros = [];

        //constructor
        public function __construct()
        {
            $url =$this->getUrl();

            // buscar si en controladores el archivo existe
            if (file_exists('../app/controller/' . ucwords($url[0]) . '.php'))
            {
                //si existe se configura como controlador por defecto
                $this->controladorActual = ucwords($url[0]);

                //unset indice
                unset($url[0]);
            }

            //requerir el controlador

            require_once '../app/controller/' . $this->controladorActual . '.php' ;
            $this->controladorActual= new $this->controladorActual;

            //comprovamos si se paso un metodo por la url
           if (isset($url[1]))
           {
                //ver la segunda parte de la url que seria el metodo
                if (method_exists($this->controladorActual, $url[1]))
                {
                //vemos el metodo
                 $this->metodoActual =  $url[1];

                //unset indice
                unset($url[1]);              
              }  
           }

           //para probar traer metodo
           //echo $this->metodoActual;


           //obtener los posibles parametros

           $this->parametros = $url ? array_values($url) : [];

           //llamar callback con parametros array

           call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);



        }

        public function getUrl()
        {
           // echo $_GET['url'];

           if (isset($_GET['url']))
           {
               $url = rtrim($_GET['url'], '/');//cortal los espacios de la url
               $url = filter_var($url, FILTER_SANITIZE_URL);
               $url =  explode ('/',$url);

               return $url;
            }
        

        }



    }

?>
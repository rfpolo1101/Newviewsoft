<?php
    
    //clase que conecta la base de datos
    class Base
    {
        private $host = DB_HOST;
        private $usuario = DB_USUARIO;
        private $password = '';
        private $nombre_base = 'newviewsoft';

        private $bdh; //data base
        private $stmt;
        private $error;
        protected $codigo;

        public function __construct()
        {
            //configurar la conexion
            $dsn = 'mysql:host='. $this->host . ';dbname=' . $this->nombre_base; 
         
            //Crear un instancia de PDO

            try{

                $this->bdh =new PDO($dsn, $this->usuario,$this->password);
                $this->bdh->exec("set names utf8");
            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }//FIN CONSTRUCTOR

        //PREPARA LA CONSULTA
        public function query($sql)
        {

            $this->stmt = $this->bdh->prepare($sql);

        }//FIN CONSULTA


        //VINCULAMOS EL BIND
        public function bind($parametro,$valor,$tipo = null )
        {

            if (is_null($tipo))
            {
                switch (true)
                {
                    case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                    break;
                    case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;
                    break;
                    case is_null($valor):
                        $tipo = PDO::PARAM_NULL;
                    break;
                    default:
                        $tipo = PDO::PARAM_STR;
                    break;
                 }
             }

             $this->stmt->bindParam($parametro, $valor, $tipo);
        }//FIN  BINDVALUE


        //EJECUTAMOS LA CONSULTA
        public function execute()
        {
          return  $this->stmt->execute();
        }//FIN EXECUTE
        
        
        //obtenemos registros con obj
        public  function objetos()
        {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        //obtenemos registro con obj
        public  function assoc()
        {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }
        
     

        //regitro 1 o 0
        public function rowCount()
        {
            return $this->stmt->rowCount();            
        }


    }




?>
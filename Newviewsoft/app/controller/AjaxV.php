<?php 
class AjaxV extends Controlador
{
    //Metodo constructor para llamar las clases de los metodos
    public function __construct()
    {
        $this->crearModelos = $this->modelo("AjaxModel");
    }

    public function index()
    {
    }

    public function validarTtimestres()
    {

        if (isset($_POST["programa_formacion"])) {

            $programa  = $_POST["programa_formacion"];
            $respuesta = $this->crearModelos->programaAjaxModel($programa);

            
            if ($respuesta->fk_tipo_de_formacion == 3) {
                echo '2';
            }

            if ($respuesta->fk_tipo_de_formacion == 3) {
                echo '4';
            }
        

            if ($respuesta->fk_tipo_de_formacion == 2 ) {
                echo '6';
            }

            if ($respuesta->fk_tipo_de_formacion == 2 ) {
                echo '8';
            }
          
        }

    }

    //Resultados de aprendizaje
    public function validarResultados(){

        if (isset($_POST["programa_formacion"])) {

            $programa  = $_POST["programa_formacion"];
            $respuesta = $this->crearModelos->ConsultaPrograma($programa);
            
            $datos = [
                "datos" => $respuesta,
            ];

            
            foreach($datos['datos'] as $datos1){

                echo "<option  selected value='$datos1->id_competencia'>" . $datos1->id_competencia . " - " . $datos1->competencia . "</option>";
            }
            echo "<option disabled selected value=''>Selecccione</option>";
        }
    }

}

?>
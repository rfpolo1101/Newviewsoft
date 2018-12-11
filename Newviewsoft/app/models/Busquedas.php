<?php
class Busquedas
{

    private $db;
    protected $resul;

    public function __construct()
    {
        $this->db = new Base();

    }

    //Metodos que colsulta los usuarios y aprendices
    public function devuelveUser()
    {
        $this->db->query("SELECT * FROM dato_persona as dato
        INNER JOIN tipo_documento as tipo ON dato.fk_tipo_documento= tipo.id_tipo_documento
        INNER JOIN rol ON dato.documento = rol.fk_documento
        INNER JOIN tipo_rol ON tipo_rol.id_tipo_rol = rol.fk_tipo_rol
        INNER JOIN ficha ON ficha.codigo_ficha = dato.fk_ficha 
        INNER JOIN estado as esta ON esta.id_estado = dato.fk_estado
        ");
        $this->db->execute();
        return $this->db->objetos();
    }

    //Metodo que colsulta todas las novedades
    public function devuelveNovedades()
    {

        $this->db->query("SELECT * FROM dato_persona as datos
                        INNER JOIN novedad  on novedad.fk_documento = datos.documento
                        INNER JOIN tipo_novedad ON novedad.fk_tipo_novedad = tipo_novedad.id_tipo_novedad  INNER JOIN tipo_respuesta ON novedad.fk_tipo_respuesta = tipo_respuesta.id_tipo_respuesta");
        $this->db->execute();
        return $this->db->objetos();
    }

    public function devuelveNovedad($datos)
    {
        $this->db->query("SELECT * FROM dato_persona as datos
                        INNER JOIN novedad  on novedad.fk_documento = datos.documento
                        INNER JOIN tipo_novedad ON novedad.fk_tipo_novedad = tipo_novedad.id_tipo_novedad  INNER JOIN tipo_respuesta
                         ON novedad.fk_tipo_respuesta = tipo_respuesta.id_tipo_respuesta WHERE documento = :doc and novedad.fk_documento = :doc");
        $this->db->bind(":doc",($datos));
        $this->db->execute();
        return $this->db->assoc();
    }


    public function actualizarNovedad($datos){


        $this->db->query("UPDATE dato_persona as dato INNER JOIN novedad as nov SET dato.primer_nombre = :pnom,  dato.segundo_nombre = :snom, dato.primer_apellido = :papellido, dato.segundo_apellido = :sapellido, dato.correo  = :email, nov.fecha_inicio = :fecha_ini, nov.fecha_fin = :fecha_fin, nov.motivo = :motivo,
            nov.respuesta = :respuesta, nov.tamano_acta = :tamano, nov.acta = :acta, nov.fk_tipo_respuesta = :tipo_respuesta WHERE dato.documento = :doc and nov.fk_documento = :doc");


        $this->db->bind(":pnom", strip_tags(ucwords(strtolower($datos["primer_nombre"]))));
        $this->db->bind(":snom", strip_tags(ucwords(strtolower($datos["segundo_nombre"]))));
        $this->db->bind(":papellido", strip_tags(ucwords(strtolower($datos["primer_apellido"]))));
        $this->db->bind(":sapellido", strip_tags(ucwords(strtolower($datos["segundo_apellido"]))));
        $this->db->bind(":email", strip_tags($datos["email"]));
        $this->db->bind(":fecha_ini", strip_tags($datos["fecha_inicio"]));
        $this->db->bind(":fecha_fin", strip_tags($datos["fecha_fin"]));
        $this->db->bind(":motivo", strip_tags(ucwords(strtolower($datos["motivo"]))));
        $this->db->bind(":tamano", strtolower($datos["tamaño"]));
        $this->db->bind(":acta", strip_tags($datos["archivo"]));
        $this->db->bind(":respuesta", strip_tags(ucwords(strtolower($datos["respuesta"]))));
        $this->db->bind(":tipo_respuesta", strtolower($datos["tipo_respuesta"]));
        $this->db->bind(":doc", $datos["documento"]);
        $resultado = $this->db->execute();
        if($resultado == true){

            return true;
        }else{

            return false;
        }
    }

    public function actualizarUsuario($datos){

        $this->db->query("UPDATE dato_persona SET fk_estado = :estado WHERE documento = :doc");
        $this->db->bind("estado", $datos["estado"]);
        $this->db->bind(":doc", $datos["documento"]);
        $this->db->execute();
        $busca = $this->db->rowCount();
        if($busca == 1){
            return true;
        }else{
            return false;
        }
    }
    public function actualizarAprendiz($datos){
        $this->db->query("UPDATE dato_persona SET primer_nombre = :pnom,
         segundo_nombre = :snom, primer_apellido = :papellido, segundo_apellido = :sapellido,
          correo  = :email, fk_ficha = :ficha WHERE documento = :doc ");
        $this->db->bind(":pnom", strip_tags(ucwords(strtolower($datos["primer_nombre"]))));
        $this->db->bind(":snom", strip_tags(ucwords(strtolower($datos["segundo_nombre"]))));
        $this->db->bind(":papellido", strip_tags(ucwords(strtolower($datos["primer_apellido"]))));
        $this->db->bind(":sapellido", strip_tags(ucwords(strtolower($datos["segundo_apellido"]))));
        $this->db->bind(":email", strip_tags($datos["email"]));
        $this->db->bind(":ficha", strip_tags($datos["ficha"]));
        $this->db->bind(":doc", $datos["documento"]);
        $this->db->execute();
        $busca = $this->db->rowCount();
        if($busca == 1){
            return true;
        }else{
            return false;
        }
    }
    
    public function actualizarFicha($datos){

        $this->db->query("UPDATE ficha SET fk_sede = :sede,
         fk_jornada = :jornada, fk_modalidad = :mod, fk_programa_formacion = :programa,
          fk_trimestre  = :trimestre, fk_estado = :estado WHERE codigo_ficha = :ficha ");
        $this->db->bind(":sede", strip_tags($datos["sede"]));
        $this->db->bind(":jornada", strip_tags($datos["jornada"]));
        $this->db->bind(":mod", strip_tags($datos["modalidad"]));
        $this->db->bind(":programa", strip_tags($datos["programa_formacion"]));
        $this->db->bind(":trimestre", strip_tags($datos["trimestre"]));
        $this->db->bind(":estado", strip_tags($datos["id_estado"]));
        $this->db->bind(":ficha", $datos["ficha"]);
        $this->db->execute();
        $busca = $this->db->rowCount();
        if($busca == 1){
            return true;
        }else{
            return false;
        }
    }

    public function consultaFicha()
    {
        $this->db->query("SELECT * FROM ficha INNER JOIN sede ON sede.id_sede = ficha.fk_sede 
        INNER JOIN jornada ON jornada.id_jornada = fk_jornada 
        INNER JOIN modalidad ON modalidad.id_modalidad = ficha.fk_modalidad
        INNER JOIN programa_formacion ON programa_formacion.id_programa_formacion = ficha.fk_programa_formacion 
        INNER JOIN trimestre  ON trimestre.id_trimestre = ficha.fk_trimestre 
        INNER JOIN estado ON estado.id_estado = ficha.fk_estado
        WHERE codigo_ficha LIKE '%%' ");
        $this->db->execute();
        $respuesta = $this->db->objetos();
        return $respuesta;
    }

    public function consultaGeneral()
    {
        $this->db->query("SELECT * FROM sede WHERE sede LIKE '%%' ");

        $this->db->execute();
        $sede = $this->db->objetos();

        $this->db->query("SELECT * FROM jornada WHERE jornada LIKE '%%'");
        $this->db->execute();
        $jornada = $this->db->objetos();

        $this->db->query("SELECT * FROM tipo_de_formacion WHERE tipo_formacion LIKE '%%'");
        $this->db->execute();
        $tipo_formacion = $this->db->objetos();

        $this->db->query("SELECT * FROM modalidad WHERE modalidad LIKE '%%'");
        $this->db->execute();
        $modalidad = $this->db->objetos();

        $this->db->query("SELECT * FROM programa_formacion WHERE programa_formacion LIKE '%%'");
        $this->db->execute();
        $programa_formacion = $this->db->objetos();

        $this->db->query("SELECT * FROM trimestre WHERE trimestre LIKE '%%'");
        $this->db->execute();
        $trimestre = $this->db->objetos();

        $this->db->query("SELECT * FROM ciudad WHERE ciudad LIKE '%%'");
        $this->db->execute();
        $ciudad = $this->db->objetos();

        $respuesta = [

            "sede" => $sede,
            "jornada" => $jornada,
            "tipo_formacion" => $tipo_formacion,
            "modalidad" => $modalidad,
            "programa_formacion" => $programa_formacion,
            "trimestre" => $trimestre,
            "ciudad" => $ciudad,
        ];

        return $respuesta;

    }


    public function devuelveHistorial(){

        $this->db->query("SELECT * FROM historial_aprendiz as apre 
                          INNER JOIN ficha ON apre.fk_codigo_ficha = ficha.codigo_ficha 
                          INNER JOIN sede  ON apre.fk_sede_antigua = sede.id_sede
                          INNER JOIN jornada  ON apre.fk_jornada_antigua = jornada.id_jornada
                          INNER JOIN modalidad  ON apre.fk_modalidad_antigua = modalidad.id_modalidad
                          INNER JOIN trimestre  ON apre.fk_trimestre_antigua = trimestre.id_trimestre
                          INNER JOIN programa_formacion ON programa_formacion.id_programa_formacion = ficha.fk_programa_formacion 
                          WHERE codigo_ficha LIKE '%%' ");
        $this->db->execute();
        $respuesta = $this->db->objetos();
        return $respuesta;
    }

    public function devuelveProgramas(){

        $this->db->query("SELECT * FROM competencias as compe 
        INNER JOIN programa_formacion as programas ON compe.fk_programa = programas.id_programa_formacion
        INNER JOIN resultado_aprendizaje as resultado ON resultado.fk_competencia = compe.id_competencia
                          WHERE id_competencia LIKE '%%' ");
        $this->db->execute();
        $respuesta = $this->db->objetos();
        return $respuesta;
    }


    
}



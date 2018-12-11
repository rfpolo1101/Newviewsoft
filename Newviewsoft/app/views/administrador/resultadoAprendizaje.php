<?php require RUTA_APP . '/views/inicio/header.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--INICIO CONTENIDO-->
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          echo $_SESSION["crear"];
      
    } ?>

<!--**************************FROM*************************************-->

<form action="<?php echo RUTA_URL; ?>/crear/resultadoAprendizaje"  method="post">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-xs-0" >
      </div>

      <div class="clase col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6" style="margin: 80px 0px 0px 0px;">
          <div  class="titulo">
          resultado Aprendizaje
          </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px;">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label  for="resultado" class="sr-only" >resultado</label>
                      <div class="">
                      <textarea type="text" id="resultado" name="resultado" autocomplete="OFF"  placeholder="Ingresar el resultado"  class="form-control" required=""></textarea>
                      </div>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label  for="competencia" class="sr-only" >Competencia</label>
                      <div class="">
                      <select name="competencia" id="competencia" class="form-control" >
                 
                        </select>                       
                     </div>
                  </div>
                </div>
              </div>

                 <div class="col-md-12">
              <div class="col-md-12 col-sm-12 col-xs-12"> 
                  <div class="form-group">
                   <label for="programa_formacion"  class="sr-only">Programa Formación</label> 
                      <div class="">   
                      <select name="programa_formacion" id="programa_formacion" class="form-control" >
                      <option value="0">Seleccione Programa Formación</option>
                      <?php foreach($datos["programa_formacion"] as $datos1):
                            if($datos1->programa_formacion != "Null"):
                      ?>
                         <option value="<?php echo $datos1->id_programa_formacion ?>"><?php echo $datos1->programa_formacion; ?></option>
                            <?php  endif; endforeach; ?> </select>   
                      </div> 
                  </div> 
              </div>
            </div>

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-offset-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4" style="padding-bottom: 20px;">
                <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
              </div>
      </div>

      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0 col-xs-0">
      </div>

       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-left: 45px;">
       <ul class="nav nav-pills nav-stacked navbar-inverse" style="margin: 10px;">
       <li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> BIENVENIDO</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/sede/"> Sede</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/ficha/">  Ficha</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/jornada"> Jornada</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/ciudad"> Ciudad</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/modalidad"> Modalidad</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/trimestre"> Trimestre</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/competencias">Competencia</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/tipo_de_formacion"> Tipo de Formación</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/programas_formacion"> Programa Formación </a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/resultadoAprendizaje">Resultado de Aprendizaje</a></li>
                <li class="divider"></li>
            </ul>
        </div>
      </div>
    </div>
  </form>

<script>
$(document).ready(function(){
    $("#programa_formacion").change(function(){
      
    var documento = $("#programa_formacion").val();
    var dato = new FormData();
    dato.append("programa_formacion", documento);
    $.ajax({
        url: "../../Newviewsoft/AjaxV/validarResultados",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
    
                $("#competencia").empty();
                $("#competencia").append(respuesta);            
        }
      });

    });
});
</script>
<?php require RUTA_APP . "/views/inicio/footer.php";?>


<?php require RUTA_APP . '/views/inicio/header.php'; ?>
<!--INICIO CONTENIDO-->
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          echo $_SESSION["crear"];
      
    } ?>
    <br>
<form action="<?php echo RUTA_URL; ?>/crear/sede"  method="post"> 
    <div class="col-md-15">
      <div class="col-md-3">
      </div>
   
      <div class="clase col-md-4">                               
          <div  class="titulo">
              Sede 
          </div>          
            <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="sede" class="sr-only" >Sede</label> 
                      <div class="">
                      <input type="text" id="sede" name="sede" autocomplete="OFF" required="" placeholder="Ejemplo: Colombia"  class="form-control">
                      </div>
                  </div>
                </div> 
            </div>
            <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="ciudad" class="sr-only" >Ciudad</label> 
                      <div class="">
                      <select name="ciudad" id="ciudad" class="form-control" >
                      <option value="0">Seleccione Ciudad</option>

                      <?php foreach($datos["ciudad"] as $datos1):
                            if($datos1->ciudad != "Null" ):
                      ?>

                        <option value="<?php echo $datos1->id_ciudad ?>"><?php echo $datos1->ciudad; ?></option>
            
                      <?php  endif; endforeach; ?> </select>    
                      </div>
                  </div>
                </div> 
            </div>
              <div class="col-md-4 col-md-offset-4" style="padding-bottom: 20px;"> 
                <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
              </div>   
          </div>

        <div class="col-md-2">
        </div>

         <div class="col-md-3">
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
            </li>
          </ul>
          </div>
      </div>
    </div>         
  </form>
<?php require RUTA_APP . "/views/inicio/footer.php"; ?>


<?php require RUTA_APP . '/views/inicio/header.php'; ?>

<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER["crear"]==true){
      echo "<div><div class='correctos1'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
      <strong>Registrado: </strong> la modalidad fue registrada </div></div>";    }

      if ($_SERVER["crear"]==false){
        echo "<div><div class='error1'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>la modalidad ya existe</div></div>";      }

    } ?>
<form action="<?php echo RUTA_URL; ?>/crear/tipo/modalidad"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-3">
      </div>
   
      <div class="clase col-md-4">                               
          <div  class="titulo">
              Modalidad 
          </div>          
              <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="modalidad" class="sr-only" >Modalidad</label> 
                      <div class="">
                      <input type="text" id="modalidad" name="tipo" autocomplete="OFF"  placeholder="Ejemplo: Presencial"  class="form-control">
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
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/resultado_aprendizaje">Resultado de Aprendizaje</a></li>
                <li class="divider"></li>
            </ul>
          </div>
      </div>
    </div>         
  </form>
<?php require RUTA_APP . "/views/inicio/footer.php"; ?>


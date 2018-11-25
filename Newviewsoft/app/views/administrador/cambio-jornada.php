<?php require RUTA_APP . '/views/inicio/header.php'; ?>
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER["crear"]==true){
      echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
      <strong>Registrado: </strong> la novedad fue registrada </div></div>";    }

      if ($_SERVER["crear"]==false){
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>el aprendiz ya tiene novedad</div></div>";      }

    } ?>

<!--*******************FROM**********************************-->
  <form action="<?php echo RUTA_URL; ?>/aprendices/novedades/cambio-jornada"  method="post" class="justify-cotent-center flex-column flex-md-row">   
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 nov">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                 
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >  
                  <div class="form-group">
                  Fecha Inicial cambio de jornada
                    <label  for="fecha_inicial" class="sr-only" >Fecha Inicial</label> 
                      <div class="">
                      <input type="date" id="fecha_inicial" name="fecha_inicial" autocomplete="OFF" required="" placeholder="Fecha Inicial"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >  
                  <div class="form-group">
                  Fecha Final cambio de jornada
                    <label  for="fecha_final" class="sr-only" style="color #FFFFFF;" >Fecha Final </label> 
                      <div class="">
                      <input type="date" id="fecha_final" name="fecha_final" autocomplete="OFF" required="" placeholder="Fecha Final"  class="form-control">
                      </div>
                  </div>
              </div>
              
            </div> 
      </div>
   
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clase ">                             
          <div  class="titulo">
              Cambio de jornada
          </div><br>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="formulario form-group" >
                <div class="radio" style="padding-bottom: 30px;">                   
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">               
                          <input type="radio" name="tipo_documento" id="cedulac" value="CC" required="" >
                          <label for="cedulac">Cédula Ciudadania</label>
                  </div>                                         
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
                          <input type="radio" name="tipo_documento" id="tarjeta" value="TI"  required="" >
                          <label for="tarjeta"  >Tarjeta Identidad</label>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                
                          <input type="radio" name="tipo_documento" id="cedulae" value="CE" required="">
                          <label for="cedulae">Cédula Extranjería</label>
                  </div>
                </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento Aprendiz</label> 
                      <div class="">
                      <input type="text" id="documento" name="documento" autocomplete="OFF" required="" placeholder="Ejemplo: 99121700405"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="motivo" class="sr-only" >Motivo Solicitud</label> 
                      <div class="">
                      <textarea type="text" id="motivo" name="motivo" autocomplete="OFF" required="" placeholder="Motivo Solicitud"  class="form-control" cols="10" rows="5" ></textarea>
                      </div>
                  </div>
              </div> 
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="respuesta" class="sr-only" >Respuesta</label> 
                      <div class="">
                      <textarea type="text" id="respuesta" name="respuesta" autocomplete="OFF" required="" placeholder="Respuesta"  class="form-control" cols="10" rows="5" ></textarea>
                      </div>
                  </div>
              </div>    
              <div class="aprobaciones form-group">
                <div class="radio">                
                </div>
              </div>   
            </div>
           <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4" style=" padding-top: 15px; padding-bottom: 25px;"> 
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div>
      </div>         
      <div class="col-md-3" >
      </div> 
    </div>
  </form>



<?php require RUTA_APP . '/views/inicio/footer.php'; ?>


            
 
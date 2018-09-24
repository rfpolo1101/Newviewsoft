<?php require RUTA_APP . '/views/inicio/header.php'; ?>
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER["crear"]==true){
      echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
      <strong>Registrado: </strong> la novedad fue registrada </div></div>";    }

      if ($_SERVER["crear"]==false){
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>el aprendiz ya tiene novedad</div></div>";      }

    } ?>

<!--**********************************FROM*************************************-->
  <form action="<?php echo RUTA_URL; ?>/aprendices/retiroVoluntario"  method="post">   
    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                      <div class="">
                      </div>
                  </div>
              </div><br>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                      <div class="">
                     </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaRein" class="sr-only" >Fecha Reintegro</label> 
                      <div class="">
                      <input type="date" id="FechaRetiro" name="fechaRetiro" autocomplete="OFF" required="" placeholder="Fecha retiro voluntario"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaRein" class="sr-only" >Tiempo Reintegro</label> 
                      <div class="">
                      <input type="time" id="FechaRein" name="tiempoRetiro" autocomplete="OFF" required="" placeholder="Tiempo retiro vluntario"  class="form-control">
                      </div>
                  </div>
              </div>
            </div>
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Retiro Voluntario
          </div>    <br>      

            <div class="col-md-12">
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento Aprendiz</label> 
                      <div class="">
                      <input type="text" id="documento" name="documento" autocomplete="OFF" required="" placeholder="Documento"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="DesRvolun" class="sr-only" >Observacion</label> 
                      <div class="">
                      <textarea type="text" id="DesRvolun" name="observacion" autocomplete="OFF" required="" placeholder="Tipo de respuesta"  class="form-control" cols="10" rows="5"></textarea>
                      </div>
                  </div>
              </div>     
            </div>
           <div class="col-md-4 col-md-offset-4" style=" padding-top: 15px; padding-bottom: 25px;"> 
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div>
      </div>         
      <div class="col-md-3" >
      </div> 
    </div>
  </form>
  
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>

            

         
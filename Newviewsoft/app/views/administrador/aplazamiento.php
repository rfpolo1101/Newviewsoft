<?php require RUTA_APP . '/views/inicio/header.php'; ?>

<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER["crear"]==true){
      echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
      <strong>Registrado: </strong> la novedad fue registrada </div></div>";    }

      if ($_SERVER["crear"]==false){
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>el aprendiz ya tiene novedad</div></div>";      }

    } ?>
 
<!--***************************************FROM**************************************-->
  <form action="<?php echo RUTA_URL ?>/aprendices/aplazamiento"  method="post">   

    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                 
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                  Fecha Inicial Aplazamiento
                    <label  for="FechaIniApla" class="sr-only" >Fecha Inicial Aplazamiento</label> 
                      <div class="">
                      <input type="date" id="FechaIniApla" name="FechaIniApla" autocomplete="OFF" required="" placeholder="Fecha Inicial Aplazamiento"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                  Fecha Final Aplazamiento
                    <label  for="FechaFinaApla" class="sr-only" >Fecha Final Aplazamiento</label> 
                      <div class="">
                      <input type="date" id="FechaFinaApla" name="FechaFinaApla" autocomplete="OFF" required="" placeholder="Fecha Final Aplazamiento"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                  Hora Aplazamiento
                    <label  for="TiempoApla" class="sr-only" >Tiempo Aplazamiento</label> 
                      <div class="">
                      <input type="time" id="TiempoApla" name="TiempoApla" autocomplete="OFF" required="" placeholder="Tiempo Aplazamiento"  class="form-control">
                      </div>
                  </div>
              </div>  
            </div> 
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Aplazamientos
          </div><br>
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
                    <label  for="respuestapla" class="sr-only" >Motivo Solicitud</label> 
                      <div class="">
                      <textarea type="text" id="msoloapla" name="msoloapla" autocomplete="OFF" required="" placeholder="Motivo Solicitud"  class="form-control" cols="10" rows="5" ></textarea>
                      </div>
                  </div>
              </div> 
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="msoloapla" class="sr-only" >Respuesta</label> 
                      <div class="">
                      <textarea type="text" id="respuestapla" name="respuestapla" autocomplete="OFF" required="" placeholder="Respuesta"  class="form-control" cols="10" rows="5" ></textarea>
                      </div>
                  </div>
              </div>    
              <div class="aprobaciones form-group">
                <div class="radio">                
                </div>
              </div>   
            </div>
           <div class="col-md-4 col-md-offset-4" style=" padding-top: 15px; padding-bottom: 25px;"> 
              <input type="submit" name="" id="" value="Guardar"  class="btn btn-primary btn-block" >
            </div>
      </div>         
      <div class="col-md-3" >
      </div> 
    </div>
  </form>


<?php require RUTA_APP . "/views/inicio/footer.php"; ?>


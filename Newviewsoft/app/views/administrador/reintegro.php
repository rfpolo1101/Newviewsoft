<?php require RUTA_APP . '/views/inicio/header.php'; ?>
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER["crear"]==true){
      echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
      <strong>Registrado: </strong> la novedad fue registrada </div></div>";    }

      if ($_SERVER["crear"]==false){
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>el aprendiz ya tiene novedad</div></div>";      }

    } ?>

<br><br>
<form action="<?php echo RUTA_URL; ?>/aprendices/reintegro"  method="post">   
    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                 
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaIniD" class="sr-only" >Fecha Inicial reintegro</label> 
                      <div class="">
                      <input type="date" id="FechaIniD" name="FechaIniRein" autocomplete="OFF" required="" placeholder="Fecha Inicial Deserción"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaFinaD" class="sr-only" >Fecha Final reintegro</label> 
                      <div class="">
                      <input type="date" id="FechaFinaD" name="FechaFinaRein" autocomplete="OFF" required="" placeholder="Fecha Final Deserción"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="TiempoDeser" class="sr-only" >Tiempo reintegro</label> 
                      <div class="">
                      <input type="time" id="TiempoRein" name="TiempoRein" autocomplete="OFF" required="" placeholder="Tiempo Deserción"  class="form-control">
                      </div>
                  </div>
              </div>  
            </div> 
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Reintegro
          </div><br><br>   
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
                    <label  for="DesRein" class="sr-only" >Descripción</label> 
                      <div class="">
                      <textarea type="text" id="DesRein" name="DesRein" autocomplete="OFF" required="" placeholder="Descripción"  class="form-control" cols="10" rows="5"></textarea>
                      </div>
                  </div>
              </div>    
              <div class="aprobaciones form-group">
                <div class="radio">                   
                  
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
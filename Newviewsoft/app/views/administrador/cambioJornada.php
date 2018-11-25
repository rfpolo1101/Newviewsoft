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
  <form action="<?php echo RUTA_URL; ?>/aprendices/cambioJornada"  method="post">   
    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                   </div>
                <div class="col-md-12 col-sm-12 col-xs-12">  
                    <div class="form-group">
                    Fecha Cambio Jornada
                      <label  for="FechaJor" class="sr-only" >Fecha Cambio Jornada</label> 
                        <div class="">
                        <input type="date" id="FechaJor" name="FechaJor" autocomplete="OFF" required="" placeholder="Fecha Cambio Jornada"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">  
                    <div class="form-group">
                    Tiempo Cambio Jornada
                      <label  for="TiempoJor" class="sr-only" >Tiempo Cambio Jornada</label> 
                        <div class="">
                        <input type="time" id="TiempoJor" name="TiempoJor" autocomplete="OFF" required="" placeholder="Tiempo Cambio Jornada"  class="form-control">
                        </div>
                    </div>
                </div> 
            </div>
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Cambio Jornada
          </div>          
            <div class="formulario form-group" >
              <div class="radio" style="padding-bottom: 30px;">                   
                
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento Aprendiz</label> 
                      <div class="">
                      <input type="text" id="documento" name="documento" autocomplete="OFF" required="" placeholder="Documento Aprendiz"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="DesJor" class="sr-only" >Descripción</label> 
                      <div class="">
                      <textarea type="text" id="DesJor" name="DesJor" autocomplete="OFF" required="" placeholder="Descripción"  class="form-control" cols="10" rows="5" ></textarea>
                      </div>
                  </div>
              </div>    
              <div class="aprobaciones form-group">
                
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



<?php require RUTA_APP . '/views/inicio/footer.php'; ?>


            
 
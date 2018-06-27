<?php  include RUTA_APP . '/views/inicio/header.php';  ?>

<form action="<?php echo RUTA_URL; ?>/aprendices/desercion"  method="post">   
    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaIniD" class="sr-only" >Fecha Inicial Deserción</label> 
                      <div class="">
                      <input type="date" id="FechaIniD" name="FechaIniD" autocomplete="OFF" required="" placeholder="Fecha Inicial Deserción"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaFinaD" class="sr-only" >Fecha Final Deserción</label> 
                      <div class="">
                      <input type="date" id="FechaFinaD" name="FechaFinaD" autocomplete="OFF" required="" placeholder="Fecha Final Deserción"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="TiempoDeser" class="sr-only" >Tiempo Deserción</label> 
                      <div class="">
                      <input type="time" id="TiempoDeser" name="TiempoDeser" autocomplete="OFF" required="" placeholder="Tiempo Deserción"  class="form-control">
                      </div>
                  </div>
              </div>  
            </div> 
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Deserciones
          </div> <br><br>         

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
                    <label  for="penalizacion" class="sr-only" >Penalización</label> 
                      <div class="">
                      <textarea type="text" id="penalizacion" name="penalizacion" autocomplete="OFF" required="" placeholder="Penalización"  class="form-control" cols="10" rows="5" ></textarea>
                      </div>
                  </div>
              </div> 
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="docuUsu" class="sr-only" >Documento Instructor</label> 
                      <div class="">
                      <input type="text" id="docuUsu" name="docuInstruc" autocomplete="OFF" required="" placeholder="Documento Intructor"  class="form-control">
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
<?php  include RUTA_APP . '/views/inicio/footer.php';  ?>
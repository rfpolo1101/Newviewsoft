<?php require RUTA_APP . '/views/inicio/header.php';?><br><br><br>



<form action="<?php   echo RUTA_URL; ?>/aprendices/traslado"  method="post">   
    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="CodTras" class="sr-only" >Código Traslado</label> 
                      
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaTras" class="sr-only" >Fecha Traslado</label> 
                      <div class="">
                      <input type="date" id="FechaTras" name="FechaTras" autocomplete="OFF" required="" placeholder="Fecha Traslado"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="TiempoTras" class="sr-only" >Tiempo Traslado</label> 
                      <div class="">
                      <input type="time" id="TiempoTras" name="TiempoTras" autocomplete="OFF" required="" placeholder="Tiempo Traslado"  class="form-control">
                      </div>
                  </div>
              </div>  
            </div> 
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Traslados
          </div><br><br> 
            <div class="col-md-14">
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
                    <label  for="MotiSoli" class="sr-only" >Motivo Solicitud</label> 
                      <div class="">
                      <textarea type="text" id="MotiSoli" name="MotiSoli" autocomplete="OFF" required="" placeholder="Motivo Solicitud"  class="form-control" cols="10" rows="5"></textarea>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="Res" class="sr-only" >Respuesta</label> 
                      <div class="">
                      <textarea type="text" id="Res" name="Res" autocomplete="OFF" required="" placeholder="Respuesta"  class="form-control" cols="10" rows="5"></textarea>
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

<?php require RUTA_APP . '/views/inicio/footer.php';?>
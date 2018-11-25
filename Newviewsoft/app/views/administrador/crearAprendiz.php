
<?php require RUTA_APP . '/views/inicio/header.php'; ?>

<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){


        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>usuario no registrado</div></div>";      

    } ?>

<!--**************************FROM*************************************-->
  <form action="<?php echo RUTA_URL;?>/aprendices/crear"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-3">
      </div>
   
        <div class="col-md-6 clase">                               
            <div  class="titulo">
                Aprendices 
            </div>          
             <div class="formulario form-group" >
                <div class="radio" style="padding-bottom: 30px;">                   
                  <div class="col-md-4 col-sm-4 col-xs-4">               
                          <input type="radio" name="tipo_documento" id="cedulac" value="CC" required="" >
                          <label for="cedulac">Cédula Ciudadania</label>
                  </div>                                         
                  <div class="col-md-4 col-sm-4 col-xs-4"> 
                          <input type="radio" name="tipo_documento" id="tarjeta" value="TI"  required="" >
                          <label for="tarjeta"  >Tarjeta Identidad</label>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">                
                          <input type="radio" name="tipo_documento" id="cedulae" value="CE" required="">
                          <label for="cedulae">Cédula Extranjería</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento</label> 
                      <div class="">
                      <input type="text" id="documento" name="documento" autocomplete="OFF" required="" placeholder="Documento"  class="form-control">
                      </div>
                  </div>
                </div> 
                 <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="correo" class="sr-only" >Correo</label> 
                      <div class="">
                      <input type="email" id="correo" name="correo" autocomplete="OFF" required="" placeholder=" email@correo"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>

              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="pnom" class="sr-only" >Nombres</label> 
                      <div class="">
                      <input type="text" id="pnom" name="primer_nombre" autocomplete="OFF" required="" placeholder=" Primer Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="snom" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="snom" name="segundo_nombre" autocomplete="OFF" required="" placeholder=" Segundo Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="papel" class="sr-only" >Apellidos</label> 
                      <div class="">
                      <input type="text" id="papel" name="primer_apellido" autocomplete="OFF" required="" placeholder=" Primer Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="sapel" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="sapel" name="segundo_apellido" autocomplete="OFF" required="" placeholder=" Segundo Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                   <label for="ficha"  class="sr-only">Ficha</label> 
                      <div class="">                   
                      <select name="ficha" id="ficha" class="form-control" >
                      <option value="0">Seleccione Ficha</option>

                      <?php foreach($datos["datos2"] as $datos):

                          if($datos->codigo_ficha != "0"):
                      ?>

                         <option value="<?php echo $datos->codigo_ficha ?>"><?php echo $datos->codigo_ficha; ?></option>
            
                          <?php  endif;  endforeach; ?> </select>   
                      </div> 
                  </div> 
                </div>
              </div>
              <div class="col-md-4 col-md-offset-4" style=" padding-top: 15px; padding-bottom: 25px;"> 
                <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
              </div> 
        </div>         
    </div>
  </form>
  <?php require RUTA_APP . '/views/inicio/footer.php'; ?>

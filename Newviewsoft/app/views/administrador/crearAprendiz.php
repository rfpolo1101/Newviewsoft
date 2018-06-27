
<?php require RUTA_APP . '/views/inicio/header.php'; ?>





<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_SERVER["crear"]==true){
      echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
      <strong>Registrado: </strong> El aprendiz fue registrado </div></div>";    }

      if ($_SERVER["crear"]==false){
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>usuario no registrado</div></div>";      }

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
                          <input type="radio" name="tdocumento" id="cedulac" value="2" required="" >
                          <label for="cedulac"  >Cédula Ciudadanía</label>
                  </div>                                         
                  <div class="col-md-4 col-sm-4 col-xs-4"> 
                          <input type="radio" name="tdocumento" id="tarjeta" value="1"  required="" >
                          <label for="tarjeta"  >Tarjeta Identidad</label>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">                
                          <input type="radio" name="tdocumento" id="cedulae" value="3" required="">
                          <label for="cedulae">Cédula Extranjería</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="pnom" class="sr-only" >Nombres</label> 
                      <div class="">
                      <input type="text" id="pnom" name="pnom" autocomplete="OFF" required="" placeholder=" Primer Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="snom" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="snom" name="snom" autocomplete="OFF" required="" placeholder=" Segundo Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="papel" class="sr-only" >Apellidos</label> 
                      <div class="">
                      <input type="text" id="papel" name="papel" autocomplete="OFF" required="" placeholder=" Primer Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="sapel" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="sapel" name="sapel" autocomplete="OFF" required="" placeholder=" Segundo Apellido"  class="form-control">
                      </div>
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
                    <label  for="tfijo" class="sr-only" >Teléfonos</label> 
                      <div class="">
                      <input type="text" id="tfijo" name="tfijo" autocomplete="OFF" required="" placeholder="Teléfono Fijo"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="tcel" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="tcel" name="tcel" autocomplete="OFF" required="" placeholder="Teléfono Celular"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                   <label for="ficha"  class="sr-only">Ficha</label> 
                      <div class="">                   
                      <select name="ficha" id="ficha" class="form-control" >
                      <option value="0" class="active">Seleccione Fichas</option>
                      <option value="1">1438303</option>
                      <option value="2">1329851</option>
                      <option value="3">1298141</option></select>
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

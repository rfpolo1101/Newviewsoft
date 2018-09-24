<?php require RUTA_APP . '/views/inicio/header.php' ?>

<form action="<?php RUTA_URL; ?>/usuario/perfil"  method="POST">   
    <div class="col-md-12">
      <div class="col-md-3">
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Perfil 
          </div>          
            <div class="formulario form-group" >
              <div class="radio" style="padding-bottom: 30px;">                   
                <div class="col-md-4 col-sm-4 col-xs-4">               
                </div>
              </div>
            </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="primerNom" class="sr-only" >Nombres</label> 
                      <div class="">
                      <input type="text" id="primerNom" name="primerNom" autocomplete="OFF" required="" placeholder=" Primer Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="segunNom" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="segunNom" name="segunNom" autocomplete="OFF" required="" placeholder=" Segundo Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="primerApel" class="sr-only" >Apellidos</label> 
                      <div class="">
                      <input type="text" id="primerApel" name="primerApel" autocomplete="OFF" required="" placeholder=" Primer Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="segunApel" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="segunApel" name="segunApel" autocomplete="OFF" required="" placeholder=" Segundo Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                      <label  for="docuUsu" class="sr-only" >Documento</label> 
                        <div class="">
                        <input type="text" id="docuUsu" name="docuUsu" autocomplete="OFF" required="" placeholder="Documento"  class="form-control">
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                      <label  for="emailC" class="sr-only" >Email</label> 
                        <div class="">
                        <input type="email" id="emailC" name="emailC" autocomplete="OFF" required="" placeholder=" email@correo"  class="form-control">
                        </div>
                    </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="teleF" class="sr-only" >Teléfonos</label> 
                      <div class="">
                      <input type="text" id="teleF" name="teleF" autocomplete="OFF" required="" placeholder="Teléfono Fijo"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="teleC" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="teleC" name="teleC" autocomplete="OFF" required="" placeholder="Teléfono Celular"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="direccion" class="sr-only" >Dirección</label> 
                      <div class="">
                      <input type="text" id="direccion" name="direccion" autocomplete="OFF" required="" placeholder="Dirección"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="fechaN" class="sr-only" >Fecha Nacimiento</label> 
                      <div class="">
                      <input type="text" id="fechaN" name="fechaN" autocomplete="OFF" required="" placeholder="Fecha Nacimiento"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                  <div class="form-group ">
                   <label for="cargo"  class="sr-only">Cargo</label> 
                      <div class="input-group">

                      </div>                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;"> 
                <input type="submit" name="" id="" value="Guardar"  class="btn btn-primary btn-block" >
              </div>  
      </div>         
      <div class="col-md-3" style="display: block; max-width: 100%; height: auto; width: 150px;">
            </div>
    </div>
  </form>

<?php require RUTA_APP . '/views/inicio/footer.php' ?>
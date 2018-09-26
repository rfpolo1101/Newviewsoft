<?php require RUTA_APP . '/views/inicio/header.php' ?>

<form action="<?php echo RUTA_URL; ?>/usuario/perfil"  method="POST">   
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
                    <label>Documento</label> 
                      <div class="">
                      <input type="text" id="documento" name="" autocomplete="OFF" required="" placeholder="Documento"  class="form-control" 
                      value="<?php foreach($datos  ['datos'] as $datos1){echo substr($datos1->documento,2);}?>" disabled>
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label >correo</label> 
                      <div class="">
                      <input type="text" id="correo" name="correo" autocomplete="OFF" required="" placeholder="correo"  class="form-control"  value="<?php foreach($datos  ['datos'] as $datos1){echo $datos1->correo;}?>">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label >Primer nombre</label> 
                      <div class="">
                      <input type="text" id="primer_nombre" name="primer_nombre" autocomplete="OFF" required="" placeholder=" Primer nombre"  class="form-control"  value="<?php foreach($datos  ['datos'] as $datos1){echo $datos1->primer_nombre;}?>">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label>Segundo_nombre</label> 
                      <div class="">
                      <input type="text" id="segundo_nombre" name="segundo_nombre" autocomplete="OFF" required="" placeholder=" Segundo nombre"  class="form-control"  value="<?php foreach($datos  ['datos'] as $datos1){echo $datos1->segundo_nombre;}?>">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                      <label>Primer_apellido</label> 
                        <div class="">
                        <input type="text" id="primer_apellido" name="primer_apellido" autocomplete="OFF" required="" placeholder="Primer apellido"  class="form-control"  value="<?php foreach($datos  ['datos'] as $datos1){echo $datos1->primer_apellido;}?>">
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                      <label>Segundo apellido</label> 
                        <div class="">
                        <input type="text" id="segundo_apellido" name="segundo_apellido" autocomplete="OFF" required="" placeholder="Segundo apellido"  class="form-control"  value="<?php foreach($datos  ['datos'] as $datos1){echo $datos1->segundo_apellido;}?>">
                        </div>
                    </div>
                </div> 
              </div>
             
                
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="direccion" class="sr-only" >Dirección</label> 
                   
                </div></div>
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label >Contraseña</label> 
                      <div class="">
                      <input type="pas" id="contrasena" name="contrasena" autocomplete="OFF" required="" placeholder="Contraseña"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                  <div class="form-group ">
                      <div class="input-group">
                      <a hrft="">Cambiar contraseña</a>
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
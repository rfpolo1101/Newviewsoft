<?php require RUTA_APP . '/views/inicio/header.php' ?>

<!--INICIO CONTENIDO-->
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          echo $_SESSION["crear"];
      
    } ?>

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
                    <label  for="direccion" class="sr-only" ></label> 
                   
                </div></div>
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label >Contraseña</label> 
                      <div class="">
                      <input type="password" id="contrasena" name="contrasena" autocomplete="OFF" required="" placeholder="Contraseña"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                  <div class="form-group ">
                      <div class="input-group">
                      <a href="" lass="btn" data-toggle="modal" data-target="#myModal">¿Olvido Su Contraseña?</a>
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


  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  
  <div class="modal-dialog">
  
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Cambiar contraseña</h4>
    </div>
    <div class="modal-body">
  
    <form action="<?php  echo RUTA_URL; ?>/usuario/actualizarContrasena"  method="post">   
    <div class="formulario form-group" >
                    <div class="radio" style="padding-bottom: 10px;">                   
                     
                    </div>
    <div class="form-group">
          <label>Contraseña Actual</label>
          <input type="password" name="contrasenan" id="contrasenan" class="form-control" >
    </div>
    <div class="form-group">
          <label>Nueva Contraseña </label>
          <input type="password" name="contrasena" id="contraseña" class="form-control" >
        </div>
        <div class="form-group">
          <label>Confirmar Contraseña</label>
          <input type="password" name="contrasenav" id="contraseñav" class="form-control" >
        </div>
       
          <input type="hidden" id="userId" class="form-control">
    </div>
    <div class="modal-footer">
    <input class="button" type="submit" name="button" id="button" value="Cambiar"/>
    </form>
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
    </div>
     </div>
    </div>
      </div>
      <!--Fin modal--> 

<?php require RUTA_APP . '/views/inicio/footer.php' ?>
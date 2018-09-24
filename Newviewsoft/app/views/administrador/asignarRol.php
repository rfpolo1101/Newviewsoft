<?php require RUTA_APP . '/views/inicio/header.php'; ?>
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
        <strong>Error: </strong>el usuario no esta registrado</div></div>";      }

   ?>

<form action="<?php echo RUTA_URL ?>/usuario/asignar"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-4">
      </div>
   
      <div class="clase col-md-5">                               
          <div  class="titulo">
              Asignar Rol 
          </div>          <br><br>
            <div class="col-md-12" style="padding-bottom: 45px;">
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento</label> 
                      <div class="input-group">
                      <span  class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" id="documento" name="documento" autocomplete="OFF"  placeholder="Documento"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6"> 
                  <div class="form-group ">
                   <label for="cargo"  class="sr-only">Cargo</label> 
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>  
                      <select name="cargo" id="cargo" class="form-control">
                      <option value="0">Seleccione Cargo</option>
                      <option value="1">Administrador</option>
                      <option value="2">Apoyo Administrativo</option>
                      <option value="3">Instructor</option>
                      <option value="4">Invitado</option></select>
                      </div>                    
                  </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;"> 
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div> 
      </div>
    </div>         
  </form>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
  
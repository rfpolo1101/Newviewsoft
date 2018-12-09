<?php require RUTA_APP . '/views/inicio/header.php';?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SERVER["crear"] == true) {
        echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
        <strong>Correcto</strong>El Permiso fue asignado exitosamente</div></div>";}

    if ($_SERVER["crear"] == false) {
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
        <strong>Error: </strong>El Permiso no fue asignado</div></div>";}

}?>

<form action="<?php echo RUTA_URL ?>/usuario/asignar-Permisos"  method="post">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-1 col-xs-1">
      </div>

      <div class="clase col-xl-6 col-lg-6 col-md-6 col-sm-10 col-xs-10" style="margin: 80px 0px 0px 0px;">
          <div  class="titulo">
              Permiso
          </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px;" >
              <div class="formulario form-group" >
                  <div class="radio" style=" padding-bottom: 50px;">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="radio" name="tipo_documento" id="cedulac" value="CC" required="" >
                            <label for="cedulac">Cédula Ciudadania</label>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="radio" name="tipo_documento" id="tarjeta" value="TI"  required="" >
                            <label for="tarjeta"  >Tarjeta Identidad</label>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="radio" name="tipo_documento" id="cedulae" value="CE" required="">
                            <label for="cedulae">Cédula Extranjería</label>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label  for="documento" class="sr-only" >Documento</label>
                        <div class="input-group">
                        <span  class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" id="documento" name="documento" autocomplete="OFF"  placeholder="Documento"  class="form-control" required="">
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group ">
                     <label for="cargo"  class="sr-only">Cargo</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                        <select name="cargo" id="cargo" class="form-control">
                        <option value="0">Seleccione Cargo</option>
                        <option value="4">Administrador</option>
                        <option value="3">Apoyo Administrativo</option>
                        <option value="2">Instructor</option>
                        </select>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xl-offset-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4" style="padding-bottom: 25px;">
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div>
      </div>

       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-1 col-xs-1">
      </div>
    </div>
  </form>
<?php require RUTA_APP . '/views/inicio/footer.php';?>

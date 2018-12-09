<?php require RUTA_APP . '/views/inicio/header.php';?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SERVER["crear"] == true) {
        echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
        <strong>Correcto</strong>rol asignado</div></div>";}

    if ($_SERVER["crear"] == false) {
        echo "<div align='center'><div class='errores'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span>
        <strong>Error: </strong>el rol no fue asignado</div></div>";}

}?>

<form action="<?php echo RUTA_URL ?>/usuario/asignar/asignar_permiso"  method="post">
    <div class="col-md-12">
      <div class="col-md-4">
      </div>

      <div class="clase col-md-5">
          <div  class="titulo">
              Asignar Permiso
          </div>          <br><br>
            <div class="col-md-12" style="padding-bottom: 40px;">
            <div class="formulario form-group" >
                <div class="radio" style="padding-bottom: 70px;">
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
                      <option value="4">Administrador</option>
                      <option value="3">Apoyo Administrativo</option>
                      <option value="2">Instructor</option>
                    </select>
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
<?php require RUTA_APP . '/views/inicio/footer.php';?>

<?php require RUTA_APP . '/views/inicio/header.php'; ?>


<form action="<?php echo RUTA_URL; ?>/crear/formacion"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-3">
      </div>
   
      <div class="clase col-md-4">                               
          <div  class="titulo">
              Formación 
          </div>          
            <div class="col-md-12" style="padding-top: 40px; padding-bottom: 20px;">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="formacion" class="sr-only" >formacion</label> 
                      <div class="">
                      <input type="text" id="formacion" name="formacion" autocomplete="OFF" required="" placeholder="Formación"  class="form-control">
                      </div>
                  </div>
                </div> 
            </div>
            <div class="col-md-4 col-md-offset-4" style="padding-bottom: 40px;"> 
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div>   
          </div>

        <div class="col-md-2">
        </div>

          <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked navbar-inverse" style="margin: 10px;">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> BIENVENIDO</a></li>
            <li><a href="<?php echo RUTA_URL; ?>/crear/formacion"> Formación</a></li>
            <li><a href="<?php echo RUTA_URL; ?>/crear/trimestre"> Trimestre</a></li>
            <li><a href="<?php echo RUTA_URL; ?>/crear/jornada"> Jornada</a></li>
            <li><a href="<?php echo RUTA_URL; ?>/crear/ficha"> Ficha</a></li>
            <li><a href="<?php echo RUTA_URL; ?>/crear/sede"> Sede</a></li> 
                  <li class="divider"></li>  
                </ul>
            </li>
          </ul>
          </div>
      </div>
    </div>         
  </form>
<?php require RUTA_APP . "/views/inicio/footer.php"; ?>


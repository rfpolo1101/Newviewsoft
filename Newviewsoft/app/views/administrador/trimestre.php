<?php require RUTA_APP . '/views/inicio/header.php'; ?>

<form action="<?php echo RUTA_URL; ?>/crear/trimestre"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-3">
      </div>
   
      <div class="clase col-md-4">                               
          <div  class="titulo">
              Trimestre 
          </div>          
              <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="trimestre" class="sr-only" >Trimestre</label> 
                      <div class="">
                      <input type="text" id="trimestre" name="trimestre" autocomplete="OFF"  placeholder="Trimestre"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-4 col-md-offset-4" style="padding-bottom: 20px;"> 
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


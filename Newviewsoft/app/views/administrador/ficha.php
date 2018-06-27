<?php require RUTA_APP . '/views/inicio/header.php'; ?>
<form action="<?php echo RUTA_URL; ?>/crear/ficha"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-3">
      </div>
   
      <div class="clase col-md-5">                               
          <div  class="titulo">
            Ficha 
          </div>          
            <div class="col-md-12" style="padding-top: 20px;">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="ficha" class="sr-only" >Ficha</label> 
                      <div class="">
                      <input type="text" id="ficha" name="ficha" autocomplete="OFF" required="" placeholder="Ficha"  class="form-control">
                      </div>  
                  </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                   <label for="jornada"  class="sr-only">Jornada</label> 
                      <div class="">                   
                      <select name="jornada" id="jornada" class="form-control" >
                      <option value="0">Seleccione Jornada</option>
                      <option value="1">Diurna</option>
                      <option value="2">Nocturna</option>
                      <option value="3">Fin de Semana</option></select>
                      </div> 
                  </div> 
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                   <label for="trimestre"  class="sr-only">Trimestre</label> 
                      <div class="">                   
                      <select name="trimestre" id="trimestre" class="form-control" >
                      <option value="0">Seleccione Trimestre</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      </select>
                      </div> 
                  </div> 
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-6"> 
                  <div class="form-group ">
                   <label for="sede"  class="sr-only">Sede</label> 
                      <div class="">  
                      <select name="sede" id="sede" class="form-control">
                      <option value="0">Seleccione sede</option>
                      <option value="1">Complejo Sur</option>
                      <option value="2">Colombia</option>
                      <option value="3">Restrepo</option>
                      <option value="4">Ricaurte</option></select>
                      </div>                    
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6"> 
                  <div class="form-group ">
                   <label for="formulario"  class="sr-only">Formación</label> 
                      <div class="">  
                      <select name="formulario" id="formulario" class="form-control">
                      <option value="0">Análisis y sistemas de información</option>
                      <option value="1">Multimedia y diseño</option>
                      <option value="2">Programación de software</option>
                      <option value="3">Mantenimiento en computo</option></select>  
                      </div>                  
                  </div>
                </div>
              </div>
            <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;"> 
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div>   
          </div>

        <div class="col-md-1">
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


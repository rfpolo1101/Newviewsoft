<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Newviewsoft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/logeo.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/formato.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/parallax.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/redes.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo RUTA_URL ?>/img/logo1.png" rel="shortcut icon" type="image/x-icon" />

</head>
<body>
  <header>
    <!--INICIO IMAGENES LOGO Y SENA-->      
    <nav class="navbar" style="padding-top: 60px;">
   </nav>
        
 <!--INICIO CONTENIDO-->
 <?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          echo $_SESSION["crear"];
      
  } ?>

  <!--MENU PRINCIPAL--> 

     <nav class="navbar navbar-fixed-top navbar-inverse"  >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="../inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="registro"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
                      
</header>
  <section> 

    <div class="col-md-12">
      <div class="col-md-4">
      </div>     
      

      <form action="<?php  echo RUTA_URL; ?>/Inicio/olvidoCodigo"   method="post">   


          <div class="col-md-4 clase">
          
                
              <div  class="titulo">
              Codigo de verificacion
                   
              </div>     
                   
                <div class="formulario form-group" >
                  <div class="radio" style="padding-bottom: 10px;">                   
                  </div>
                </div>
                  <div class="col-md-12">
                    <div class="col-md-12">  
                        <div class="form-group">
                          <label  for="documento" class="sr-only" >Codigo de verificacion</label> 
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" id="codigov" name="codigov" autocomplete="OFF"  placeholder="Codigo Verificacion"  class="form-control" required="">
                            </div>
                        </div>
                    </div> 
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12">  
                        <div class="form-group">
                          <label  for="documento" class="sr-only" >Contraseña</label> 
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="passoword" id="contrasena" name="contrasena" autocomplete="OFF"  placeholder="Nueva Contraseña"  class="form-control" required="">
                            </div>
                        </div>
                    </div> 
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12">  
                        <div class="form-group">
                          <label  for="documento" class="sr-only" >Verificar Contraseña</label> 
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="passoword" id="contrasenav" name="contrasenav" autocomplete="OFF"  placeholder="Verificar Contraseña"  class="form-control" required="">
                            </div>
                        </div>
                    </div> 
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group">
                        </div>
                    </div>
                  </div> 
                  <div class="col-md-6 col-md-offset-3" style="padding-bottom: 25px;"> 
                    <input type="submit" name="enviar" id="" value="Cambiar Contraseña"  class="btn btn-primary btn-block" >
                  </div>        
             </div>        
      </form>

        <div class="col-md-4"> 
        </div>
    </div>
  </section>



  </div>
</div>

    <!-- IMAGENES -->

      <div class="col-md-12 container">
        <div class="col-md-12">

        </div>
      </div>

<!--TÉRMINO DE PÁGINA-->

        <div>
          <section style="margin-top: 150px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
              <div class="container">
                    <hr />
                        <div class="text-center center-block">
                            <p class="txt-railway">Redes Sociales</p>
                            <br />
                                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social"></i></a>
                              <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social"></i></a>
                              <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social"></i></a>
                              <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
                </div>
                    <hr />
                </div>
                <h6>Ruth Daniela Viuche Aldana/Mónica Paola Murcia Bedoya/Rafael Fernando Polo Cucaita </h6>
              </div>
          </section>
        </div>

        <!--Script-->

        <script>

                function numeros(e){
                    key = e.keyCode || e.which;
                    tecla = String.fromCharCode(key).toLowerCase();
                    letras = " 0123456789";
                    especiales = [8,37,39,46];  
                 
                    tecla_especial = false
                    for(var i in especiales){
                 if(key == especiales[i]){
                     tecla_especial = true;
                     break;
                        } 
                    }
                 
                    if(letras.indexOf(tecla)==-1 && !tecla_especial)
                        return false;
                }    

         </script>

  <!--BOOTSTRAP JQUERY-->
  
     <script type="text/javascript" src="<?php echo RUTA_URL ?>/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo RUTA_URL ?>/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
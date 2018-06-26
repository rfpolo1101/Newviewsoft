<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

  <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="/Newviewsoft/views/Diseños/bootstrap/css/bootstrap.min.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviewsoft/views/Diseños/css/logeo.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviewsoft/views/Diseños/css/formato.css">

      <title>NewViewSoft</title>

    </head>

  <body background="/Newviewsoft/views/Diseños/img/imag7.jpg">
  <header>
    <!--INICIO IMAGENES LOGO Y SENA-->      
    <nav class="navbar" style="padding-top: 60px;">
        <div>
           <a href="/index.html" ><img src="/Newviewsoft/views/Diseños/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="width: 40%;"></a>
          </div>

          <div>
           <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/Newviewsoft/views/Diseños/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:12%; left:1110px; top:60px;"></a>
          </div>
        </div>
   </nav>
        


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
            <li ><a href="/"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li><a href="olvido_codigo"><span class="glyphicon glyphicon glyphicon-lock"></span> ¿Olvido Su código?</a></li>
            <li><a href="registro"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
                      
</header>

 <!--INICIO CONTENIDO-->

<!---validacion php tipo documento-->
 <?php 
 
  if(isset($_POST["enviar"]))
  {
    if(empty($tipo_doc)){

      echo  "<div align='center'><div  class='errores'><span class='closebtn'				
      onclick=this.parentElement.style.display='none';>&times;</span> 
       <strong>Error:</strong> ingrese tipo de documento </div></div>";
    }
    if(!empty($tipo_doc) AND !empty($documento) AND is_numeric($documento) AND !empty($contra)){
   echo $_SERVER ["error1"];
    }
  }
 ?>
 <!---fin validacion tipo documento-->

  <section> 

    <div class="col-md-12">
      <div class="col-md-4">
      </div>     
      

      <form action="<?php  echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>"  method="post">   


          <div class="col-md-4 clase">
          
                
              <div  class="titulo">
                  Logeo
                   
              </div>     
                   
                <div class="formulario form-group" >
                
                  <div class="radio" style="padding-bottom: 50px;">                   
                    <div class="col-md-4 col-sm-4 col-xs-4">               
                            <input type="radio" name="tdocumento" id="cedulac" value="2"  >
                            <label for="cedulac"  >Cédula Ciudadanía</label>
                    </div>                                         
                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                            <input type="radio" name="tdocumento" id="tarjeta" value="1" >
                            <label for="tarjeta"  >Tarjeta Identidad</label>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">                
                            <input type="radio" name="tdocumento" id="cedulae" value="3" >
                            <label for="cedulae">Cédula Extranjería</label>
                    </div>
                  </div>
                </div>
                  <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">  
                        <div class="form-group">
                        <!--validacion numero documento-->
                          <?php  if(isset($_POST["enviar"])){
                          if (empty($documento)){
                            echo  "<div class='error'><strong>Error:</strong> ingrese numero de documento </div>";
                          }else{

                            if (strlen($documento) > 15){

                                echo "<div class='error'><strong>Error:</strong> el numero de documento es muy largo </div>";
                            }

                            if (!is_numeric($documento)){

                              echo "<div class='error'><strong>Error:</strong> el numero de documento debe ser solo numeros</div>";

                            }
                          }
                            
                          }  ?>
                          <!--fin validacion numero de documento-->
                          <label  for="docuUsu" class="sr-only" >Documento</label> 
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" id="docuUsu" name="docuUsu" autocomplete="OFF"  onkeypress="return numeros(event)"  minlength="8" maxlength="15" placeholder="Documento"  class="form-control">
                            </div>
                        </div>
                    </div> 
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                      <div class="form-group ">
                       <label for="cargo"  class="sr-only">Cargo</label> 
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>  
                          <select name="cargo" id="cargo" class="form-control">
                          <option disabled="disabled">Seleccione Cargo</option>
                          <option value="1">Administrador</option>
                          <option value="2">Apoyo Administrativo</option>
                          <option value="3">Instructor</option>
                          <option value="4">Invitado</option></select>
                          </div>                    
                      </div>
                    </div>
                       <div class="col-md-12 col-sm-12 col-xs-12">  
                        <div class="form-group">                          
                          <label  for="codigo" class="sr-only" >Código</label>
                           <!---validacion php tipo documento-->
                          <?php 
                            if(isset($_POST["enviar"]))
                            {
                                if (empty($contra))
                               {
                                echo "<div class='error'><strong>Error:</strong> ingrese el codigo</div>";
                              }
                            }
                          ?>
                          <!---fin validacion tipo documento-->
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" id="codigo" name="password" autocomplete="OFF"  placeholder="Código"  class="form-control"  maxlength="8">
                            </div>
                        </div>
                    </div> 
                  <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;"> 
                    <input type="submit" name="enviar" id="" value="Ingresar"  class="btn btn-primary btn-block" >

                   
                  </div>  
                 
          </div>         

                
        </form>


 
        <div class="col-md-4"> 
        </div>
    </div>
  </section>

          <!-- IMAGENES -->

      <div class="col-md-12 container">
        <div class="col-md-12">
             
        </div>
      </div>
    
<!--TÉRMINO DE PÁGINA-->



        <section style="margin-top: 40px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
          <div class="col-md-6">
            <article>
                  <ul>
                    <li><a href="">Ayuda</a></li>            
                    <li><a href="">Comentarios</a></li>
                    <li><a href="">Desarrolladores</a></li>
                    <li><a href="">Aviso de privacidad</a></li>
                    <li><a href="">Términos y condiciones</a></li>
                    <li><a href="">Politica de cookies</a></li>
                  </ul>
            </article>
          </div>
          <div class="col-md-6">
            <aside>
                  <ul>
                    <li><p>SIGUENOS EN:</p></li>
                    <li><a href="https://www.facebook.com/Newviewsoft-157249831764187/">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Correo</a></li>
                  </ul>
            </aside>
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
     <script type="text/javascript" src="/Newviewsoft/views/Diseños/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src=/Newviewsoft/views/Diseños/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
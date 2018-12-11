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

 <!--INICIO CONTENIDO-->
 <?php  if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          echo $_SESSION["crear"];
      
    } ?>


  <section>

    <div class="col-md-12">
      <div class="col-md-4">
      </div>


      <form action="<?php echo RUTA_URL; ?>/Inicio/registro"   method="post" onsubmit=" return  validarform()" >


          <div class="col-md-4 clase">


              <div  class="titulo">
                  Registro

              </div>

                <div class="formulario form-group" >

                  <div class="radio" style="padding-bottom: 50px;">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="radio" name="tipo_documento" id="cedulac" value="CC" required=""  >
                            <label for="cedulac"  >Cédula Ciudadanía</label>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="radio" name="tipo_documento" id="tarjeta" value="TI"  required="" >
                            <label for="tarjeta"  >Tarjeta Identidad</label>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="radio" name="tipo_documento" id="cedulae" value="CE" required="" >
                            <label for="cedulae">Cédula Extranjería</label>
                    </div>
                  </div>
                </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label  for="documento" class="sr-only" >Documento</label>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" id="documento" name="documento" autocomplete="OFF"  required=""   onkeypress="return numeros(event)"  minlength="7" maxlength="13" placeholder="Documento"  class="form-control" required="">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <label  for="correo" class="sr-only" >Correo</label>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" id="correo" name="correo" autocomplete="OFF"  placeholder="Correo Electrónico"  class="form-control"   required="" >
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <label  for="confirmacion_correo" class="sr-only" >Confirmación de Correo Electrónico Nombre</label>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                            <input type="text" id="correov" name="correov" autocomplete="OFF" placeholder="Confirmación Correo Electrónico"  class="form-control" required=""  >
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <label  for="primer_nombre" class="sr-only" >Primer Nombre</label>
                            <div class="input-group">
                            <span  class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input type="text" id="primer_nombre" name="primer_nombre" autocomplete="OFF" placeholder="Primer Nombre"  class="form-control" required=""  >
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <label  for="segundo_nombre" class="sr-only" >Segundo Nombre</label>
                            <div class="input-group">
                            <span  class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input type="text" id="segundo_nombre" name="segundo_nombre" autocomplete="OFF"  placeholder="Segundo Nombre"  class="form-control"   >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <div class="form-group">
                          <label  for="primer_apellido" class="sr-only" >Primer Apellido</label>
                            <div class="input-group">
                            <span  class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input type="text" id="primer_apellido" name="primer_apellido" autocomplete="OFF" placeholder="Primer Apellido"  class="form-control" required="" >
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <label  for="segundo_apellido" class="sr-only" >Segundo Apellido</label>
                            <div class="input-group">
                            <span  class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                            <input type="text" id="segundo_apellido" name="segundo_apellido" autocomplete="OFF"  placeholder="Segundo Apellido"  class="form-control" required=""   >
                            </div>
                        </div>
                    </div>
                  </div>
                  <input type="checkbox" id="terminos" name="terminos" required="" >
                  <a href="" data-toggle="modal" data-target="#Terminos"><strong>Aceptar terminos y condiciones<strong></a>           
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group">
                        <a href="" lass="btn" data-toggle="modal" data-target="#myModal">Solicitud Permiso</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;">
                    <input type="submit" name="enviar" id="" value="Ingresar" class="btn btn-primary btn-block" >

                  </div>
             </div>
      </form>

        <div class="col-md-4">
        </div>
    </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Solicitud Permiso</h4>
  </div>
  <div class="modal-body">
  <form action="<?php  echo RUTA_URL; ?>/Inicio/solitudPermiso"  method="post">   
  <div class="form-group">
        <label>Documento</label>
        <input type="text" id="documentom" name="documentom" class="form-control" >
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" id="emailm" name="correom" class="form-control" >
      </div>

         <div class="form-group">
        <label>Mensaje de solicitud</label>
        <textarea type="text" id="mensajem" name="mensajem" class="form-control" ></textarea>
      </div>
     
        <input type="hidden" id="userId" class="form-control">
  </div>
  <div class="modal-footer">
  <input class="button" type="submit" name="button" id="button" value="Enviar"/>
  </form>
    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
  </div>

   </div>


  </div></div>
<!--Fin modal--> 


<!-- Modal -->
<div class="modal fade" id="Terminos" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terminos y condiciones</h4>
        </div>
        <div class="modal-body">

Mediante las directrices de seguridad, términos de uso del servicio y de tratamiento de la información se busca garantizar la adecuada protección de los datos de nuestros usuarios, Esta información registrada en el aplicativo se realiza dentro de los términos y condiciones establecidas y el uso de los servicios implica la aceptación por parte de los usuarios.
La aceptación de los términos de uso y la política de confidencialidad de los servicios de la plataforma NewViewSoft lo hace responsable en relación con:<br>

•	La información que registra es verídica, real y corresponde a sus datos personales.<br>
•	El usuario y la contraseña asignados son de carácter intransferible, personal y modificable únicamente por su titular<br>
•	La suplantación o ingreso de información falsa constituye un fraude el cual implica sanciones e inhabilidades.<br>
•	Es responsabilidad del usuario mantener la información actualizada: nombres,apellidos y correo electrónico.<br>
•	Como usuario hará buen uso de la información a la que tenga acceso.<br><br>

AUTORIZACIÓN Y CONSENTIMIENTO PARA EL TRATAMIENTO DE DATOS PERSONALES<br><br>

NewViewSoft, con domicilio principal en la ciudad de Bogotá, se permite informar que en cumplimiento de la Ley Estatutaria 1581 del 2012, por la cual se estable el ‘Régimen General de Protección de Datos’ y el Decreto Reglamentario 1377 del 2013”, demanda respetuosamente su autorización para que de manera libre, previa, clara, expresa, voluntaria y debidamente informada permita a la Entidad recolectar, recaudar, almacenar, usar, procesar, compilar, intercambiar con otras Entidades Públicas, dar tratamiento, actualizar y disponer de los datos que serán suministrados y que se incorporen en nuestras bases de datos. Esta información es y será utilizada en el desarrollo de las funciones propias de la Entidad Sena</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
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
 <script>
    function validarform(){
    var terminos =  document.getElementById("terminos").checked;
    var nombre = document.getElementById("primer_nombre").value;
    var apellido = document.getElementById("primer_apellido").value;
    var apellidoDos = document.getElementById("segundo_apellido").value;
    var correo = document.getElementById("correo").value;
    var correov = document.getElementById("correov").value;
    var documento = document.getElementById("documento").value;
    var expresion = /\w+@\w+\.+[a-z]/;


    if(!terminos){

        alert("No se Completo el Registro Porfavor Acepte Téminos y condiciones");
        return false;

        }

        if(documento == "" || documento == null){

        alert("No se Completo el Campo del Documento");
        return false;

        }

        if (documento.length>13 || documento.length<7  ) {
            alert("El Numero de Documento Debe ser Minimo 7 Maximo 13 Caracteres");
        return false;

        }

        if(nombre == "" || apellido == "" || apellidoDos == "" || correo == "" || correov == ""){

          alert("Por Favor Complete los Campos Obligatorios");
          return false;
        }

        if(correo != correov){

          alert("Los Correos no Coinciden"); 
          return false;
        }

     


        if (!expresion.test(correo)) {

            alert("Por Favor Indique un Correo Valido");
            return false;
        }


    }


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
      <script type="text/javascript" src="<?php echo RUTA_URL ?>/js/validarRegistro.js"></script>

    </div>
</body>
</html>
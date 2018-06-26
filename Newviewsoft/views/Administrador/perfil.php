<!DOCTYPE html>

<html lang="es">

  <head>

<meta charset="utf-8">
<meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

      <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="/Newviewsoft/views/Diseños/bootstrap/css/bootstrap.min.css">

<!--CONEXIÓN HOJAS DE ESTILO-->
<link rel="stylesheet" type="text/css" href="/Newviewsoft/views/Diseños/css/novedad.css">

<!--CONEXIÓN HOJAS DE ESTILO-->
<link rel="stylesheet" type="text/css" href="/Newviewsoft/views/Diseños/css/menu.css">

<title>NewViewSoft</title>

</head>

  <body>

  <header>

<!--Nombre y Apellido usuario-->   

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
          <li>
            <a href="#"  role="button"  class="btn btn-link" ><span class="glyphicon glyphicon-user"></span><?php  echo " " . $_SESSION['Administrador'] ?></span></a>
          </li>  
      </ul>

        <ul class="nav navbar-nav navbar-right">
        </ul>
    </div>
  </div>
</nav>
<!--INICIO IMAGENES LOGO Y SENA-->   

<nav class="navbar navbar-inverse">
      <div>
       <a href="" ><img src="/Newviewsoft/views/Diseños/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="position:relative; top:28px; width: 648px;"></a>
      </div>
      <div>
       <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/Newviewsoft/views/Diseños/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:160px; left:1110px; top:55px;"></a>
      </div>
</nav>
    

<!--MENU PRINCIPAL--> 


<nav class="navbar navbar-inverse">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span> 
  </button>
  <a class="navbar-brand" href="menu">MENÚ</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav">
    <li ><a href=""><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
    <li><a href="aprendices"><span class="glyphicon glyphicon-pencil"></span> Crear Aprendices</a></li> 
    <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Novedades <span class="caret"></span></a>

            <ul class="dropdown-menu" >
              <li><a href="novedades?novedad=CambioJornada"> Cambios de jornada</a></li>
              <li><a href="novedades?novedad=RetiroVoluntario"> Retiro voluntario</a></li>
              <li><a href="novedades?novedad=Aplazamientos"> Aplazamientos</a></li>
              <li><a href="novedades?novedad=Deserciones"> Deserciones</a></li>
              <li><a href="novedades?novedad=Traslados"> Traslados</a></li>
              <li><a href="novedades?novedad=Reintegro"> Reintegro</a></li>
            </ul>
    </li>
  </ul>

  <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Opciones <span class="caret"></span></a>

            <ul class="dropdown-menu" >
            <input type="color" >
              <li><a href="../controller/roles"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
              <li><a href="../controller/perfil"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-question-sign "></span> Ayuda</a></li>
              <li><a href="../controller/cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
            </ul>
    </li> 
  </ul>

  <form class="navbar-form navbar-right" role="search">
    <div class="form-group">
      <input type="search" id="buscador" name="buscador" placeholder="Buscador" class="form-control">
    </div>
    <button type="sumit" class="btn btn-primary">
      <span class="glyphicon glyphicon-search"></span>
    </button>
  </form>

</div>
</div>
</nav>

</header>

  <form action=""  method="">   
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
                    <label  for="primerNom" class="sr-only" >Nombres</label> 
                      <div class="">
                      <input type="text" id="primerNom" name="primerNom" autocomplete="OFF" required="" placeholder=" Primer Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="segunNom" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="segunNom" name="segunNom" autocomplete="OFF" required="" placeholder=" Segundo Nombre"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="primerApel" class="sr-only" >Apellidos</label> 
                      <div class="">
                      <input type="text" id="primerApel" name="primerApel" autocomplete="OFF" required="" placeholder=" Primer Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="segunApel" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="segunApel" name="segunApel" autocomplete="OFF" required="" placeholder=" Segundo Apellido"  class="form-control">
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                      <label  for="docuUsu" class="sr-only" >Documento</label> 
                        <div class="">
                        <input type="text" id="docuUsu" name="docuUsu" autocomplete="OFF" required="" placeholder="Documento"  class="form-control">
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                    <div class="form-group">
                      <label  for="emailC" class="sr-only" >Email</label> 
                        <div class="">
                        <input type="email" id="emailC" name="emailC" autocomplete="OFF" required="" placeholder=" email@correo"  class="form-control">
                        </div>
                    </div>
                </div> 
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="teleF" class="sr-only" >Teléfonos</label> 
                      <div class="">
                      <input type="text" id="teleF" name="teleF" autocomplete="OFF" required="" placeholder="Teléfono Fijo"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="teleC" class="sr-only" ></label> 
                      <div class="">
                      <input type="text" id="teleC" name="teleC" autocomplete="OFF" required="" placeholder="Teléfono Celular"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="direccion" class="sr-only" >Dirección</label> 
                      <div class="">
                      <input type="text" id="direccion" name="direccion" autocomplete="OFF" required="" placeholder="Dirección"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="fechaN" class="sr-only" >Fecha Nacimiento</label> 
                      <div class="">
                      <input type="text" id="fechaN" name="fechaN" autocomplete="OFF" required="" placeholder="Fecha Nacimiento"  class="form-control">
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                  <div class="form-group ">
                   <label for="cargo"  class="sr-only">Cargo</label> 
                      <div class="input-group">

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

<!--TÉRMINO DE PÁGINA-->

        <section style=" margin-top: 20px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
          <div class="col-md-6">
            <article>
                  <ul>
                    <li><a href="">Ayuda</a></li>            
                    <li><a href="">Comentarios</a></li>
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
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Correo</a></li>
                  </ul>
            </aside>
          </div>
        <footer style="text-align: right;">  
            <h6><i>Autores: Rafael Polo Cucaita, Mónica Paola Murcia Bedoya, Daniel Fabian Castañeda, Danna Valeria Huertas</i></h6>
        </footer>
        </section>

 <!--BOOTSTRAP JQUERY-->
 <script type="text/javascript" src="/Newviewsoft/views/Diseños/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="/Newviewsoft/views/Diseños/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>

            
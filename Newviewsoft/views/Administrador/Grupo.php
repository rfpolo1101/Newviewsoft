<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

      <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="/Newviesoft/Diseños/bootstrap/css/bootstrap.min.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviesoft/Diseños/css/novedad.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviesoft/Diseños/css/menu.css">

      <title>NewViewSoft</title>

    </head>

  <body>

  <header>

    <!--INICIO IMAGENES LOGO Y SENA-->      
    <nav class="navbar navbar-inverse">
          <div>
           <a href="menuAdministrador.html" ><img src="img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="width: 40%;"></a>
          </div>

          <div>
           <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:12%; left:1110px; top:0px;"></a>
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
        <li ><a href="menu"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
        <li><a href="aprendices"><span class="glyphicon glyphicon-pencil"></span> Crear Aprendices</a></li> 
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Novedades <span class="caret"></span></a>

                <ul class="dropdown-menu" >
                  <li><a href="Cjornada"> Cambios de jornada</a></li>
                  <li><a href="ReriroVoluntario"> Retiro voluntario</a></li>
                  <li><a href="aplazamientos"> Aplazamientos</a></li>
                  <li><a href="deserciones"> Deserciones</a></li>
                  <li><a href="traslados"> Traslados</a></li>
                  <li><a href="reintegro"> Reintegro</a></li>
                </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Opciones <span class="caret"></span></a>

                <ul class="dropdown-menu" >
                  <li><a href="roles"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
                  <li><a href="perfil"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                  <li><a href=""><span class="glyphicon glyphicon-question-sign "></span> Ayuda</a></li>
                  <li><a href="cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
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
   
      <div class="clase col-md-4">                               
          <div  class="titulo">
            Grupo
          </div>          
            <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="grupo" class="sr-only" >Grupo</label> 
                      <div class="">
                      <input type="text" id="grupo" name="grupo" autocomplete="OFF" required="" placeholder="Grupo"  class="form-control">
                      </div>
                  </div>
                </div> 
            </div>
            <div class="col-md-4 col-md-offset-4" style="padding-bottom: 20px;"> 
              <input type="submit" name="" id="" value="Guardar"  class="btn btn-primary btn-block" >
            </div>   
          </div>

        <div class="col-md-2">
        </div>

          <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked navbar-inverse" style="margin: 10px;">
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> BIENVENIDO</a></li>
                  <li><a href="Formacion.html"> Formación</a></li>
                  <li><a href="Trimestre.html"> Trimestre</a></li>
                  <li><a href="Jornada.html"> Jornada</a></li>
                  <li><a href="Grupo.html"> Grupo</a></li>
                  <li><a href="Ficha.html"> Ficha</a></li>
                  <li><a href="Sede.html"> Sede</a></li> 
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-close"></span> Carpetas <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="TiDocu.html">Documento</a></li>
                        <li class="divider"></li>  
                        <li><a href="CarUsu.html">Cargo</a></li>                      
                      </ul>
                  </li>
                </ul>
          </div>
      </div>
    </div>         
  </form>

<!--TÉRMINO DE PÁGINA-->

        <section style="margin-top: 20px; padding-top: 20px;  background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
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
     <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
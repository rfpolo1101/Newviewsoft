<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">
      <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/foondo.css">
      <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/parallax.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/redes.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo RUTA_URL ?>/img/logo1.png" rel="shortcut icon" type="image/x-icon" />

      <title>NewViewSoft</title>

    </head>

<body onload="actualizaReloj()">

  <header>

    <!--Nombre y Apellido usuario-->   
   <nav class="navbar navbar-fixed-top navbar-inverse"  >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"  aria-controls="navbar" aria-expanded="true">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="media-left">
                <div class="media">
                  <div class="input-group">
                   <a href="#"><img src="<?php echo RUTA_URL; ?>/img/icono_perfil.jpg" class="img-rounded" style="width: 35px; height: 35px;"></a>
                   <a href="#"  role="button"  class="btn btn-link" ><button class="btn btn-primary">
                       <span><?php if(isset($_SESSION['Super_admin'])){ echo "Super administrador:  " . $_SESSION ["nombre"] . " " . $_SESSION ["apellido"];}   if(isset($_SESSION['Administrador'])){ echo "Administrador:  " . $_SESSION ["nombre"] . " " . $_SESSION ["apellido"];} 
                       if(isset($_SESSION['Apoyo_admin'])){ echo "Apoyo administrador: " . $_SESSION ["nombre"] . " " . $_SESSION ["apellido"];}  if(isset($_SESSION['Invitado'])){ echo "Invitado:  " . $_SESSION ["Invitado"];}?></span></button></a>
                  </div> 
                </div>
                
            </li>  
           
          </ul>
          <div class="media">
                <div >
                  <div id="Fecha_Reloj"></div>
                </div>
              </div>

            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
      </div>
  </nav>
  </nav>
    <!--INICIO IMAGENES LOGO Y SENA-->   

    <nav class="navbar navbar-inverse">
          <div>
           <a href="" ><img src="<?php echo RUTA_URL; ?>/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="position:relative; top:28px; width: 648px;"></a>
          </div>
          <div>
          <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="<?php echo RUTA_URL ?>/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:156px; left:85%; top:60px;"></a>
          </div>
	 </nav>
        

 <!--MENU PRINCIPAL--> 


    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="true">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="<?php echo RUTA_URL; ?>/nvs/sdmtd/">MENÚ</a>
      </div>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo RUTA_URL; ?>/nvs/sdmtd/"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
          <li><a href="<?php echo RUTA_URL; ?>/aprendices/crear/"><span class="glyphicon glyphicon-pencil"></span> Crear Aprendices</a></li>
          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Novedades <span class="caret"></span></a>

                  <ul class="dropdown-menu" >
                    <li><a href="<?php echo RUTA_URL ?>/aprendices/novedades/cambio-jornada"> Cambios de jornada</a></li>
                    <li><a href="<?php echo RUTA_URL ?>/aprendices/novedades/retiro-voluntario"> Retiro voluntario</a></li>
                    <li><a href="<?php echo RUTA_URL ?>/aprendices/novedades/aplazamiento"> Aplazamiento</a></li>
                    <li><a href="<?php echo RUTA_URL ?>/aprendices/novedad/desercion"> Deserciones</a></li>
                    <li><a href="<?php echo RUTA_URL ?>/aprendices/novedades/traslado"> Traslado</a></li>
                    <li><a href="<?php echo RUTA_URL ?>/aprendices/novedades/reintegro"> Reintegro</a></li>
                  </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Opciones <span class="caret"></span></a>
                  <ul class="dropdown-menu" >
                   <li><a href="<?php echo RUTA_URL; ?>/usuario/perfil"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                   <li><a href="<?php echo RUTA_URL; ?>/usuario/asignar/asignar_rol"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
                    <li><a href="<?php echo RUTA_URL; ?>/usuario/asignar/asignar_permiso"><span class="glyphicon glyphicon-list-alt"></span> Asignar Permisos</a></li>
                    <li><a href="<?php echo RUTA_URL; ?>/usuario/ayuda"><span class="glyphicon glyphicon-pushpin"></span>Ayuda</a></li>
                    <li><a href="<?php echo RUTA_URL; ?>/nvs/cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                  </ul>
          </li> 
        </ul>
    <!--buscar usuarios-->
    <form class="navbar-form navbar-right" role="search" action="<?php echo RUTA_URL ?>/buscar/usuarios" method="POST">
            <div class="dropdown btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="glyphicon glyphicon-search"></span>
                  <span class="caret"></span>
                  <span class="sr-only">Buscador</span>
              </button>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/usuarios">Usuarios</a></li>
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/aprendices">Aprendiz</a></li>          
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/fichas">Fichas</a></li>
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/historial">Historial</a></li>    
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/programas">Programa de Formacion</a></li>                            
                      <li class="dropdown-submenu">

                  <a class="test" tabindex="-1" href="">Novedad<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/novedades/2">Cambio de Jornada</a></li>
                    <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/novedades/3">Retiro voluntario</a></li>
                    <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/novedades/4">Aplazamiento</a></li>
                    <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/novedades/5">Deserción</a></li>
                    <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/novedades/6">Traslado</a></li>
                    <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/novedades/7">Reintegro</a></li>

                  </ul>
                </li>
              </ul>
            </div>
            <div class="input-group">
              <input type="text" placeholder="Buscador" class="form-control" style="border-radius: 3px 3px 3px 3px;"></input>
             </div>
          </form>

        </div>
      </div>
    </nav>

</header>

 <!--INICIO CONTENIDO-->

  <section>
    <div class="container col-md-12">
        <div id="myCarousel" class="carousel slide col-md-9" data-ride="carousel">
          
          <!-- INDICADORES -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

        <!-- IMAGENES -->

       <div class="carousel-inner">
          <div class="item active">
             <img src="<?php echo RUTA_URL; ?>/img/imag7.jpg" alt="VANGUARDIA" title="VANGUARDIA">
          </div>

          <div class="item">
             <img src="<?php echo RUTA_URL; ?>/img/imag18.jpg" alt="SEDE COLOMBIA" title="SEDE COLOMBIA">
          </div>

           <div class="item">
             <img  src="<?php echo RUTA_URL; ?>/img/imag8.jpg" alt="BIENVENIDOS" title="BIENVENIDOS">
          </div>
          <div class="item">
             <img  src="<?php echo RUTA_URL; ?>/img/imag2.jpg" alt="SENA" title="SENA">
          </div>
          <div class="item">
             <img  src="<?php echo RUTA_URL; ?>/img/imag6.jpg" alt="TECNOLOGÍA" title="TECNOLOGÍA">
          </div>
          <div class="item">
             <img  src="<?php echo RUTA_URL; ?>/img/imag10.jpg" alt="FUTURO" title="FUTURO">
          </div>
       </div>
     

  <!-- CONTROLES DE IZQUIERDA A DERECHA -->

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

        <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked navbar-inverse" style="margin: 10px;">
               <li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> BIENVENIDO</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/sede/"> Sede</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/ficha/">  Ficha</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/jornada"> Jornada</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/ciudad"> Ciudad</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/modalidad"> Modalidad</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/trimestre"> Trimestre</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/competencias">Competencia</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/tipo_de_formacion"> Tipo de Formación</a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/tipo/programas_formacion"> Programa Formación </a></li>
                <li><a href="<?php echo RUTA_URL; ?>/crear/resultadoAprendizaje">Resultado de Aprendizaje</a></li>
                <li class="divider"></li>
            </ul>
            </li>
          </ul>
        </div>

    </div>
  </section>

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



  <!--BOOTSTRAP JQUERY-->
  <script type="text/javascript" src="<?php echo RUTA_URL; ?>/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo RUTA_URL; ?>/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo RUTA_URL; ?>/js/reloj.js"></script>

    </div>
    <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
    </script>

</body>
</html>
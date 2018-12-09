<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

      <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/bootstrap/css/bootstrap.min.css">
    

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/foondo.css">

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
        <a class="navbar-brand" href="<?php echo RUTA_URL; ?>/nvs/apymd/">MENÚ</a>
      </div>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo RUTA_URL; ?>/nvs/apymd/"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
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
                    <li><a href="<?php echo RUTA_URL; ?>/usuario/ayuda"><span class="glyphicon glyphicon-book"></span> ayuda</a></li>
                    <li><a href="<?php echo RUTA_URL;?>/nvs/cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
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
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/aprendices">Aprendiz</a></li>          
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/fichas">Fichas</a></li>
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/historial">Historial</a></li>                
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
                <img src="<?php echo RUTA_URL; ?>/img/imag6.jpg" alt="TÉCNOLOGIA" title="TÉCNOLOGIA" style="width: ; height:;" >
             </div>

             <div class="item">
                <img src="<?php echo RUTA_URL; ?>/img/imag4.png" alt="SEDE COLOMBIA" title="SEDE COLOMBIA" style="width: 100%; height: 50%;"  >
             </div>

              <div class="item">
                <img  src="<?php echo RUTA_URL; ?>/img/imag2.jpg" alt="BIENVENIDOS" title="BIENVENIDOS" style="width: 100%; height: 50%;" >
             </div>
             <div class="item">
                <img  src="<?php echo RUTA_URL; ?>/img/imag8.jpg" alt="SENA" title="SENA" style="width: 100%; height: 50%;" >
             </div>
             <div class="item">
                <img  src="<?php echo RUTA_URL; ?>/img/imag9.jpg" alt="FUTURO" title="FUTURO" style="width:; height: ;" >
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
            </li>
          </ul>
        </div>

    </div>
  </section>

<!--TÉRMINO DE PÁGINA-->

        <section style="margin-top: 20px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
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
        </footer>
        </section>


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
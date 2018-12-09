<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <!--BOOTSTRAP HOJAS DE ESTILO-->
 <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/bootstrap/css/bootstrap.min.css">
 <link href="<?php echo RUTA_URL ?>/img/logo1.png" rel="shortcut icon" type="image/x-icon" />
 <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/parallax.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/redes.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL ?>/css/tabla.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo RUTA_URL ?>/img/logo1.png" rel="shortcut icon" type="image/x-icon" />
<!--CONEXIÓN HOJAS DE ESTILO-->
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/novedad.css">


<!--CONEXIÓN HOJAS DE ESTILO-->
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/foondo.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/formato.css">


      <title>NewViewSoft</title>

    </head>

<body onload="actualizaReloj()">

  <header>
  <!--INICIO IMAGENES LOGO Y SENA-->

<nav class="navbar navbar-inverse">
      <div>
       <a href="" ><img src="<?php echo RUTA_URL; ?>/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="position:relative; top:28px; width: 648px;"></a>
      </div>
      <div>
      <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="<?php echo RUTA_URL ?>/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:155PX; left:85%; top:60px;"></a>
      </div>
</nav>
<!--Nombre y Apellido usuario-->

   <nav class="navbar navbar-fixed-top navbar-inverse"  >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="true">
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
                       <span><?php if (isset($_SESSION['Super_admin'])) {echo "Super administrador:  " . $_SESSION["nombre"] . " " . $_SESSION["apellido"];}if (isset($_SESSION['Administrador'])) {echo "Administrador:  " . $_SESSION["nombre"] . " " . $_SESSION["apellido"];}
                       if (isset($_SESSION['Apoyo_admin'])) {echo "Apoyo administrador:  " . $_SESSION["nombre"] . " " . $_SESSION["apellido"];}if (isset($_SESSION['Instructor'])) {echo "Instructor:  " . $_SESSION["nombre"] . " " . $_SESSION["apellido"];}?></span></button></a>
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


<!--MENU PRINCIPAL-->


<nav class="navbar navbar-inverse">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="true">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="<?php if (isset($_SESSION['Administrador'])) {echo RUTA_URL . '/nvs/admtd/';}if (isset($_SESSION['Apoyo_admin'])) {echo RUTA_URL . '/nvs/apymd/';}if (isset($_SESSION['Instructor'])) {echo RUTA_URL . '/nvs/ivtd/';} if (isset($_SESSION['Super_admin'])){echo RUTA_URL . '/nvs/sdmtd'; }?>">MENÚ</a>

</div>
<?php if (isset($_SESSION['Administrador']) || isset($_SESSION['Apoyo_admin']) || isset($_SESSION['Super_admin'])): ?>

<div class="collapse navbar-collapse" id="menu">
  <ul class="nav navbar-nav">
    <li ><a href="<?php if (isset($_SESSION['Administrador'])) {echo RUTA_URL . '/nvs/admtd/';}if (isset($_SESSION['Apoyo_admin'])) {echo RUTA_URL . '/nvs/apymd/';} if (isset($_SESSION['Instructor'])) { echo RUTA_URL . '/nvs/ivtd/';} if (isset($_SESSION['Super_admin'])){echo RUTA_URL . '/nvs/sdmtd'; } ?>"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
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
<?php endif;?>
    </li>

  </ul>
  <!--Configuracion-->
  <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Opciones <span class="caret"></span></a>
                <ul class="dropdown-menu" >
                    <li><a href="<?php echo RUTA_URL; ?>/usuario/perfil"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                    <?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"])): ?> <li><a href="<?php echo RUTA_URL; ?>/usuario/asignar/asignar_rol"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
                    <li><a href="<?php echo RUTA_URL; ?>/usuario/asignardocumento"><span class="glyphicon glyphicon-briefcase"></span> Asignar Tipo Documento</a></li>
<li><a href="<?php echo RUTA_URL; ?>/usuario/asignar/asignar_permiso"><span class="glyphicon glyphicon-list-alt"></span> Asignar Permisos</a></li><?php endif; ?>
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
              <?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"])): ?>  <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/usuarios">Usuarios</a></li> <?php endif?>
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/aprendices">Aprendiz</a></li>          
                <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/fichas">Fichas</a></li>
<?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"]) or isset($_SESSION["Apoyo_admin"]) ): ?> <li><a tabindex="-1" href="<?php echo RUTA_URL ?>/buscar/historial">Historial</a></li><?php endif;?>             
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

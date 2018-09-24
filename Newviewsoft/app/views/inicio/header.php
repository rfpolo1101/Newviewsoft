<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">
 <!--BOOTSTRAP HOJAS DE ESTILO-->
 <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/bootstrap/css/bootstrap.min.css">
 <link href="<?php echo RUTA_URL ?>/img/logo1.png" rel="shortcut icon" type="image/x-icon" />

<!--CONEXIÓN HOJAS DE ESTILO-->
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/novedad.css">


<!--CONEXIÓN HOJAS DE ESTILO-->
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/menu.css">
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
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="media-left">
                <div class="media">
                  <div class="input-group">
                   <a href="#"><img src="<?php echo RUTA_URL; ?>/img/icono_perfil.jpg" class="img-rounded" style="width: 35px; height: 35px;"></a>
                   <a href="#"  role="button"  class="btn btn-link" ><button class="btn btn-primary">
                       <span><?php if(isset($_SESSION['Administrador'])){ echo "Administrador:  " . $_SESSION ["nombre"] . " " . $_SESSION ["apellido"];} 
                       if(isset($_SESSION['ApoyoAdministrador'])){ echo "Administrador:  " . $_SESSION ["ApoyoAdministrador"];} if(isset($_SESSION['Invitado'])){ echo "Invitado:  " . $_SESSION ["Invitado"];}?></span></button></a>
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
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span> 
  </button>
  <a class="navbar-brand" href="<?php if(isset($_SESSION['Administrador'])){ echo RUTA_URL . '/nvs/admtd/';}if(isset($_SESSION['ApoyoAdministrador'])){ echo RUTA_URL . '/nvs/apymd/';} ?>">MENÚ</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav">
    <li ><a href="<?php if(isset($_SESSION['Administrador'])){ echo RUTA_URL . '/nvs/admtd/';}if(isset($_SESSION['ApoyoAdministrador'])){ echo RUTA_URL . '/nvs/apymd/';} ?>"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
    <li><a href="<?php echo RUTA_URL; ?>/aprendices/crear/"><span class="glyphicon glyphicon-pencil"></span> Crear Aprendices</a></li> 
    <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Novedades <span class="caret"></span></a>

            <ul class="dropdown-menu" >
              <li><a href="<?php echo RUTA_URL ?>/aprendices/cambioJornada"> Cambios de jornada</a></li>
              <li><a href="<?php echo RUTA_URL ?>/aprendices/retiroVoluntario"> Retiro voluntario</a></li>
              <li><a href="<?php echo RUTA_URL ?>/aprendices/aplazamiento"> Aplazamientos</a></li>
              <li><a href="<?php echo RUTA_URL ?>/aprendices/desercion"> Deserciones</a></li>
              <li><a href="<?php echo RUTA_URL ?>/aprendices/traslado"> Traslados</a></li>
              <li><a href="<?php echo RUTA_URL ?>/aprendices/reintegro"> Reintegro</a></li>
            </ul>
            
    </li>
   
  </ul>
  <!--Configuracion-->
  <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Opciones <span class="caret"></span></a>

                <ul class="dropdown-menu" >
                  <li><a href="<?php echo RUTA_URL; ?>/usuario/asignar"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
                  <li><a href="<?php echo RUTA_URL; ?>/usuario/perfil"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-question-sign "></span> Ayuda</a></li>
                  <li><a href="<?php echo RUTA_URL;?>/nvs/cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                </ul>
        </li> 
      </ul>

 <!--buscar usuarios-->
 <form class="navbar-form navbar-right" role="search" action="<?php echo RUTA_URL ?>/buscar/usuarios" method="POST">
        <div class="dropdown btn-group">
          <button type="button" class="btn btn-default">Buscador</button>
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-search"></span>
              <span class="caret"></span>
              <span class="sr-only">Buscador</span>
          </button>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">Usuarios</a></li>
            <li><a tabindex="-1" href="#">Aprendices</a></li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Novedad<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Retiro voluntario</a></li>
                <li><a tabindex="-1" href="#">Cambio Jornada</a></li>
                <li><a tabindex="-1" href="#">Aplazamiento</a></li>
                <li><a tabindex="-1" href="#">Deserción</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </form>
</div>
</div>

</nav>
</header>

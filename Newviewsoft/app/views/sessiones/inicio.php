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
    <script src="main.js"></script>
</head>
<body>
<header>

    <!--INICIO IMAGENES LOGO Y SENA-->      
    <nav class="navbar" style="padding-top: 60px;">
        <div>
           <a href="/index.html" ><img src="<?php echo RUTA_URL ?>/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="width: 40%;"></a>
          </div>

          <div>
           <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="<?php echo RUTA_URL ?>/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:12%; left:85%; top:60px;"></a>
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
            <li ><a href=""><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li><a href="inicio/olvidoCodigo"><span class="glyphicon glyphicon glyphicon-lock"></span> ¿Olvido Su código?</a></li>
            <li><a href="Inicio/registro"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            <li><a href="Inicio/login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>

</header>

 <!--INICIO CONTENIDO-->

  <section> 

    <div class="col-md-12">
        <div class="col-md-5">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#col1">¿Quiénes somos?</button>
                </h4>
              </div>
              <div id="col1" class="panel-collapse collapse in">
                <div class="panel-body">Somos aprendices del sena, que recrea un software para dichos funcionarios del Sena quienes tienen una tarea muy ardua y estamos aqui para el beneficio de su sociedad y optimizar siendo más facil su viabilidad de trabajo</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#col2">¿Qué queremos?</button>
                </h4>
              </div>
              <div id="col2" class="panel-collapse collapse">
                <div class="panel-body">Queremos ser un software potencial que beneficie el trabajo de sena, en el momento de gestionar las novedades de dichos aprendinces siendo informados.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#col3">Servicios Prestados</button>
                </h4>
              </div>
              <div id="col3" class="panel-collapse collapse">
                <div class="panel-body">-Mejor Viabilidad
                -Optima seguridad
              -Apoyo a la sociedad</div>
              </div>
            </div>
          </div> 
        </div>

        <div class="col-md-2">
        </div>
        
        <div id="myCarousel" class="carousel slide col-md-5" data-ride="carousel">
          
          <!-- INDICADORES -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

          <!-- IMAGENES -->

        <div class="carousel-inner">
             <div class="item active">
                <img src="<?php echo RUTA_URL ?>/img/img1.png" alt="TÉCNOLOGIA" title="TÉCNOLOGIA" style="height: 500px;">
             </div>

             <div class="item">
                <img src="<?php echo RUTA_URL ?>/img/img4.jpg" alt="TÉCNOLOGIA" title="TÉCNOLOGIA" style="height: 500px;" >
             </div>

            <div class="item">
                <img  src="<?php echo RUTA_URL ?>/img/img3.jpg" alt="BIENVENIDOS" title="BIENVENIDOS" style="height: 500px;" >
            </div>
        </div>

  <!-- CONTROLES DE IZQUIERDA A DERECHA -->

            <a class="top carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-top"></span>
            </a>
            <a class="bottom carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-bottom"></span>
            </a>
        </div>
    </div>
  </section>

          <!-- IMAGENES -->

      <div class="col-md-12 container">
        <div class="col-md-12">
             
        </div>
      </div>
    
<!--TÉRMINO DE PÁGINA-->



        <section style="margin-top: 10%; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
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
     
    </div>

  </body>
  </header>
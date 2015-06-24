<?php include("Conexion.php");  ?>
<!doctype html>
<html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400' rel='stylesheet' type='text/css'>
<link  rel= "stylesheet"  href= "css/bootstrap.min.css" >
<link  rel= "stylesheet"  href= "css/estilo.css" >
</head>

<body>  
<!-- inicio del navegador -->
    <nav class="navbar navbar-default navbar-static-top nav-global">
      <div class="container navegador">
        <div class="navbar-header navegador_in">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo_nav" href="#"><img src="imagenes/marca.png" alt="not1"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Inicio</a></li>
            <li><a href="quienes-somos">Quienes somos</a></li>
            <li><a href="proyectos">Proyectos desarrollados</a></li>
            <li><a href="<?= $urlnoticias; ?>">Noticias</a></li>
            <li><a href="contacto">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- final del navegador -->

<!-- inicio del slider -->

<div id="carousel-example-generic" class="carousel slide banner" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="text-center item active">
      <div class="d_banner hidden-xs">
          <h1><?= $texto_slide1; ?></h1>
          <p><?= $contenido_slide1; ?></p>
      </div>
      <img src="imagenes/index/banner.jpg" alt="not1">
    </div>

    <div class="text-center item">
      <div class="d_banner hidden-xs">
          <h1><?= $texto_slide2; ?></h1>
          <p><?= $contenido_slide2; ?></p>
      </div>
      <img src="imagenes/index/banner-1.jpg" alt="not2">
    </div>

    <div class="text-center item">
      <div class="d_banner hidden-xs">
          <h1><?= $texto_slide3; ?></h1>
          <p><?= $contenido_slide3;?>.</p>
      </div>
      <img src="imagenes/index/banner-2.jpg" alt="not3">
    </div>

  </div>

  <!-- Controls -->
  <a href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a href="#carousel-example-generic" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- fin del slider -->

<article class="3servicios">
	<div class="container">
		<div class="text-center col-xs-12 col-md-12 col-sm-12 titulo_ser">
      <h1><?= $titulo1; ?></h1>
      <h3><?= $titulo2; ?></h3>
      <p><?= $contenido1; ?></p>
    </div>

		<div class="text-center col-xs-12 col-md-4 col-sm-4 ser_1">
      <figure>
        <img src="imagenes/index/icono_1.png" alt="ico-ser1">
      </figure>
      <h4><?= $titulo3; ?></h5>
      <p><?= $contenido2; ?></p>
    </div>

		<div class="text-center col-xs-12 col-md-4 col-sm-4 ser_1">
      <figure>
        <img src="imagenes/index/icono_2.png" alt="ico-ser2">
      </figure>
      <h4><?= $titulo4; ?></h5>
      <p><?= $contenido3; ?></p>
    </div>

		<div class="text-center col-xs-12 col-md-4 col-sm-4 ser_1">
      <figure>
        <img src="imagenes/index/icono_3.png" alt="ico-ser3">
      </figure>
      <h4><?= $titulo5; ?></h5>
      <p><?= $contenido4; ?></p>
    </div>

</article>

<div class="text-center container col-xs-12 col-md-3 col-sm-3 direccion">
    <div class="info">
      <h2 class="hidden-xs"><?= $titulofooter ?></h2>
      <figure class="avion">
        <a href="proyectos"><img src="imagenes/index/icono_pro.png" alt="not2"></a> 
      </figure>
    </div>
    <figure class="foto_f">
      <img src="imagenes/index/direccion.jpg" alt="not2">
    </figure>
</div>

<footer class="row p_pagina text-center col-xs-12">
  <div class=" container">
    <div class="datos container">
      <h3>Redes sociales</h3>
      <figure>
        <img src="imagenes/index/i_facebook.jpg" alt="Facebook">
        <img src="imagenes/index/i_twitter.jpg" alt="Twitter"> 
      </figure>
      <p>Todos los derechos reservados a "SIMPLEX INGENIERIA"<br>
        Correo: <?= $correo; ?> - Fono: <?= $fono; ?><br>
        Dirección: <?= $direccion; ?>
      </p>
    </div>

    <div class="text-center pie col-xs-12">
      <div class="container"> 
        <div class="marca col-xs-12 col-md-6 col-sm-6">
          <a href="#"><img src="imagenes/marca.png" alt="not1"></a>
        </div>
        <div class="detalle col-xs-12 col-md-6 col-sm-6">
          <p>Sitio web desarrollado por emagenic Ltda
          </p>
        </div>
    </div>
    </div>
  </div>
</footer>

<script src="js/jquery.js"></script>
<script src = "js/bootstrap.min.js" > </script>
</body>

</html>

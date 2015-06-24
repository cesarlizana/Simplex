<?php
include("Conexion.php");  
  
  ?>

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
            <li><a href="./">Inicio</a></li>
            <li><a href="quienes-somos">Quienes somos</a></li>
            <li class="active"><a href="<?= $urlnoticias; ?>">Proyectos desarrollados</a></li>
            <li><a href="<?= $urlnoticias; ?>">Noticias</a></li>
            <li><a href="contacto">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- final del navegador -->

<!-- inicio del slider -->

<div class="banner_qs">
  <div class="text-center container">
    <div class="d_bannerqs hidden-xs hidden-sm hidden-md hidden-lg">
      <!--<h1>Nuestro equipo de trabajo</h1>
      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>-->
      <h2><span>ERROR AL ENVIADA LA CONSULTA</span></h2>
      <p class="hidden-xs">No olvide que solo puede enviar 10 consultas diarias, tambien nos puede contactar al mail: <?= $correo; ?> y al teléfono <?= $telefono; ?></p
    ></div>
    <figure>
      <img src="imagenes/qs/banner_qs.jpg" alt="not1">
    </figure>
  </div>
</div>

  <!-- fin del slider -->

<div class="detalle">
  <div class="container">

    <div class="uno col-xs-12 col-md-8 col-sm-8">
      <figure class="foto">
        <img src="imagenes/detalle-proyecto/imagen_p.jpg" alt="detalle">
      </figure>
    </div>

    <div class="dos col-xs-12 col-md-4 col-sm-4">
      <div class="infod">
        <h4>FECHA DEL PROYECTO</h4>
        <h2>Nombre del cliente</h2>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
      </div>
    </div>

    <div class="descripcion col-xs-12">
      <h4>Descripción del peoyecto</h4>
      <h3>"Que se trabajo e implemento en el proyecto"</h3>
      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el añoorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias deLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500. Lorem Ipsum ha sido el texto de r de las industrias desde el año 1500.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.<br><br>De relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500. Lorem Ipsum ha sido el texto de r de las industrias desde el año 1500.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
    <div class="boton_v">
      <div class="interior">
        <a class="sub" href="proyectos">Volver a proyectos</a>
      </div>
    </div>

  </div>

  </div>
</div>

<div class="text-center container col-xs-12 col-md-3 col-sm-3 direccion">
    <div class="info">
      <h2 class="hidden-xs">Accede a nuestros proyectos</h2>
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
      <p>Todos los derechos reservados a “SIMPLEX INGENIERIA”<br>
        Correo: <?= $correo ?> - Fono: <?= $telefono ?><br>
        Dirección: <?= $direccion ?>
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
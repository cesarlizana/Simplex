<?php
include("Conexion.php");  
  
  $listado = "select * from proyectos";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){  
    $titulo_proyecto = $rs["titulo_proyecto"];            
  }  
  ?>

<!doctype html>
<html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Noticias</title>
<meta name="description" content="Este texto se debe modificar">
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
            <li><a href="proyectos">Proyectos desarrollados</a></li>
            <li class="active"><a href="<?= $urlnoticias; ?>">Noticias</a></li>
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
      <h1>Nuestro equipo de trabajo</h1>
      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
    </div>
    <figure>
      <img src="imagenes/qs/banner_qs.jpg" alt="not1">
    </figure>
  </div>
</div>

  <!-- fin del slider -->

<!-- inicio noticias -->

<div class="text-center noticias col-xs-12">
<div class="container">

    <div class="noticia1 col-xs-12">
      <div class="imagen_n col-sm-12 col-md-8">
        <figure>
          <img src="imagenes/noticias/noticia1.jpg" alt="not1">
        </figure>
      </div>
      <div class="info_n col-sm-12 col-md-4">
        <h5>FECHA DE LA NOTICIA</h5>
        <h2>Titulo de la noticia</h2>
        <p>"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno"</p>
        <div class="detim">
          <a class="den" href="detalle-noticia.php">Ver detalle</a>
        </div>
      </div>
    </div>

</div>
</div>

<!-- final noticias -->

<article class="noticia_mr">
  <div class="text-center container">

    <div class="no_pe col-xs-12 col-md-4 col-sm-4">
      <div class="no_pe2">
        <figure>
          <img src="imagenes/noticias/noticia2.jpg" alt="not1">
        </figure>
        <h5>FECHA DE LA NOTICIA</h5>
          <h2>Titulo de la noticia</h2>
          <p>"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno"</p>
          <div class="col_det">
          <a class="den" href="detalle-noticia.php">Ver detalle</a>
        </div>
      </div>
    </div>

    <div class="no_pe col-xs-12 col-md-4 col-sm-4">
      <div class="no_pe2">
        <figure>
          <img src="imagenes/noticias/noticia3.jpg" alt="not1">
        </figure>
        <h5>FECHA DE LA NOTICIA</h5>
        <h2>Titulo de la noticia</h2>
        <p>"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno"</p>
        <div class="col_det">
          <a class="den" href="detalle-noticia.php">Ver detalle</a>
        </div>
      </div>
    </div>

    <div class="no_pe col-xs-12 col-md-4 col-sm-4">
      <div class="no_pe2">
        <figure>
          <img src="imagenes/noticias/noticia4.jpg" alt="not1">
        </figure>
        <h5>FECHA DE LA NOTICIA</h5>
          <h2>Titulo de la noticia</h2>
          <p>"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno"</p>
        <div class="col_det">
          <a class="den" href="detalle-noticia.php">Ver detalle</a>
        </div>
      </div>
    </div>

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
      <p>Todos los derechos reservados a “SIMPLEX INGENIERIA”<br>
        Correo:<?= $correo ?> - Fono: <?= $telefono ?><br>
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

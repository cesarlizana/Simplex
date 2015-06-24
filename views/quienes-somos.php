<?php include("Conexion.php"); ?>

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
 <?php

  $listado = "select * from quienessomos";
  $sentencia = mysql_query($listado,$conn);
  if($rs=mysql_fetch_array($sentencia,$mibase)){
    $texto1 = $rs["texto1"];
    $texto2 = $rs["texto2"];  
    $contenido1 = str_replace("\r\n","<br>",$rs["contenido1"]);
    $contenido2 = str_replace("\r\n","<br>",$rs["contenido2"]);
    $contenido3 = str_replace("\r\n","<br>",$rs["contenido3"]);  
  }
  ?>
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
            <li class="active"><a href="quienes-somos">Quienes somos</a></li>
            <li><a href="proyectos">Proyectos desarrollados</a></li>
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
     
    </div>
    <figure>
      <img src="imagenes/qs/banner_qs.jpg" alt="not1">
    </figure>
  </div>
</div>

  <!-- fin del slider -->

  <!-- inicio filosofia de la empresa -->
<div class="filosofia">
  <div class="container">

    <div class="text-center col-xs-12 col-md-12 col-sm-12 titulo_fil">
      <h1><?= $texto1 ?></h1>
      <h3><?= $texto2 ?></h3>
    </div>

    <div class="mivi col-xs-12">
      <div class="mision col-md-6 col-sm-6">
        <p><?= $contenido1 ?></p>
      </div>
      <div class="vision col-md-6 col-sm-6">
        <p><?= $contenido2 ?></p>
      </div>
    </div>

    <div class="text-center col-xs-12 col-md-12 col-sm-12 frase">
      <p><?= $contenido3 ?></p>
    </div>

  </div>
</div>
  <!-- inicio filosofia de la empresa -->

  <!-- inicio equipo de trabajo -->
<article class="equipo">
  <div class="text-center container">
<?php
  $listado = "select * from equipodetrabajo";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
    <div class="integrante col-xs-12 col-md-3 col-sm-3">
      <figure>
        <img src="imagenes/qs/itegrante/<?= $rs["id"]; ?>.jpg" alt="<?= $rs["nombre"]; ?>">
      </figure>
      <h3><?= $rs["nombre"]; ?></h3>
      <p><?= $rs["descripcion"]; ?></p>
    </div>
<?php } ?>
    
    
  </div>
</article>
  <!-- inicio equipo de trabajo -->

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
        Correo: <?= $correo ?> - Fono: <?= $fono ?><br>
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

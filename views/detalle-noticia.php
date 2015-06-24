<?php
include("Conexion.php");  
$host= $_SERVER["HTTP_HOST"];
$urlvalida= $_SERVER["REQUEST_URI"];
$urlvalida = substr($urlvalida, 1);
$listadonoticias = "select * from noticias where url ='$urlvalida' ";
$sentenciasnoticias = mysql_query($listadonoticias,$conn);
if($rssnoti=mysql_fetch_array($sentenciasnoticias,$mibase)){
	$id = $rssnoti["id"];
	$titulo_noticia = $rssnoti["titulo_noticia"];
	$breve_noticia = str_replace("\r\n","<br>",$rssnoti["breve_noticia"]);
	$completo_noticia = str_replace("\r\n","<br>",$rssnoti["completo_noticia"]);
}
  ?>

<!doctype html>
<html>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?= $titulo_noticia; ?></title>
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
            <li class="active"><a href="<?= $urlnoticias;?>">Noticias</a></li>
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

<!-- inicio noticias -->

<article class="deta_no">
  <div class="text-center container col-xs-12 col-sm-9 col-ms-9 col-lg-9" style="padding-bottom:35px">
        <div class="titulo_deta col-xs-12">
          <h2><?= $titulo_noticia; ?></h2>
        </div>
        <div class="con_deta col-xs-12 col-md-3 col-sm-3">
          <div class="no_pe2">
            <figure>
              <img src="imagenes/noticias/<?= $id; ?>.jpg" alt="not1">
            </figure>
          </div>
        </div>
        <div class="info_deta col-xs-12 col-md-9 col-sm-9">
          <p><?= $completo_noticia; ?></p>
        </div>

  </div>
  <nav class="text-center container col-xs-12 col-sm-3 col-ms-3 col-lg-3">
  <ul>
  	<li style="text-align:center; border:#06F solid 1px;">NOVEDADES</li>
    <?php
    $listadonoticias = "select * from noticias order by id desc";
	$sentenciasnoticias = mysql_query($listadonoticias,$conn);
	while($rssnoti=mysql_fetch_array($sentenciasnoticias,$mibase)){
	?>
    <li style="text-align:center; border:#06F solid 1px;"><a href="<?= $rssnoti["url"] ?>"><?= $rssnoti["titulo_noticia"] ?></a></li>
    <?php } ?>
  </ul>
  </nav>
</article>

<!-- final noticias -->

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
        Correo: <?= $correo?> - Fono: <?= $fono; ?><br>
        Dirección: <?= $direccion ?>
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

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
            <li class="active"><a href="proyectos">Proyectos desarrollados</a></li>
            <li><a href="<?= $urlnoticias;?>">Noticias</a></li>
            <li><a href="contacto">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- final del navegador -->

<!-- inicio del slider -->

<div class="banner_qs">
  <div class="text-center container">
    <figure>
      <img src="imagenes/qs/banner_qs.jpg" alt="not1">
    </figure>
  </div>
</div>

  <!-- fin del slider -->

<div class="row pro_titulo">
  <div class="container">
    <div class="text-center col-xs-12 col-md-12 col-sm-12 titulo_pro">
      <h1><?=$titulo1 ?></h1>
      <h3><?=$titulo2 ?></h3>
      <p><?=$contenido ?></p>
    </div>
  </div>
</div>

  <!-- inicio proyectos -->
  <div class="text-center pro">
      <div class="text-center container content">
        <div class="grid">
		<?php
        $listadonoticias = "select * from catalogo";
        $sentenciasnoticias = mysql_query($listadonoticias,$conn);
        while($rssnoti=mysql_fetch_array($sentenciasnoticias,$mibase)){
        ?>
        <div class="contenedores no_pe col-xs-12 col-md-4 col-sm-4">
          <figure class="effect-lily">
            <img src="imagenes/noticias/noticia2.jpg" alt="img12"/>
            <figcaption>
              <div>
                <h2><?= $rssnoti["Nombre"]; ?></h2>
                <p><?= $rssnoti["Servicios"]; ?></p>
              </div>
              <a href="<?= $rssnoti["url"]; ?>">Ver más</a>
            </figcaption>   
          </figure>
        </div>
		<?php } ?>

        </div>
      </div>
  </div>

  <!-- inicio proyectos -->

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

<script>
      // For Demo purposes only (show hover effect on mobile devices)
      [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
        el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
      } );
    </script>


<script src="js/jquery.js"></script>
<script src = "js/bootstrap.min.js" > </script>
</body>

</html>

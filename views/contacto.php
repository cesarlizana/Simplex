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
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe ser dirección de correo.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es obligatorio.\n'; }
    } if (errors) alert('Existen los siguientes errores:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
  </script>
  
<script language="javascript" src="js/jquery-1.3.min.js"></script>
<script language="javascript">
$(document).ready(function() {
   // Mostramos el loader
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
   // Enviamos el formulario
    $('#myform').submit(function() {
   // Definimos el metodo ajax, los datos
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                // Imprimimos la respuesta en el div result
                $('#result').html(data);

            }
        })
        
        return false;
    }); 
})  
</script>
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
            <li><a href="<?= $urlnoticias; ?>">Noticias</a></li>
            <li class="active"><a href="contacto">Contacto</a></li>
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

<div class="cont_simp">
  <div class="container">

    <div class="contactanos">
      <div class="container">
        <div class="text-center titulo">
          <h1>CONTACTO</h1>
          
        </div>
      </div> 
    </div> 

      <form action="envio" method="post" onsubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','consulta','','R');return document.MM_returnValue;return document.MM_returnValue">

          <div class="col-xs-12">
            <input name="Nombre" type="text" class="input col-xs-12" id="Nombre" placeholder="Nombre">
          </div>
          <div class="col-xs-12">
            <input name="Telefono" type="text" class="input col-xs-12" id="Telefono" placeholder="Telefono">
          </div>
          <div class="col-xs-12">
            <input name="Mail" type="text" class="input col-xs-12" id="Mail" placeholder="E-mail">
          </div>
          <div class="col-xs-12">
            <textarea name="Mensaje" id="consulta" class="mensaje col-xs-12" placeholder="Mensaje"></textarea>
          </div>
                
          <div class="cont-enviar col-xs-12">
           <input class="enviar col-xs-12" name="Enviar" type="submit" value="ENVIAR">
          </div>
      </form>
        
  </div>
</div>

<!-- final formulario -->

<div class="text-center container col-xs-12 direccion">
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
        Correo: <?=$correo ?> - Fono: <?=$fono?><br>
        Dirección: <?=$direccion?>
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

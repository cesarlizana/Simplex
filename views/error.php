<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>escort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
 
<body>
  <header>
    <div class="superior">
      <figure class="logotipo">
          <img src="imagenes/logotipo.png">
      </figure>
      <div class="container">
        <div class="menu-wrap">
          <nav class="menu">
            <div class="icon-list">
              <a class="activo" href="./"><span>INICIO</span></a>
              <a href="catalogo"><span>CATALOGO</span></a>
              <a href="<?= $urlnoticias; ?>"><span>NOVEDADES</span></a>
              <a href="contacto"><span>CONTACTO</span></a>
              <a href="usuario"><span>USUARIO</span></a>
            </div>
          </nav>
          <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <button class="menu-button" id="open-button">Open Menu</button>
      </div><!-- /container -->
    </div>
  </header>

  <article class="contenedor">
  <!-- inicio slide -->
    <div id="carousel-example-generic" class="carousel slide slider" data-ride="carousel">
      <div class="col-xs-12 slide">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>    
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="imagenes/slide/1.jpg" alt="scort">
            <div class=" carousel-caption info">
              <h2 class="hidden-xs"><span>ERROR 404</span> </h2>
              <p class="hidden-xs">La página que busca no existe o ya no esta disponible.
              </p>
              <a class="hidden-xs" href="#">VER MÁS</a>
            </div>
          </div> 

          <div class="item">
            <img src="imagenes/slide/1.jpg" alt="scort">
            <div class="carousel-caption info">
              <h2 class="hidden-xs"><span>LOREM IPSUM</span> DOLOR SIT AM!</h2>
                <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                <p>
                <a class="hidden-xs" href="#">VER MÁS</a>
            </div>
          </div>

          <div class="item">
            <img src="imagenes/slide/1.jpg" alt="scort">
            <div class="carousel-caption info">
              <h2 class="hidden-xs"><span>LOREM IPSUM</span> DOLOR SIT AM!</h2>
              <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
              dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
              </p>
              <a class="hidden-xs" href="#">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- fin slide -->
    <div class="col-xs-12 titulo">
      <div class="col-xs-12 cont-titulo">
        <h1><span>Lorem ipsum dolor</span> sit amet consectetuer adipiscing elit!</h1>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3 publicidad">

      <div class="col-xs-12 publicar">
        <div class="info" style="background: url(imagenes/publicar/1.jpg) no-repeat center;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
          <div class="info-int">
            <h3>TITULO 1</h3>
            <p>psum dolor sit amet, consectetuer ing elit
            </p>
            <a href="#">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-xs-12 publicar">
        <div class="info" style="background: url(imagenes/publicar/2.jpg) no-repeat center;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
          <div class="info-int">
            <h3>TITULO 2</h3>
            <p>psum dolor sit amet, consectetuer ing elit
            </p>
            <a href="#">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-xs-12 publicar">
        <div class="info" style="background: url(imagenes/publicar/3.jpg) no-repeat center;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
          <div class="info-int">
            <h3>TITULO 3</h3>
            <p>psum dolor sit amet, consectetuer ing elit.
            </p>
            <a href="#">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-xs-12 publicar">
        <div class="info" style="background: url(imagenes/publicar/4.jpg) no-repeat center;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
          <div class="info-int">
            <h3>TITULO 4</h3>
            <p>psum dolor sit amet, consectetuer ing elit.
            </p>
            <a href="#">VER MÁS</a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xs-12 col-sm-8 col-md-9 destacados">

      <div class="col-xs-12 col-md-6 destacado">
        <div class="col-xs-12 destacado-int">
          <div class="info" style="background: url(imagenes/destacados/1.jpg) no-repeat left;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
            <div class="info-int">
              <h3><span>LOREM IPSUM</span> DOLOR SIT A</h3>
              <p>psum dolor sit amet, consectetuer
                ing elit, sed diam nonummy.
              </p>
              <a href="#">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xs-12 col-md-6 destacado">
        <div class="col-xs-12 destacado-int">
          <div class="info" style="background: url(imagenes/destacados/2.jpg) no-repeat left;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
            <div class="info-int">
              <h3><span>LOREM IPSUM</span> DOLOR SIT A</h3>
              <p>psum dolor sit amet, consectetuer
                ing elit, sed diam nonummy.
              </p>
              <a href="#">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 destacado">
        <div class="col-xs-12 destacado-int">
          <div class="info" style="background: url(imagenes/destacados/3.jpg) no-repeat left;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
            <div class="info-int">
              <h3><span>LOREM IPSUM</span> DOLOR SIT A</h3>
              <p>psum dolor sit amet, consectetuer
                ing elit, sed diam nonummy.
              </p>
              <a href="#">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 destacado">
        <div class="col-xs-12 destacado-int">
          <div class="info" style="background: url(imagenes/destacados/4.jpg) no-repeat left;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
            <div class="info-int">
              <h3><span>LOREM IPSUM</span> DOLOR SIT A</h3>
              <p>psum dolor sit amet, consectetuer
                ing elit, sed diam nonummy.
              </p>
              <a href="#">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 destacado2">
        <div class="col-xs-12 destacado-int">
          <div class="info" style="background: url(imagenes/destacado/1.jpg) no-repeat center;
              -webkit-background-size: cover; -moz-background-size: cover;
              -o-background-size: cover; background-size: cover; padding: 15px;">
            <div class="info-int">
              <h3><span>LOREM IPSUM</span><br> DOLOR SIT A</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit, sed diam nonummy
                nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat.
              </p>
              <a href="#">VER MÁS</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </article>

  <footer class="col-xs-12">
    <div class="row footer">
        <div class="col-xs-12 col-md-4 logo">
          <div class="info-logo pull-left">
            <img src="imagenes/logopie.png">
          </div>
        </div>
        <div class="col-xs-12 col-md-4 texto">
          <div class="info-logo pull-center">
            <p>Todos los derechos reservados a "Nombre Empresa"</p>
          </div>
        </div>
        <div class="col-xs-12 col-md-4 sociales">
          <div class="info-sociales pull-right">
            <a href="#" target="new"><img src="imagenes/sociales/face.png"></a>
            <a href="#" target="new"><img src="imagenes/sociales/twit.png"></a>
            <a href="#" target="new"><img src="imagenes/sociales/goo.png"></a>
            <a href="#" target="new"><img src="imagenes/sociales/you.png"></a>
          </div>
        </div>
    </div>
  </footer>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"> </script>

  <!-- menu responsive -->
  <script src="js/classie.js"></script>
  <script src="js/main.js"></script>
  <!-- fin menu responsive -->
</body>
</html>
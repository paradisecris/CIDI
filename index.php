<html lang="es">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!--Optimizado para dispositov mov en el navegador-->
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <!--Esta optimizado para iphone, ipad e ipod-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!--favicon-->
    <link  rel="icon" href="img/icon.png" type="image/png" />
    <!--Icono-->	
    <link rel="shorcut icon" type="img\png" href="img\logo.jpg">
    <!--Se instala el icono en los dispositivos-->
    <link rel="apple-touch-icon" href="./logo.png">
    <!--Se cargara el logo en la pantalla principal-->
    <link rel="apple-touch-startup-image" href="img\logo.jpg">
    <link rel="manifest" href="./manifest.json">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<title>CIDI APP</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                 <a href="index.php"><img src="img/logo_barra.jpg" width="150" height="56" class="d-inline-block align-top" alt=""> </a>
                  <!--Empieza codigo de la barra de navegacion-->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                      <li class="nav-item active"><a class="nav-link" href="sesion.php">Iniciar Sesion<span class="sr-only">(current)</span></a></li>
                      <li class="nav-item active"><a class="nav-link" href="login.php">Registrarse<span class="sr-only">(current)</span></a></li>
                      </ul>
                       
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                </nav>
            </div>
        </div>
  
  
  

 
   
<!--termina el codigo de la barra de navegacion -->   
  </header>
<!--Empieza el codigo del jumbotron que contendra el carrusel de imagenes-->
	<div><br></br></div>
<div style="background-image:url(img/upper_container.jpg);" class="jumbotron jumbotron-center">
  <div class="container">
   <!--CARRUSEL-->
<div align="center" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!--Opcines del carrusel tamaño,locacion de imagens etc-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Carrusel1.jpg"  width="500" height="320" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Carrusel2.jpg" width="500" height="320" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Carrusel3.jpg"width="500" height="320" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<!-- Inicio de segundo jumbotron -->
 <div style="background-image:url(img/container_index.jpg);background-size:100%; " class="jumbotron jumbotron-fluid-center ">
  <div class="container">
  	<!--Se creara el contenedor de opciones -->
    <div class="card-deck" id="prod">
      <div class="card text-center bg-dark mb-3" style="width: 10Srem; ">
      <img class="card-img-top" src="img\card_reporte.png" alt="Chicos" height="240" width="100">
      <div class="card-body">
        <a href="reporte.php"><button type="button" class="btn btn-outline-danger btn-lg" value="Seccion reportes">Denunciar</button></a>
      </div>
     </div>

     <div class="card text-center bg-dark mb-3" style="width: 10Srem;">
      <img class="card-img-top" src="img\card_donar.jpg" alt="Chicos" height="240" width="120">
      <div class="card-body">
        <button type="button" class="btn btn-outline-warning btn-lg">Donar</button>
      </div>
     </div>
     
     <div class="card text-center bg-dark mb-3" style="width: 10Srem;">
      <img class="card-img-top" src="img\card_preguntas.jpg" alt="Chicos" height="240" width="120">
      <div class="card-body">
          <button type="button" class="btn btn-outline-primary btn-lg">Preguntanos</button>

  </div>
</div>
</div>
  </div>
  </div>








<!--Empiezan scripts-->
	<script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="./script.js"></script>
	<script src="./sw.js"></script>

   
</body>
</html>
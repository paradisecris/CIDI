<html lang="es">
<?php
session_start();
  if (@!$_SESSION['user']) {
    header("Location:documentos.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
?>
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
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                  <a class="nav-link" aria-current="page" href="#">Active<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Manual<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Denuncia<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Videoteca<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Talleres<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Directorio<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Encuesta<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                  <a class="nav-link" href="#">Revista<span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                <a class="nav-link" href="#">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a>
                               </li>
                               <li class="nav-item active">
                                   <a  class="nav-link" href="desconectar.php"> Cerrar Cesión </a>
                               </li>
                            </ul>
                          </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                            </button>
                      </nav>
                  </div>
              </div> 
       </header>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
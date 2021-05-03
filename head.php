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
    <!--Icono-->	
    <link rel="shorcut icon" type="img\png" href="img\logo.png">
    <!--Se instala el icono en los dispositivos-->
    <link rel="apple-touch-icon" href="./logo.png">
    <!--Se cargara el logo en la pantalla principal-->
    <link rel="apple-touch-startup-image" href="img\logo.png">
    <link rel="manifest" href="./manifest.json">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<title>Qsin/prototipo</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-warning">
         <img src="img/logo.png" width="35" height="35" class="d-inline-block align-top" alt=""> Qsin Gourmet
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
  </ul>
  <ul>
    <li><a href=""></i>Bienvenido <?php echo $_SESSION['nombre'];?></a></li>
        <li><a href="desconectar.php"> Cerrar Sesión </a></li>
  </ul>
  <ul class="nav pull-right">
    <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
        <li><a href="desconectar.php"> Cerrar Cesión </a></li>       
    </ul>

                   
    </header>

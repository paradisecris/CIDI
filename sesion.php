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
    <link rel="shorcut icon" type="img\png" href="img\logo.png">
    <!--Se instala el icono en los dispositivos-->
    <link rel="apple-touch-icon" href="./p1.png">
    <!--Se cargara el logo en la pantalla principal-->
    <link rel="apple-touch-startup-image" href="img\logo.png">
    <link rel="manifest" href="./manifest.json">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<title>Inicio de Sesion</title></head>
<body >
	 <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a href="index.php"><img src="img/logo_barra.jpg" width="150" height="56" class="d-inline-block align-top" alt=""> </a>
           
                 </nav>
            </div>
        </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--termina el codigo de la barra de navegacion -->   
  </header>

 
  <div class="jumbotron jumbotron-fluid bg-error mb-3" style="background-color:grey;">
    <div class="container">
          <form action="validar.php" method="post">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
              <div class="col-sm-10">
                <input type="email" name="mail" class="form-control" id="inputEmail3"  maxlength="30"  placeholder="Correo">
              </div>
          </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                  <div class="col-sm-10">
                    <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Contraseña">
                  </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-dark">Iniciar Sesion</button>
                </div>
            </div>
        </form>
   </div>
  </div>


<script src="js/teclas.js"></script>
    <!--<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>-->
    </body>
</html>
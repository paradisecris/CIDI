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
    <link rel="apple-touch-icon" href="./p1.png">
    <!--Se cargara el logo en la pantalla principal-->
    <link rel="apple-touch-startup-image" href="img\logo.png">
    <link rel="manifest" href="./manifest.json">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<title>Registrarse</title></head>
<body >
	<header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
             <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a href="index.php"> <img src="img/logo.jpg" width="200" height="50" class="d-inline-block align-top" alt=""> </a>
  			
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 			
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

   
   
         </div>
         
    </nav>
</div>
</div>

    </header>
   	
<div class="jumbotron jumbotron-fluid bg-error mb-3">
  <div class="container">
	<form method="POST" action="registro.php">
  <div class="form-row">
  	
  	<div class="form-group col-md-6">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" name="realname" maxlength="30" onkeypress="return check(event)" required placeholder="Nombre">

    </div>
    <div class="form-group col-md-6">
      <label for="inputGender">Genero</label>
      <input type="text" class="form-control" id="inputGender" name="gender" maxlength="30" onkeypress="return check(event)" required placeholder="Genero">

    </div>
    <div class="form-group col-md-6">
      <label for="inputOcupacion">Ocupacion</label>
      <input type="text" class="form-control" id="inputOcupacion" name="ocupacion" maxlength="30" onkeypress="return check(event)" required placeholder="Ocupacion">
    </div>
    <div class="form-group col-md-6">
      <label for="inputTelefono">Telefono</label>
      <input type="number" class="form-control" id="inputTelefono" name="telefono" maxlength="15"  required placeholder="Telefono">

    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="nick" name="nick" required maxlength="30" placeholder="Correo" >

    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="pass" name="pass" required minlength="8" placeholder="Contraseña">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Repetir Contraseña</label>
      <input type="password" class="form-control" id="rpass" name="rpass" required minlength="8" placeholder="Repetir">
    </div>
      <div class="form-group col-md-6">
      <label for="inputEstado">Estado</label>
      <input type="text" class="form-control" id="inputEstado" name="estado" maxlength="20" onkeypress="return check(event)" required placeholder="Estado">
    </div>
    <div class="form-group col-md-6">
      <br><label for="inputNewsletter"><input type="checkbox" id="newsletter" name="newsletter" value="1"> Recibir nuestro newsletter</label>
    </div>
  </div>
  <!-- <div class="form-group">
   <div class="g-recaptcha" data-sitekey="6LdRbtgUAAAAADY_eJQwBXHSY25YJ9-BYaoTLE6M"></div>
  </div>-->
  <button type="submit" name="submit" class="btn btn-outline-dark">Registrar</button>
</form>
</div>
</div>


	<script>function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {-->
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
	}</script>

	

	
<!--<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>-->
</body>
</html>
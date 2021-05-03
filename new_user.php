<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CIDI Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="El Consejo">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
  <?php
  include("include/cabecera.php");
  ?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
  <div class="container">
    <div class="nav-collapse">
    <ul class="nav">
      <li class=""><a href="admin.php">ADMINISTRADOR DE SITIO</a></li>
       
  
    </ul>
    <form action="#" class="navbar-search form-inline" style="margin-top:6px">
    
    </form>
    <ul class="nav pull-right">
    <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
        <li><a href="desconectar.php"> Cerrar Cesión </a></li>       
    </ul>
    </div><!-- /.nav-collapse -->
  </div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
  
  
    
  <div class="span12">

    <div class="caption">
    
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
    <h2> Administración de archivos</h2>  
    <div class="well well-small">
    <hr class="soft"/>
    <h4>Edición de archivo</h4>
    <div class="row-fluid">
<body> 
    <form method="POST" action="registro2.php">
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
  
  </div>
  <!-- <div class="form-group">
   <div class="g-recaptcha" data-sitekey="6LdRbtgUAAAAADY_eJQwBXHSY25YJ9-BYaoTLE6M"></div>
  </div>-->
  <button type="submit" name="submit" class="btn btn-outline-dark">Registrar</button>
</form>

    <div class="span8">
    
    </div>  
    </div>  
    <br/>
    


    <!--EMPIEZA DESLIZABLE-->
    
     <!--TERMINA DESLIZABLE-->



    
    
    </div>

    


    

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

  </div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>

 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
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
  </style>
  </body>
</html>

  

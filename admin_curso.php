<!DOCTYPE html>
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
    <title>CIDI Cursos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="El Consejo">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body data-offset="40" background="images/Logo1.png" style="background-attachment: fixed">
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
			<li class=""><a href="admin_curso.php">ADMINISTRADOR DE PROFESORES</a></li>
			 
	
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
		
		
		<hr class="soft"/>
		<h4>Unidades del curso</h4>
		<ul class="nav pull-right">
		</ul>
		<div class="row-fluid">
		
		<div class="card" style="width: 18rem;">
          <img src="img/curso.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Unidad 0</h5>
            <p class="card-text">Sesión de inducción</p>
            <a href="#" class="btn btn-primary">Calificar</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/curso.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Unidad 1</h5>
            <p class="card-text">Género, Sexo y Orientación e Identidad</p>
            <a href="#" class="btn btn-primary">Calificar</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/curso.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Unidad 2</h5>
            <p class="card-text">Las distintas fobias en entorno a la población LGBTTTI+. "Identifiquemos ¿cómo afectan
        en las escuelas?</p>
            <a href="#" class="btn btn-primary">Calificar</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/curso.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Unidad 3</h5>
            <p class="card-text">El bullying, las escuelas, las y los docentes y los derechos humanos.</p>
            <a href="#" class="btn btn-primary">Calificar</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/curso.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Unidad 4</h5>
            <p class="card-text">¿Cómo actuar?, herramientas para crear un plan de acción en el aula y que
        aliados contamos</p>
            <a href="#" class="btn btn-primary">Calificar</a>
          </div>
        </div>



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
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	</style>
  </body>
</html>
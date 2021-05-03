<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}elseif ($_SESSION['rol']==2) {
	header("Location:menu.php");
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
            <li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
             
    
        </ul>
        <form action="#" class="navbar-search form-inline" style="margin-top:6px">
        
        </form>
        <ul class="nav pull-right">
            <li><a href="admin_files.php">Administrador de archivos</a></li>
            <li><a href="admin_reportes.php">Reportes</a></li>
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
		<h4>Tabla de archivos</h4>
        
		<ul class="nav pull-right">
		<a href="new_document.php"><button type="button" class="btn btn-success">Agregar +</button></a>
		</ul>
		<div class="row-fluid">
		
		<form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="search" class="form-inline" id="buscar" placeholder="Buscar por nombre" >
                </div>
                <button type="button" class="btn btn-info mb-2" onclick="buscararchivos($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">Buscar</button>
                <button type="button" class="btn btn-danger mb-2" onclick="history.go(0)" >X</button>
        </form>
            <div id="listado">
                <?php include 'listado.php'; ?>
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
    <script>
            function buscararchivos(cr, pa, re) {
                url = 'listado.php';
                data = {cr: cr, pa: pa, re: re};
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function (r) {
                        $('#listado').html(r);
                    }
                });
            }
        </script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	</style>
  </body>
</html>
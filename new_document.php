<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}

if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
      // creamos las variables para subir a la db
         
        if ($_FILES['fichero']['error']>0)
        {
          echo '<script>alert("Error en la carga de archivo")</script> ';
    
        }
        else {

              $permitidos= array("image/gif","image/jpg","image/png","application/pdf","video/mp4");
              $limite_kb = 15000;


                if(in_array($_FILES['fichero']['type'], $permitidos) && $_FILES['fichero']['size'] <= $limite_kb*1024)
                  {
                            $ruta = "Archivos/"; 
                            $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
                            $nombrefinal= str_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                            $nombrefinal= strtolower ($nombrefinal);//Por si se necesita indexar
                            $upload= $ruta . $nombrefinal; 
                            if (!file_exists($upload))
                            {
                                  if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                                            
                                            echo "<script>alert<b>Carga exitosa!. Datos:</b></script><br>
                                                  Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>
                                                  Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>
                                                  Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>
                                                  <br><hr><br>";  
                                            echo "<script>location.href='admin_files.php'</script>";
                                            
                                                 


                                           $nombre  = $_POST["nombre"]; 
                                           $description  = $_POST["description"]; 

                                           require("connect_db.php");
                                           $query = "INSERT INTO archivos (created_at,id_status,name,description,ruta,tipo,size) VALUES (current_timestamp,1,'$nombre','$description','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 

                                             mysqli_query($mysqli,$query) or die(mysqli_error()); 
                                             echo "El archivo '".$nombre."' se ha subido con éxito <br>";       
                                             }
                            }else{
                                 echo '<script>alert("El archivo ya existe!")</script> ';
    

                                  }

                  } else {
                           echo '<script>alert("Archivo no permitido o excede el limite de tamaño")</script> ';
    
                          }
        }  
    }  
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
      <li class=""><a href="admin_files.php">ADMINISTRADOR DE ARCHIVOS</a></li>
       
  
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
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  <!--//agregar tooltips-->
    Seleccione archivo: <input name="fichero" type="file" size="150" maxlength="150">  <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Maximo 15 Mb">
  ?
</button>
    <br><br> Nombre: <input name="nombre" type="text" size="70" maxlength="70"> <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Maximo 70 caracteres">
  ?
</button>
    <br><br> Descripcion: <input name="description" type="text" size="100" maxlength="250"> <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Maximo 250 caracteres">
  ?
</button>
    <br><br> 
  <input name="submit" type="submit" value="Subir" class="btn btn-success btn-primary">
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
  </style>
  </body>
</html>

  

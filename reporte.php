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
<title>Reportar</title></head>
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
				<form method="POST" action="reportar.php">
			   		<div class="form-row">
			  	
			  		<div class="form-group col-md-6">
			        <label for="inputNombre">Nombre</label>
			        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" onkeypress="return check(event)" required placeholder="Nombre o seudonimo">
			    	</div>
                    <div class="form-group col-md-6">
                    <label for="inputEdad">Edad</label>
                    <input type="number" class="form-control" id="nombre" name="edad" maxlength="3" placeholder="Edad">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputGenero">Identidad Genero</label>
                    <input type="text" class="form-control" id="gender" name="gender" maxlength="50" placeholder="Identidad de genero">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputAcademico">Grado academico</label>
                    <select name="academico" class="form-control">
                      <option value="Primaria">Primaria</option>
                      <option value="Secundaria">Secundaria</option>
                      <option value="Preparatoria" selected>Preparatoria</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
			        <label for="inputEmail4">Email</label>
			         <input type="email" class="form-control" id="correo" name="correo" required maxlength="30" placeholder="Correo para contacto" >
			    	</div>
			     	<div class="form-group col-md-6">
			        <label for="inputPhone">Telefono</label>
			        <input type="number" class="form-control" id="telefono" name="telefono" required minlength="10" placeholder="Telefono para contacto" >
			        </div>
                    <div class="form-group col-md-6">
                    <label for="inputEstado">Estado</label>
                     <input type="text" class="form-control" id="estado" name="estado" required maxlength="30" placeholder="Estado" >
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEscuela">Escuela</label>
                     <input type="text" class="form-control" id="escuela" name="escuela" required maxlength="30" placeholder="Escuela" >
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputActor">Actor</label>
                    <select name="actor" class="form-control">
                      <option value="Estudiante" selected>Estudiante</option>
                      <option value="Administrativo">Administrativo</option>
                      <option value="Docente">Docente</option>
                       <option value="Familiar">Familiar</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputTipo_acoso">Tipo de acoso</label>
                    <select name="tipo_acoso" class="form-control">
                      <option value="Fisica" selected>Fisica</option>
                      <option value="Psicologica">Psicologica</option>
                      <option value="Sexual">Sexual</option>
                      <option value="Acoso">Acoso</option>
                      <option value="Ciberacoso">Ciberacoso</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputArea_acoso">Lugar de acoso</label>
                    <select name="area_acoso" class="form-control">
                      <option value="Baño">Baño</option>
                      <option value="Salon de clases" selected>Salon de clases</option>
                      <option value="Patio">Patio</option>
                      <option value="Pasillos">Pasillos</option>
                      <option value="Talleres">Talleres</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputAcosador">¿Quien te molesta?</label>
                    <select name="acosador" class="form-control">
                      <option value="Escuela" selected>La escuela</option>
                      <option value="Directivos">Los directivo</option>
                      <option value="Profesor">Profesor/a</option>
                      <option value="Estudiantes de mi salon">Estudiantes de mi salon</option>
                      <option value="Estudiantes de otro salon">Estudiantes de otro salon</option>
                    </select>
                    </div>
			    	<div class="form-group col-md-6">
			        Cuentanos más aqui, esto nos ayudará a saber cómo atender tu denuncia
			        <textarea rows="5" cols="72" id="reporte" name="reporte" required minlength="5" maxlength="255" >Ingresa detalles de la denuncia (máximo 255 caracteres)</textarea>
			    	</div>
			  		
			  		</div>
			  <!-- <div class="form-group">
			   <div class="g-recaptcha" data-sitekey="6LdRbtgUAAAAADY_eJQwBXHSY25YJ9-BYaoTLE6M"></div>
			  </div>-->
			  		<button type="submit" name="submit" class="btn btn-outline-dark">Denunciar</button>

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
</body>
</html>
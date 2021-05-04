<?php
require("connect_db.php");
require("navbar.php");

?>
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
<title>Diagnostico 2</title></head>
<body >
  <br>
  <br>
  <br> 	
<div class="jumbotron jumbotron-fluid bg-error mb-3">
  <div class="container">
    <center><h1>DIAGNÓSTICO UNIDAD 2</h1></center><br>
	<form method="POST" action="examen2.php">
  <div class="form-group">
  	<input type="hidden" name="user" value=<?php echo $_SESSION['id']?>>
  	<div class="form-group col-md-6">
       <b><label for="pregunta1">¿Si en tus manos estuviera reformar el programa escolar en qué grado impartirías educación sexual?</label></b>
           <select name="pregunta1" class="form-control">
                      <option value="" selected></option>
                      <option value="Nivel preescolar">Nivel preescolar</option>
                      <option value="Nivel primaria">Nivel primaria</option>
                      <option value="Nivel secundaria">Nivel secundaria</option>
                      <option value="Otros">Otros</option>
           </select>
    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta2">¿Integras conceptos de educación sexual en tu práctica pedagógica?</label></b>
           <select name="pregunta2" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
           </select>
      <label for="pregunta3">Si respondiste que si a la pregunta anterior, ¿de qué manera  lo haces?</label>
      <input type="text" class="form-control" id="pregunta3" name="pregunta3" maxlength="150" required >
    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta4">¿Cómo divides los equipos de trabajo en el aula de clases?</label></b>
           <select name="pregunta4" class="form-control">
                      <option value="" selected></option>
                      <option value="Por genero">Por genero</option>
                      <option value="Por estatura">Por estatura</option>
                      <option value="Dejo que se reunan por afinidad">Dejo que se reunan por afinidad</option>
                      <option value="Otra">Otra</option>
           </select>
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta5">¿De acuerdo a tu experiencia cuales son los espacios donde  se sufren  violencia?</label></b>
           <select name="pregunta5" class="form-control">
                      <option value="" selected></option>
                      <option value="Baño">Baño</option>
                      <option value="Aula">Aula</option>
                      <option value="Espacio recreativo">Espacio recreativo</option>
                      <option value="Todas las anteriores">Todas las anteriores</option>
           </select>
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta6">¿Has preciado acoso por homo, lesbo y transfóbico y que acciones las pudiste identificar? </label></b>
           <select name="pregunta6" class="form-control">
                      <option value="" selected></option>
                      <option value="Fisica">Fisica</option>
                      <option value="Verbal">Verbal</option>
                      <option value="Psicológica">Psicológica</option>
           </select>
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta7">¿Cómo eliminarías las fobias en tu salón de clases?</label></b>
      <input type="text" class="form-control" id="pregunta7" name="pregunta7" maxlength="150" required >
      </div>
      <div class="form-group col-md-6">
      <b><label for="video">Ve el siguiente video y responde</label></b>
      <iframe width="450" height="225" src="https://www.youtube.com/embed/qhX8icx2Ni4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <b><label for="pregunta8">¿Qué opinas sobre este video?</label></b>
      <input type="text" class="form-control" id="pregunta8" name="pregunta8" maxlength="150" required >
      </div>
      <center><h2>CASO DE MATEO</h2></center><br>
      <div class="form-group col-md-6">
      <b><label for="pregunta9">¿Qué opinas de la reacción de la directora de la escuela de Mateo?</label></b>
      <input type="text" class="form-control" id="pregunta9" name="pregunta9" maxlength="150" required >
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta10">¿Cómo consideras que afecta el manejo del caso de Mateo por parte de los medios informativos?</label></b>
      <input type="text" class="form-control" id="pregunta10" name="pregunta10" maxlength="150" required >
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta11">En una escena de bullying Homo, Lesbo y transfóbico ¿Qué papel juega el personal docente?</label></b>
           <select name="pregunta11" class="form-control">
                      <option value="" selected></option>
                      <option value="Agresor">Agresor</option>
                      <option value="Testigo sin capacidad de decisión">Testigo sin capacidad de decisión</option>
                      <option value="Testigo con capacidad de decisión">Testigo con capacidad de decisión</option>
                      <option value="Todas las anteriores">Todas las anteriores</option>
                      <option value="No lo sé">No lo sé</option>
           </select>
      </div>
      <div class="form-group col-md-6">
        <b><label for="pregunta12"> Elige las características del bullying homo, Lesbo y transfóbico</label></b>
        <label><input type="checkbox" name="pregunta12_1" value="Intencionalmente dañino"> Intencionalmente dañino</label><br>
        <label><input type="checkbox" name="pregunta12_2" value="Es parte de los procesos de socialización"> Es parte de los procesos de socialización</label><br>
        <label><input type="checkbox" name="pregunta12_3" value="Común entre niños, niñas, niñes y adolescentes"> Común entre niños, niñas, niñes y adolescentes</label><br>
        <label><input type="checkbox" name="pregunta12_4" value="Es repetitivo"> Es repetitivo</label><br>
        <label><input type="checkbox" name="pregunta12_5" value="Produce desequilibrio del poder"> Produce desequilibrio del poder</label><br>
        <label><input type="checkbox" name="pregunta12_6" value="Es causa de una provocación"> Es causa de una provocación</label><br>
        <label><input type="checkbox" name="pregunta12_7" value="No necesita provocación"> No necesita provocación</label><br>
        <label><input type="checkbox" name="pregunta12_8" value="Genera intimidación"> Genera intimidación</label><br>
        <label><input type="checkbox" name="pregunta12_9" value="La timidez lo promueve"> La timidez lo promueve</label><br>
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta13">¿Cuáles son las reacciones más comunes de las personas cuando presencian un acto de bullying homo, Lesbo y transfobico?</label></b>
           <select name="pregunta13" class="form-control">
                      <option value="" selected></option>
                      <option value="Legitiman y refuerzan la conducta del agresor/a.">Legitiman y refuerzan la conducta del agresor/a.</option>
                      <option value="Callan e ignoran la violencia">Callan e ignoran la violencia</option>
                      <option value="Pueden sentir culpabilidad por consentir la situación.">Pueden sentir culpabilidad por consentir la situación</option>
                      <option value="Creen que son cobardes si cuentan lo que  ocurre.">Creen que son cobardes si cuentan lo que  ocurre.</option>
                      <option value="Tienen miedo  y no quieren sr la siguiente víctima.">Tienen miedo  y no quieren sr la siguiente víctima.</option>
                      <option value="Siente inseguridad y se escudan diciendo “no es nada, ocurre en todas partes”.">Siente inseguridad y se escudan diciendo “no es nada, ocurre en todas partes”.</option>
                      <option value="Otro">Otro</option>
           </select>
      <label for="pregunta13_1">Si respondiste otro, por favor dinos ¿cuál sería?</label>
      <input type="text" class="form-control" id="pregunta13_1" name="pregunta13_1" maxlength="150" required >
      </div>  
    
  </div>
  <!-- <div class="form-group">
   <div class="g-recaptcha" data-sitekey="6LdRbtgUAAAAADY_eJQwBXHSY25YJ9-BYaoTLE6M"></div>
  </div>-->
  <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
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
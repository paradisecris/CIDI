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
<title>Diagnostico 4</title></head>
<body >

  <br>
  <br>
  <br> 	
<div class="jumbotron jumbotron-fluid bg-error mb-3">
  <div class="container">
	<form method="POST" action="examen4.php">
  <div class="form-group">
  	

    


    <div class="form-group col-md-6">
      
      <label for="pregunta1">¿A quién le corresponde implementar programas específicos (educación sexual, diversidad sexual, convivencia)?</label></b>
        
        <select name="pregunta1" class="form-control">
                      <option value="" selected></option>
                      <option value="Instituciones escolares">Instituciones escolares</option>
                      <option value="Gobierno Mexicano">Gobierno Mexicano</option>
                      <option value="Secretaria de educación publica">Secretaria de educacion publica</option>
                      <option value="Otros">Otros</option>
        </select>
      </div>


<div class="form-group col-md-6">
      <label for="pregunta2">¿Cuál consideras que es el primer paso al detectar un caso de bullying?</label>}

          <select name="pregunta2" class="form-control">
                      <option value="" selected></option>
                      <option value="Cambios de comportamiento">Cambios de comportamiento</option>
                      <option value="Mayor irribitabilidad">Mayor irritabilidad</option>
                      <option value="Aislamiento ">Aislamiento</option>
                      <option value="Otros">Otros</option>
                       
          </select>

</div>


<div class="form-group col-md-6">
      <label for="pregunta3">Al detectar un caso de bullying ¿solamente se deben tomar medidas contra los implicados?</label>}

          <select name="pregunta3" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                      <option value="No sé ">No sé</option>

                       
          </select>
</div>



<div class="form-group col-md-6">
      <label for="pregunta4">¿Se han implementado programas de educación sexual dirigidos a profesores y/o estudiantes en tu centro escolar?</label>

          <select name="pregunta4" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    
                       
          </select>

          <label for="pregunta4">Si tu respuesta fue Si, ¿Cual fue?</label>
          <textarea name="pregunta4" rows="2" cols="30">Escribe aqui tu respuesta</textarea>
          <br><br>
          <input type="submit" value="Submit">

          


</div>


<div class="form-group col-md-6">
      <label for="pregunta5">¿Sabes qué es un protocolo de actuación ante situaciones de Bullying? ¿Alguna vez lo has implementado? </label>

          <select name="pregunta5" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    
                       
          </select>

          <label for="pregunta5">Si tu respuesta fue Si, ¿Cual has implementado?</label>
          <textarea name="pregunta5" rows="2" cols="30">Escribe aqui tu respuesta</textarea>
          <br><br>
          <input type="submit" value="Submit">

          


</div>

<div class="form-group col-md-6">
      <label for="pregunta6">¿Qué harías en caso de detectar un caso de bullying homo, lesbo, bi o transfóbico en tu centro escolar?</label>
          <textarea name="pregunta6" rows="2" cols="30">Escribe aqui tu respuesta</textarea>
          <br><br>
          <input type="submit" value="Submit">

          


</div>

<div class="form-group col-md-6">
      <label for="pregunta3">¿Es necesario que la persona agredida ejerza acción legal en contra de su agresor y/o la institución educativa?</label>}

          <select name="pregunta3" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                      <option value="Que se deje pasar ">Que se deje pasar</option>

                       
          </select>
</div>
<div class="form-group col-md-6">
      <label for="pregunta3">¿Es necesario que la persona agredida ejerza acción legal en contra de su agresor y/o la institución educativa?</label>}

          <select name="pregunta3" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                      <option value="Que se deje pasar ">Que se deje pasar</option>

                       
          </select>
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
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
<title>Diagnostico 1</title></head>
<body >

  <br>
  <br>
  <br> 	
<div class="jumbotron jumbotron-fluid bg-error mb-3">
  <div class="container">
	<form method="POST" action="examen1.php">
  <div class="form-group">
  	<input type="hidden" name="id_user" value=<?php echo $_SESSION['id']?>>
  	<div class="form-group col-md-6">
      <b><label for="pregunta1">¿Con que nombre te identificas?</label></b>
      <input type="text" class="form-control" id="pregunta1" name="pregunta1" maxlength="30" required >

    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta2">¿Cuál es tu identidad de género?</label></b>
        <select name="pregunta2" class="form-control">
                      <option value="" selected></option>
                      <option value="Soy un hombre transgénero">Soy un hombre transgénero</option>
                      <option value="Soy un hombre cisgénero">Soy un hombre cisgénero</option>
                      <option value="Soy una mujer transgénero">Soy una mujer transgénero</option>
                      <option value="Soy una mujer cisgénero">Soy una mujer cisgénero</option>
                      <option value="Soy una persona no binaria">Soy una persona no binaria</option>
                      <option value="Soy una persona de género fluido">Soy una persona de género fluido</option>
                      <option value="Soy una persona trans">Soy una persona trans</option>
                      <option value="Otro">Otro</option>
          </select>

    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta3">Asigna a cada letra del acrónimo LGBTTTI+ el concepto que le define y permite su existencia jurídica en la Constitución de la Ciudad de México ¿Describe lo que significa cada una de las letras del acrónimo LGBTTTI+?</label></b>
      <label for="pregunta3_1">Orientación sexual</label></b>
        <select name="pregunta3_1" class="form-control">
                      <option value="" selected></option>
                      <option value="Lesbiana">Lesbiana</option>
                      <option value="Gay">Gay</option>
                      <option value="Bisexual">Bisexual</option>
                      <option value="Trasvesti">Trasvesti</option>
                      <option value="Transgénero">Transgénero</option>
                      <option value="Transexual">Transexual</option>
                      <option value="+">+</option>
                     
          </select>
      <label for="pregunta3_2">Identidad de género</label>
          <select name="pregunta3_2" class="form-control">
                      <option value="" selected></option>
                      <option value="Lesbiana">Lesbiana</option>
                      <option value="Gay">Gay</option>
                      <option value="Bisexual">Bisexual</option>
                      <option value="Trasvesti">Trasvesti</option>
                      <option value="Transgénero">Transgénero</option>
                      <option value="Transexual">Transexual</option>
                      <option value="+">+</option>
                       
          </select>
      <label for="pregunta3_3">Expresión de género</label>
          <select name="pregunta3_3" class="form-control">
                      <option value="" selected></option>
                      <option value="Lesbiana">Lesbiana</option>
                      <option value="Gay">Gay</option>
                      <option value="Bisexual">Bisexual</option>
                      <option value="Trasvesti">Trasvesti</option>
                      <option value="Transgénero">Transgénero</option>
                      <option value="Transexual">Transexual</option>
                      <option value="+">+</option>
                       
            </select>
      <label for="pregunta3_4">Caracteres sexuales</label>
          <select name="pregunta3_4" class="form-control">
                      <option value="" selected></option>
                      <option value="Lesbiana">Lesbiana</option>
                      <option value="Gay">Gay</option>
                      <option value="Bisexual">Bisexual</option>
                      <option value="Trasvesti">Trasvesti</option>
                      <option value="Transgénero">Transgénero</option>
                      <option value="Transexual">Transexual</option>
                      <option value="+">+</option>
                       
            </select>

    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta4">¿Crees que en Latinoamérica  viven hombres transgénero, que quizás ya se han embarazado y que se definen como gay?</label></b>
        <select name="pregunta4" class="form-control">
                      <option value="" selected></option>
                      <option value="No estoy segur@ me gustaría aprender más">No estoy segur@ me gustaría aprender más</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                      
          </select>
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta5">¿Qué significa la letra I en el acrónimo?</label></b>
      <input type="text" class="form-control" id="pregunta5" name="pregunta5" required maxlength="255">
      </div>
      <div class="form-group col-md-6">
        <b><label for="pregunta6">Relaciona las palabras con los conceptos</label><br></b>
        <label for="pregunta6_1">Macho</label>
          <select name="pregunta6_1" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
          </select>
          <label for="pregunta6_2">Hembra</label>
            <select name="pregunta6_2" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
          </select>
          <label for="pregunta6_3">Masculino</label>
            <select name="pregunta6_3" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
            </select>
          <label for="pregunta6_4">Femenino</label>
            <select name="pregunta6_4" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
             </select> 
          <label for="pregunta6_5">Hombre</label>
            <select name="pregunta6_5" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
            </select> 
          <label for="pregunta6_6">Mujer</label>
            <select name="pregunta6_6" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
            </select>      
          <label for="pregunta6_7">Pene</label>
            <select name="pregunta6_7" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
            </select>   
          <label for="pregunta6_8">Vulva</label>
             <select name="pregunta6_8" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
              </select>   
            <label for="pregunta6_9">Intersexualidad</label>
                <select name="pregunta6_9" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
                </select>     
            <label for="pregunta6_10">Vestidos</label>
                <select name="pregunta6_10" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
                </select>  
            <label for="pregunta6_11">Traje</label>
                <select name="pregunta6_11" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
                </select>     
            <label for="pregunta6_12">Pantalón</label>
                <select name="pregunta6_12" class="form-control">
                        <option value="" selected></option>
                        <option value="Sexo" >Sexo</option>
                        <option value="Género">Género</option>
                        <option value="Identidad" >Identidad</option>
                        <option value="Expresión de Género">Expresión de Género</option> 
                </select>        
        </div>
        <div class="form-group col-md-6">
        <b><label for="pregunta7">¿Describe lo que significa cada una de las letras del acrónimo LGBTTTI+?</label></b>
        <input type="text" class="form-control" id="pregunta7" name="pregunta7" maxlength="150" required >
        </div>
        <div class="form-group col-md-6">
        <b><label for="pregunta8">¿Cómo expresas socialmente tu género?</label></b>
        <input type="text" class="form-control" id="pregunta8" name="pregunta8" maxlength="150" required >
        </div>
        <div class="form-group col-md-6">
          <b><label for="pregunta9">¿Sabes que es el PIN PARENTAL? ¿Has escuchado de esta movilización social en México o en algún otro país?</label></b>
            <select name="pregunta9" class="form-control">
                          <option value="" selected></option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                          <option value="Tal vez">Tal vez</option>
                          <option value="Otros">Otros</option>
                          
              </select>
          </div>
          <div class="form-group col-md-6">
            <b><label for="pregunta10">¿Qué es sexo y cuantos conoces? </label></b>
            <input type="text" class="form-control" id="pregunta10" name="pregunta10" maxlength="150" required >
          </div>
          <div class="form-group col-md-6">
            <b><label for="pregunta11">¿Qué opinas de la frase no se nace  mujer, se llega  serlo?</label></b>
            <input type="text" class="form-control" id="pregunta11" name="pregunta11" maxlength="150" required >
          </div>
          <div class="form-group col-md-6">
            <b><label for="pregunta12">¿Cuál es tu orientación sexual?</label></b>
            <input type="text" class="form-control" id="pregunta12" name="pregunta12" maxlength="150" required >
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
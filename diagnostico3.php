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
<title>Diagnostico 3</title></head>
<body >

  <br>
  <br>
  <br> 	
<div class="jumbotron jumbotron-fluid bg-error mb-3">
  <div class="container">
	<form method="POST" action="examen3.php">
  <div class="form-group">
  	

    <div class="form-group col-md-6">
      <b><label for="pregunta1">Selecciona de esta lista cuales son los derechos de las niñas, niños y adolescentes</label></b>

<label><input type="checkbox" name="pregunta1" value="Derecho a la vida, a la supervivencia y al desarrollo">Derecho a la vida, a la supervivencia y al desarrollo</label><br>
<label><input type="checkbox" name="pregunta1" value="Derecho de prioridad; Derecho a la identidad"> Derecho de prioridad; Derecho a la identidad</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a vivir en familia; Derecho a la igualdad sustantiva "> Derecho a vivir en familia; Derecho a la igualdad sustantiva </label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a no ser discriminado"> Derecho a no ser discriminado</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a votar"> Derecho a votar</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a vivir en condiciones de bienestar y a un sano desarrollo integral "> Derecho a vivir en condiciones de bienestar y a un sano desarrollo integral </label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a una vida libre de violencia y a la integridad personal"> Derecho a una vida libre de violencia y a la integridad personal</label><br>

<label><input type="checkbox" name="pregunta1" value=" Derecho a la protección de la salud y a la seguridad social">Derecho a la protección de la salud y a la seguridad social</label><br>
<label><input type="checkbox" name="pregunta1" value="Derecho a la inclusión de niñas, niños y adolescentes con discapacidad">Derecho a la inclusión de niñas, niños y adolescentes con discapacidad</label><br>
<label><input type="checkbox" name="pregunta1" value="Derecho a la educación">Derecho a la educación </label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho al descanso y al esparcimiento"> Derecho al descanso y al esparcimiento</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a la libertad de convicciones éticas, pensamiento, conciencia, religión y cultura ">Derecho a la libertad de convicciones éticas, pensamiento, conciencia, religión y cultura </label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a la libertad de expresión y de acceso a la información"> Derecho a la libertad de expresión y de acceso a la información</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho de participación"> Derecho de participación</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho de asociación y reunión ">  Derecho de asociación y reunión  </label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a la intimidad "> Derecho a la intimidad </label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho a la seguridad jurídica y al debido proceso"> Derecho a la seguridad jurídica y al debido proceso</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derechos de niñas, niños y adolescentes migrantes"> Derechos de niñas, niños y adolescentes migrantes</label><br>
<label><input type="checkbox" name="pregunta1" value=" Derecho al trabajo">  s) Derecho al trabajo </label><br>
<label><input type="checkbox" name="pregunta1" value="Todas las anteriores ">Todas las anteriores  </label><br>
</div>


    <div class="form-group col-md-6">
      
      <label for="pregunta2">¿Los Derechos Humanos tienen limitaciones?</label></b>
        
        <select name="pregunta2" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                      <option value="Tal vez">Tal vez</option>
                      <option value="+">+</option>
        </select>
      </div>


<div class="form-group col-md-6">
      <label for="pregunta3">Es más dañino el maltrato entre compañeros que el maltrato por parte de adultos</label>}

          <select name="pregunta3" class="form-control">
                      <option value="" selected></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                      <option value="No sé ">No sé</option>
                      <option value="+">+</option>
                       
          </select>

</div>

 <div class="form-group col-md-6">
        <b><label for="pregunta4">¿Qué figura es la más importante para combatir el bullying en los centros escolares?</label><br></b>
 
        <label for="pregunta4_1">Alumnos</label>
          <select name="pregunta4_1" class="form-control">
                        <option value="" selected></option>
                        <option value="Poco importante" >Poco importante</option>
                        <option value="Más o menos importante">Más o menos importante</option>
                        <option value="" >Masculino</option>
                        <option value="Muy importante">Muy importante</option>
                        <option value="Indispensable">Indispensable</option>
                        
            </select>
            <label for="pregunta4_2">Profesores</label>
          <select name="pregunta4_2" class="form-control">
                        <option value="" selected></option>
                        <option value="Poco importante" >Poco importante</option>
                        <option value="Más o menos importante">Más o menos importante</option>
                        <option value="" >Masculino</option>
                        <option value="Muy importante">Muy importante</option>
                        <option value="Indispensable">Indispensable</option>
                        
            </select>
           
            <label for="pregunta4_3">Personal Administrativo</label>
          <select name="pregunta4_3" class="form-control">
                        <option value="" selected></option>
                        <option value="Poco importante" >Poco importante</option>
                        <option value="Más o menos importante">Más o menos importante</option>
                        <option value="" >Masculino</option>
                        <option value="Muy importante">Muy importante</option>
                        <option value="Indispensable">Indispensable</option>
                        
            </select>
            <label for="pregunta4_4">Padres de familia</label>
          <select name="pregunta4_4" class="form-control">
                        <option value="" selected></option>
                        <option value="Poco importante" >Poco importante</option>
                        <option value="Más o menos importante">Más o menos importante</option>
                        <option value="" >Masculino</option>
                        <option value="Muy importante">Muy importante</option>
                        <option value="Indispensable">Indispensable</option>
                        
            </select>

            <label for="pregunta4_5">Comunidad en general</label>
          <select name="pregunta4_5" class="form-control">
                        <option value="" selected></option>
                        <option value="Poco importante" >Poco importante</option>
                        <option value="Más o menos importante">Más o menos importante</option>
                        <option value="" >Masculino</option>
                        <option value="Muy importante">Muy importante</option>
                        <option value="Indispensable">Indispensable</option>
                        
            </select>

            <label for="pregunta4_6">Instituciones</label>
          <select name="pregunta4_6" class="form-control">
                        <option value="" selected></option>
                        <option value="Poco importante" >Poco importante</option>
                        <option value="Más o menos importante">Más o menos importante</option>
                        <option value="" >Masculino</option>
                        <option value="Muy importante">Muy importante</option>
                        <option value="Indispensable">Indispensable</option>
                        
            </select>

   
      
      
    
  </div>

  <div class="form-group col-md-6">
      <label for="pregunta5">Si alguien hace bullying y su argumento es la religión, no podemos obligarlo a cambiar, donde 1 es totalmente de desacuerdo y 5 es Totalmente de acuerdo</label>}

          <select name="pregunta5" class="form-control">
                      <option value="" selected></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                       
          </select>

</div>

<div class="form-group col-md-6">
      <label for="pregunta6">Poner apodos siempre es un acto de bullying</label>

          <select name="pregunta6" class="form-control">
                      <option value="" selected></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                       
          </select>

</div>
<div class="form-group col-md-6">
        <b><label for="pregunta7">¿con qué frases estás de acuerdo o en desacuerdo?</label><br></b>
 
        <label for="pregunta7_1">A veces se dice cosas como “marica” sin pretender ofender a nadie por su orientación sexual </label>
          <select name="pregunta4_1" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

          <label for="pregunta7_2">Las expresiones homo, lesbo, bi y transfóbicas, aunque no estén dirigidas a la orientación sexual, identidad o expresión de género de una persona, están diciendo que las personas LGBTTTI son inferiores </label>
          <select name="pregunta7_2" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

          <label for="pregunta7_3">Las expresiones homo, lesbo, bi y transfóbicas, aunque no estén dirigidas a la orientación sexual, identidad o expresión de género de una persona, están diciendo que las personas LGBTTTI son inferiores </label>
          <select name="pregunta7_3" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

          <label for="pregunta7_5">Aunque se digan si pensar las palabras homo, lesbo , biy transfóbicas causan daño y hieren a las personas aludidas  </label>
          <select name="pregunta7_5" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

          <label for="pregunta7_6">Si no hay intención homo, lesbo y tranfóbica el lenuaje no denota, fobias, odio infundado o discriminación. </label>
          <select name="pregunta7_6" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>
          

          <label for="pregunta7_7">si la escuela permite el lenguaje homo,lesbo o trasnfóbico está facilitando que sus estudiantes deban aguantar bullying e insultos. </label>
          <select name="pregunta7_7" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>


           <label for="pregunta7_8">Si la escuela pone un alto al lenguaje homo fóbico se crea  un ambiente favorable para el estudiante, su sentido de pertenencia, su autoestima y su logro académico.</label>
          <select name="pregunta7_8" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

          <label for="pregunta7_9">Si no interviene el personal docente, las expresiones homo, lesbo y transfóbicas irán cada más lejos.</label>
          <select name="pregunta7_9" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

          <label for="pregunta7_10">No creo que expresiones tan comunes puedan incomodar a alguien.</label>
          <select name="pregunta7_10" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>
          

            <label for="pregunta7_11">La burla a través de palabras y ofensas son actos de lenguaje que se enmarcan bajo el concepto de injuria.</label>
          <select name="pregunta7_11" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
          </select>

           <label for="pregunta7_12">El lenguaje homo, lesbo y transfóbico causa traumatismos y pueden truncar las aspiraciones de algún /a estudiante.</label>
          <select name="pregunta7_12" class="form-control">
                        <option value="" selected></option>
                        <option value="De acuerdo" >De acuerdo</option>
                        <option value="En desacuerdo">En desacuerdo</option>

                        
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
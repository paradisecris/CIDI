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

    <?php
    extract($_GET);
    require("connect_db.php");

    $query = "SELECT * FROM diagnostico1 where id_user=5";
    $result = mysqli_query($mysqli,$query);
    while ($resp = $result->fetch_assoc()){
    
    
    ?>
	<form method="POST" action="calificar.php">
  <div class="form-group">
    <input type="hidden" name="user" value=<?php echo $resp['id_user']?>>
  	<div class="form-group col-md-6">
      <b><label for="pregunta1">¿Con que nombre te identificas?</label></b>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta1']?>" readonly>
      <hr><input type="number" class="form-control" id="res1" name="res1" placeholder="calificacion" required>
    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta2">¿Cuál es tu identidad de género?</label></b>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta2']?>" readonly>
      <hr><input type="number" class="form-control" id="res2" name="res2" placeholder="calificacion" required>
    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta3">Asigna a cada letra del acrónimo LGBTTTI+ el concepto que le define y permite su existencia jurídica en la Constitución de la Ciudad de México ¿Describe lo que significa cada una de las letras del acrónimo LGBTTTI+?</label></b>
      <label for="pregunta3_1">Orientación sexual</label></b>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta3_1']?>" readonly>
      <hr><input type="number" class="form-control" id="res3" name="res3" placeholder="calificacion" required>
    
                     
          </select>
      <label for="pregunta3_2">Identidad de género</label>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta3_2']?>" readonly>
      <hr><input type="number" class="form-control" id="res4" name="res4" placeholder="calificacion" required>
                       
          </select>
      <label for="pregunta3_3">Expresión de género</label>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta3_3']?>" readonly>
      <hr><input type="number" class="form-control" id="res5" name="res5" placeholder="calificacion" required>

      <label for="pregunta3_4">Caracteres sexuales</label>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta3_4']?>" readonly>
      <hr><input type="number" class="form-control" id="res6" name="res6" placeholder="calificacion" required>
    </div>
    <div class="form-group col-md-6">
      <b><label for="pregunta4">¿Crees que en Latinoamérica  viven hombres transgénero, que quizás ya se han embarazado y que se definen como gay?</label></b>
        <input type="text" class="form-control" value="<?php echo $resp['pregunta4']?>" readonly>
        <hr><input type="number" class="form-control" id="res7" name="res7" placeholder="calificacion" required>
      </div>
      <div class="form-group col-md-6">
      <b><label for="pregunta5">¿Qué significa la letra I en el acrónimo?</label></b>
      <input type="text" class="form-control" value="<?php echo $resp['pregunta5']?>" readonly>
      <hr><input type="number" class="form-control" id="res8" name="res8" placeholder="calificacion" required>
      </div>
      <div class="form-group col-md-6">
        <b><label for="pregunta6">Relaciona las palabras con los conceptos</label><br></b>
          <label for="pregunta6_1">Macho</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_1']?>" readonly>
          <hr><input type="number" class="form-control" id="res9" name="res9" placeholder="calificacion" required>
          
          <label for="pregunta6_2">Hembra</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_2']?>" readonly>
          <hr><input type="number" class="form-control" id="res10" name="res10" placeholder="calificacion" required>
          <label for="pregunta6_3">Masculino</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_3']?>" readonly>
          <hr><input type="number" class="form-control" id="res11" name="res11" placeholder="calificacion" required>
          <label for="pregunta6_4">Femenino</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_4']?>" readonly>
          <hr><input type="number" class="form-control" id="res12" name="res12" placeholder="calificacion" required>
          <label for="pregunta6_5">Hombre</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_5']?>" readonly>
          <hr><input type="number" class="form-control" id="res13" name="res13" placeholder="calificacion" required> 
          <label for="pregunta6_6">Mujer</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_6']?>" readonly>
          <hr><input type="number" class="form-control" id="res14" name="res14" placeholder="calificacion" required>      
          <label for="pregunta6_7">Pene</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_7']?>" readonly>
          <hr><input type="number" class="form-control" id="res15" name="res15" placeholder="calificacion" required>   
          <label for="pregunta6_8">Vulva</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_8']?>" readonly>
          <hr><input type="number" class="form-control" id="res16" name="res16" placeholder="calificacion" required>    
          <label for="pregunta6_9">Intersexualidad</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_9']?>" readonly>
          <hr><input type="number" class="form-control" id="res17" name="res17" placeholder="calificacion" required>     
          <label for="pregunta6_10">Vestidos</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_10']?>" readonly>
          <hr><input type="number" class="form-control" id="res18" name="res18" placeholder="calificacion" required>  
          <label for="pregunta6_11">Traje</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_11']?>" readonly>
          <hr><input type="number" class="form-control" id="res19" name="res19" placeholder="calificacion" required>  
          <label for="pregunta6_12">Pantalón</label>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta6_12']?>" readonly>
          <hr><input type="number" class="form-control" id="res20" name="res20" placeholder="calificacion" required>         
        </div>
        <div class="form-group col-md-6">
        <b><label for="pregunta7">¿Describe lo que significa cada una de las letras del acrónimo LGBTTTI+?</label></b>
        <input type="text" class="form-control" value="<?php echo $resp['pregunta7']?>" readonly>
        <hr><input type="number" class="form-control" id="res21" name="res21" placeholder="calificacion" required> 
        </div>
        <div class="form-group col-md-6">
        <b><label for="pregunta8">¿Cómo expresas socialmente tu género?</label></b>
        <input type="text" class="form-control" value="<?php echo $resp['pregunta8']?>" readonly>
        <hr><input type="number" class="form-control" id="res22" name="res22" placeholder="calificacion" required> 
        </div>
        <div class="form-group col-md-6">
          <b><label for="pregunta9">¿Sabes que es el PIN PARENTAL? ¿Has escuchado de esta movilización social en México o en algún otro país?</label></b>
          <input type="text" class="form-control" value="<?php echo $resp['pregunta9']?>" readonly>
          <hr><input type="number" class="form-control" id="res23" name="res23" placeholder="calificacion" required> 
          </div>
          <div class="form-group col-md-6">
            <b><label for="pregunta10">¿Qué es sexo y cuantos conoces? </label></b>
            <input type="text" class="form-control" value="<?php echo $resp['pregunta10']?>" readonly>
            <hr><input type="number" class="form-control" id="res24" name="res24" placeholder="calificacion" required> 
          </div>
          <div class="form-group col-md-6">
            <b><label for="pregunta11">¿Qué opinas de la frase no se nace  mujer, se llega  serlo?</label></b>
            <input type="text" class="form-control" value="<?php echo $resp['pregunta11']?>" readonly>
            <hr><input type="number" class="form-control" id="res25" name="res25" placeholder="calificacion" required> 
          </div>
          <div class="form-group col-md-6">
            <b><label for="pregunta12">¿Cuál es tu orientación sexual?</label></b>
            <input type="text" class="form-control" value="<?php echo $resp['pregunta12']?>" readonly>
            <hr><input type="number" class="form-control" id="res26" name="res26" placeholder="calificacion" required> 
          </div>
    
  </div>
  <!-- <div class="form-group">
   <div class="g-recaptcha" data-sitekey="6LdRbtgUAAAAADY_eJQwBXHSY25YJ9-BYaoTLE6M"></div>
  </div>-->
  <button type="submit" name="submit" class="btn btn-outline-dark">Enviar</button>
</form>

<?php
    
  }
    ?>
</div>
</div>
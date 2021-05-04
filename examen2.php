<?php
require("connect_db.php");
?>
<?php
	$id_user=$_POST['user'];
	$pregunta1=$_POST['pregunta1'];
	$pregunta2=$_POST['pregunta2'];
	$pregunta3=$_POST['pregunta3'];
	$pregunta4=$_POST['pregunta4'];
	$pregunta5=$_POST['pregunta5'];
	$pregunta6=$_POST['pregunta6'];
	$pregunta7=$_POST['pregunta7'];
	$pregunta8=$_POST['pregunta8'];
	$pregunta9=$_POST['pregunta9'];
	$pregunta10=$_POST['pregunta10'];
	$pregunta11=$_POST['pregunta11'];
	$pregunta12_1=$_POST['pregunta12_1'];
	$pregunta12_2=$_POST['pregunta12_2'];
	$pregunta12_3=$_POST['pregunta12_3'];
	$pregunta12_4=$_POST['pregunta_12_4'];
	$pregunta12_5=$_POST['pregunta12_5'];
	$pregunta12_6=$_POST['pregunta12_6'];
	$pregunta12_7=$_POST['pregunta12_7'];
	$pregunta12_8=$_POST['pregunta12_8'];
	$pregunta12_9=$_POST['pregunta12_9'];
	$pregunta13=$_POST['pregunta13'];
	$pregunta13_1=$_POST['pregunta13_1'];
	






	
mysqli_query($mysqli,"INSERT INTO diagnostico2 VALUES('',current_date,'$id_user','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12_1','$pregunta12_2','$pregunta12_3','$pregunta12_4','$pregunta12_5','$pregunta12_6','$pregunta12_7','$pregunta12_8','$pregunta12_9','$pregunta13','$pregunta13_1')");
echo ' <script language="javascript">alert("Respuestas enviadas con exito");</script> ';
echo "<script>location.href='curso.php'</script>";
	
?>
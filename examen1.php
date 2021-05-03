<?php
require("connect_db.php");
?>
<?php
	$id_user=$_POST['id_user'];
	$pregunta1=$_POST['pregunta1'];
	$pregunta2=$_POST['pregunta2'];
	$pregunta3_1=$_POST['pregunta3_1'];
	$pregunta3_2=$_POST['pregunta3_2'];
	$pregunta3_3=$_POST['pregunta3_2'];
	$pregunta3_4=$_POST['pregunta3_4'];
	$pregunta4=$_POST['pregunta4'];
	$pregunta5=$_POST['pregunta5'];
	$pregunta6_1=$_POST['pregunta6_1'];
	$pregunta6_2=$_POST['pregunta6_2'];
	$pregunta6_3=$_POST['pregunta6_3'];
	$pregunta6_4=$_POST['pregunta6_4'];
	$pregunta6_5=$_POST['pregunta6_5'];
	$pregunta6_6=$_POST['pregunta6_6'];
	$pregunta6_7=$_POST['pregunta6_7'];
	$pregunta6_8=$_POST['pregunta6_8'];
	$pregunta6_9=$_POST['pregunta6_9'];
	$pregunta6_10=$_POST['pregunta6_10'];
	$pregunta6_11=$_POST['pregunta6_11'];
	$pregunta6_12=$_POST['pregunta6_12'];
	$pregunta7=$_POST['pregunta7'];
	$pregunta8=$_POST['pregunta8'];
	$pregunta9=$_POST['pregunta9'];
	$pregunta10=$_POST['pregunta10'];
	$pregunta11=$_POST['pregunta11'];
	$pregunta12=$_POST['pregunta12'];






	
mysqli_query($mysqli,"INSERT INTO diagnostico1 VALUES('',current_date,'$id_user','$pregunta1','$pregunta2','$pregunta3_1','$pregunta3_2','$pregunta3_3','$pregunta3_4','$pregunta4','$pregunta5','$pregunta6_1','$pregunta_6_2','$pregunta6_3','$pregunta6_4','$pregunta6_5','$pregunta6_6','$pregunta6_7','$pregunta6_8','$pregunta6_9','$pregunta6_10','$pregunta6_11','$pregunta6_12','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12')");
echo ' <script language="javascript">alert("Respuestas enviadas con exito");</script> ';
echo "<script>location.href='curso.php'</script>";
	
?>
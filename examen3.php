<?php
require("connect_db.php");
?>
<?php
	$id_user=$_POST['user'];
	$pregunta1=$_POST['pregunta1_1'];
	$pregunta1=$_POST['pregunta1_2'];
	$pregunta1=$_POST['pregunta1_3'];
	$pregunta1=$_POST['pregunta1_4'];
	$pregunta1=$_POST['pregunta1_5'];
	$pregunta1=$_POST['pregunta1_6'];
	$pregunta1=$_POST['pregunta1_7'];
	$pregunta1=$_POST['pregunta1_8'];
	$pregunta1=$_POST['pregunta1_9'];
	$pregunta1=$_POST['pregunta1_10'];
	$pregunta1=$_POST['pregunta1_11'];
	$pregunta1=$_POST['pregunta1_12'];
	$pregunta1=$_POST['pregunta1_13'];
	$pregunta1=$_POST['pregunta1_14'];
	$pregunta1=$_POST['pregunta1_15'];
	$pregunta1=$_POST['pregunta1_16'];
	$pregunta1=$_POST['pregunta1_17'];
	$pregunta1=$_POST['pregunta1_18'];
	$pregunta1=$_POST['pregunta1_19'];
	$pregunta1=$_POST['pregunta1_20'];
	$pregunta1=$_POST['pregunta2'];
	$pregunta1=$_POST['pregunta3'];
	$pregunta1=$_POST['pregunta4_1'];
	$pregunta1=$_POST['pregunta4_2'];
	$pregunta1=$_POST['pregunta4_3'];
	$pregunta1=$_POST['pregunta4_4'];
	$pregunta1=$_POST['pregunta4_5'];
	$pregunta1=$_POST['pregunta4_6'];
	$pregunta1=$_POST['pregunta5'];
	$pregunta1=$_POST['pregunta6'];
	$pregunta1=$_POST['pregunta7_1'];
	$pregunta1=$_POST['pregunta7_1'];
	$pregunta1=$_POST['pregunta7_2'];
	$pregunta1=$_POST['pregunta7_3'];
	$pregunta1=$_POST['pregunta7_4'];
	$pregunta1=$_POST['pregunta7_5'];
	$pregunta1=$_POST['pregunta7_6'];
	$pregunta1=$_POST['pregunta7_7'];
	$pregunta1=$_POST['pregunta7_8'];
	$pregunta1=$_POST['pregunta7_9'];
	$pregunta1=$_POST['pregunta7_10'];
	$pregunta1=$_POST['pregunta7_11'];




$pregunta1 = array("$pregunta1_1","$pregunta1_2","$pregunta1_3","$pregunta1_4","$pregunta1_5","$pregunta1_6","$pregunta1_7","$pregunta1_8","$pregunta1_9","$pregunta1_10","$pregunta1_11","$pregunta1_12","$pregunta1_13","$pregunta1_14","$pregunta1_15","$pregunta1_16","$pregunta1_17","$pregunta1_18","$pregunta1_19","$pregunta1_20",);

$res = implode("/", $pregunta1);



	
mysqli_query($mysqli,"INSERT INTO diagnostico3 VALUES('',current_date,'$id_user','$res','$pregunta2','$pregunta3','$pregunta4_1','$pregunta4_2','$pregunta4_3','$pregunta4_4','$pregunta4_5','$pregunta4_6','$pregunta5','$pregunta6','$pregunta7_1','$pregunta7_2','$pregunta7_3','$pregunta7_14','$pregunta7_5','$pregunta7_6','$pregunta7_7','$pregunta7_8','$pregunta7_9','$pregunta7_10','$pregunta7_11',)");
echo ' <script language="javascript">alert("Respuestas enviadas con exito");</script> ';
echo "<script>location.href='curso.php'</script>";
	
?>
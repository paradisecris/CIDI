<?php
require("connect_db.php");
?>
<?php
	$id_user=$_POST['user'];
	$res1=$_POST['res1'];
	$res2=$_POST['res2'];
	$res3=$_POST['res3'];
	$res4=$_POST['res4'];
	$res5=$_POST['res5'];
	$res6=$_POST['res6'];
	$res7=$_POST['res7'];
	$res8=$_POST['res8'];
	$res9=$_POST['res9'];
	$res10=$_POST['res10'];
	$res11=$_POST['res11'];
	$res12=$_POST['res12'];
	$res13=$_POST['res13'];
	$res14=$_POST['res14'];
	$res15=$_POST['res15'];
	$res16=$_POST['res16'];
	$res17=$_POST['res17'];
	$res18=$_POST['res18'];
	$res19=$_POST['res19'];
	$res20=$_POST['res20'];
	$res21=$_POST['res21'];
	$res22=$_POST['res22'];
	$res23=$_POST['res23'];
	$res24=$_POST['res24'];
	$res25=$_POST['res25'];
	$res26=$_POST['res26'];

	$a = array($res1,$res2,$res3,$res4,$res5,$res6,$res7,$res8,$res9,$res10,$res11,$res12,$res13,$res14,$res15,$res16,$res17,$res18,$res19,$res20,$res21,$res22,$res23,$res24,$res25,$res26 );
	$calf= array_sum($a);

	


	
mysqli_query($mysqli,"update diagnostico1 set calificacion='$calf' where id_user='$id_user'");
echo ' <script language="javascript">alert("Estudiante calificado!");</script> ';
echo "<script>location.href='admin_curso.php'</script>";
	
?>
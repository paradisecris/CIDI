<?php
require("connect_db.php");
?>
<?php
	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];
	$gender=$_POST['gender'];
	$academico=$_POST['academico'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$estado=$_POST['estado'];
	$escuela=$_POST['escuela'];
	$actor=$_POST['actor'];
	$tipo_acoso=$_POST['tipo_acoso'];
	$area_acoso=$_POST['area_acoso'];
	$acosador=$_POST['acosador'];
	$reporte=$_POST['reporte'];
	
mysqli_query($mysqli,"INSERT INTO reportes VALUES('','$nombre','$edad','$gender','$academico','$correo','$telefono','$estado','$escuela','$actor','$tipo_acoso','$area_acoso','$acosador','$reporte')");
echo ' <script language="javascript">alert("Reporte generado con exito en breve nos pondremos en contacto atraves de los medios proporcionados, gracias por reportar no estas solo");</script> ';
echo "<script>location.href='index.php'</script>";
	
?>
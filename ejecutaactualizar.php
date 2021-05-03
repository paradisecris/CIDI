<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$user=$_POST['user'];
	
	
	$email=$_POST['email'];
	$permisos=$_POST['rol'];


	if($permisos=="Usuario")
	{
		$pass=$_POST['pass'];
		$md5= md5($pass);
		$sentencia="update login set user='$user', password='$md5', email='$email' where id='$id'";
	}
	else
	{
		$pasadmin=$_POST['pasadmin'];
		$md5= md5($pasadmin);
		$sentencia="update login set user='$user', email='$email', pasadmin='$md5' where id='$id'";
	}
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: administrador.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>
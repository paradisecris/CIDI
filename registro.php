<?php
require("connect_db.php");
?>
<?php
	$realname=$_POST['realname'];
	$gender=$_POST['gender'];
	$ocupacion=$_POST['ocupacion'];
	$telefono=$_POST['telefono'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$state=$_POST['estado'];
	$newsletter=$_POST['newsletter'];
	$mpass=md5($pass);
	
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$gender','$ocupacion','$telefono','$mail','$mpass','$state','$newsletter','','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='sesion.php'</script>";
			}
		}else{
			echo '<script language="javascript">alert("Las contraseñas son incorrectas");</script> ';
			echo "<script>location.href='login.php'</script>";
		}
?>
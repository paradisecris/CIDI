
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$key=$_POST['pass'];
	$pass=md5($key);

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin'] && $f2['rol']==1 ){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password'] && $f['rol']==2){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: documentos.php");

		}


	}
	$sql3=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f3=mysqli_fetch_assoc($sql3)){
		if($pass==$f3['pasadmin'] && $f3['rol']==3){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: admin_curso.php");
		}else{
			echo '<script>alert("Los datos no son correctos por favor vuelve a intentarlo (error C404)")</script> ';
		
			echo "<script>location.href='sesion.php'</script>";
		}
	}else{
		
		echo '<script>alert("Los datos no son correctos por favor vuelve a intentarlo (error R404)")</script> ';
		
		echo "<script>location.href='sesion.php'</script>";	

	}

?>
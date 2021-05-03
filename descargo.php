<?php
require("connect_db.php");
$id_archivo=$_POST['id_archivo'];
$id_user = $_POST['id_user'];
$ruta = $_POST['ruta'];


$resultado=mysqli_query($mysqli,"INSERT INTO descargas VALUES('$id_user',$id_archivo,current_timestamp)");


echo "<script>location.href='archivos/$ruta'</script>";
?>
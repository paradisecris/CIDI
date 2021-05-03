<?php
require("connect_db.php");
$producto1=mysqli_query($mysqli,"SELECT * FROM productos WHERE id_producto=1");
$row1 = mysqli_fetch_assoc($producto1);
/*
echo "Nombre:  " . $row1['nombre'];
echo "<br>Ingredientes: " .$row1['ingredientes'];
echo "<br>Precio:  " . $row1['precio'];*/



$producto2=mysqli_query($mysqli,"SELECT * FROM productos WHERE id_producto=2");
$row2 = mysqli_fetch_assoc($producto2);

$producto3=mysqli_query($mysqli,"SELECT * FROM productos WHERE id_producto=3");
$row3 = mysqli_fetch_assoc($producto3);
                      
?>
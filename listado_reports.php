<?php
$criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
$pagina = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
$registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
include_once 'reportes.php';
include_once 'paginador.php';

?>

<table border="1" class="table">
    <thead class="table table-hover">
        <tr class="warning">
            <!--<td>Id</td>-->
            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Telefono</td>
            <td>Estado</td>
            <td>Reporte</td>
            
            <td>Borrar</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $reporte = new Reporte();
        $cantidad = $reporte->listado(2, $criterio, $pagina, $registro);

        $funcion = "buscarreporte";

        $array = $reporte->listado(1, $criterio, (($pagina - 1) * $registro), $registro);

        foreach ($array as $value) {
            $id=$value['id'];
            ?>
            <tr class="success">
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['nombre'] ?></td>
                <td><?php echo $value['correo'] ?></td>
                <td><?php echo $value['telefono'] ?></td>
                <td><?php echo $value['estado'] ?></td>
                <td><?php echo $value['reporte'] ?></td>
                
                <?php
                   
                    echo "<td><a href='admin_reportes.php?id=$id&idborrar=2'><img src='img/eliminar.png' class='img-rounded'/></a></td>";
                ?>
            </tr>
            <?php
             


                    extract($_GET);
                    require('connect_db.php');
                    if(@$idborrar==2){
        
                        $sqlborrar="DELETE FROM reportes WHERE id=$id";
                        $resborrar=mysqli_query($mysqli,$sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='admin_reportes.php'</script>";
                    }
                }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <td colspan="8">
                <?php
                $p = new paginador();
                echo $p->pagination($cantidad, $pagina, $funcion, $criterio, $registro, 4);
                ?>
            </td>
        </tr>
    </tfoot>
</table>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
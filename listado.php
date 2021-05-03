<?php
$criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
$pagina = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
$registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
include_once 'archivos.php';
include_once 'paginador.php';
?>

<table border="1" class="table">
    <thead class="table table-hover">
        <tr class="warning">
            <!--<td>Id</td>-->
            <td>Fecha creacion</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Ruta</td>
            <td>Tipo</td>
            <td>Tamaño (bytes)</td>
            <td>Editar</td>
            <td>Borrar</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $archivo = new Archivo();
        $cantidad = $archivo->listado(2, $criterio, $pagina, $registro);

        $funcion = "buscararchivos";

        $array = $archivo->listado(1, $criterio, (($pagina - 1) * $registro), $registro);

        foreach ($array as $value) {
            $id=$value['id'];
            ?>
            <tr class="success">
                <!--<td><?php echo $value['id'] ?></td>-->
                <td><?php echo $value['created_at'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td><?php echo $value['ruta'] ?></td>
                <td><?php echo $value['tipo'] ?></td>
                <td><?php echo $value['size'] ?></td>
                <?php
                echo "<td><a href='actualizar_file.php?id=$id'><img src='img/actualizar.gif' class='img-rounded'  ></td>";
                echo "<td><a href='admin_files.php?id=$id&idborrar=2'><img src='img/eliminar.png' class='img-rounded'/></a></td>";
                ?>
            </tr>
            <?php
             


                    extract($_GET);
                    require('connect_db.php');
                    if(@$idborrar==2){
        
                        $sqlborrar="UPDATE archivos SET id_status=3 WHERE id=$id";
                        $resborrar=mysqli_query($mysqli,$sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='admin_files.php'</script>";
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
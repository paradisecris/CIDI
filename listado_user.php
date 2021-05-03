<?php
$criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
$pagina = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
$registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
include_once 'usuarios.php';
include_once 'paginador.php';
?>

<table border="1" class="table">
    <thead class="table table-hover">
        <tr class="warning">
            <!--<td>Id</td>-->
            <td>ID</td>
            <td>Nombre</td>
            <td>Genero</td>
            <td>Ocupacion</td>
            <td>Telefono</td>
            <td>Correo</td>
            <td>Estado</td>
            <td>Newsletter</td>
            <td>Editar</td>
            <td>Borrar</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $usuario = new Usuario();
        $cantidad = $usuario->listado(2, $criterio, $pagina, $registro);

        $funcion = "buscarusuario";

        $array = $usuario->listado(1, $criterio, (($pagina - 1) * $registro), $registro);

        foreach ($array as $value) {
            $id=$value['id'];
            if($value['newsletter']==1)
            {
                $newsletter="SI";
            }
            else
            {
                $newsletter="NO";
            }
            ?>
            <tr class="success">
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['user'] ?></td>
                <td><?php echo $value['gender'] ?></td>
                <td><?php echo $value['ocupacion'] ?></td>
                <td><?php echo $value['telefono'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['estado'] ?></td>
                <td><?php echo $newsletter ?></td>
                <?php
                echo "<td><a href='actualizar.php?id=$id'><img src='img/actualizar.gif' class='img-rounded'  ></td>";
                echo "<td><a href='admin.php?id=$id&idborrar=2'><img src='img/eliminar.png' class='img-rounded'/></a></td>";
                ?>
            </tr>
            <?php
             


                    extract($_GET);
                    require('connect_db.php');
                    if(@$idborrar==2){
        
                        $sqlborrar="DELETE FROM login WHERE id=$id";
                        $resborrar=mysqli_query($mysqli,$sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='admin.php'</script>";
                    }
                }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <td colspan="10">
                <?php
                $p = new paginador();
                echo $p->pagination($cantidad, $pagina, $funcion, $criterio, $registro, 4);
                ?>
            </td>
        </tr>
    </tfoot>
</table>
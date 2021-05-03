<?php
$criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
$pagina = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
$registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
include_once 'alumnos.php';
include_once 'paginador.php';
?>

<table border="1" class="table">
    <thead class="table table-hover">
        <tr class="warning">
            <!--<td>Id</td>-->
            <td>ID Respuesta</td>
            <td>Respondio</td>
            <td>Nombre</td>
            <td>Calificacion</td>
            <td>Calificar</td>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $alumno = new Alumno();
        $cantidad = $alumno->listado(2, $criterio, $pagina, $registro);

        $funcion = "buscaralumno";

        $array = $alumno->listado(1, $criterio, (($pagina - 1) * $registro), $registro);

        foreach ($array as $value) {
            $id=$value['id_user'];
            ?>
                <tr class="success">
                <td><?php echo $value['id_respuesta'] ?></td>
                <td><?php echo $value['created_at'] ?></td>
                <td><?php echo $value['pregunta1'] ?></td>
                <td><?php echo $value['calificacion'] ?></td>
                <?php
                echo "<td><a href='result_examen1.php?id=$id'><img src='img/calificar.jpg' width='50' height='50' class='img-rounded'></td>";
                
                ?>
            </tr>
            <?php
             


                    
                    
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
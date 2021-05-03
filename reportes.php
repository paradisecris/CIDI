<?php

include_once('conexion.php');

class Reporte{

    function listado($flag, $criterio, $pagina, $registro) {

        $con = new Conect_MySql();

        $sql = "CALL sp_paginadorReportes('$flag','$criterio','$pagina','$registro')";

        $sel = $con->execute($sql);

        while ($row = $con->fetch_row($sel)) {
            if ($flag == 1) {
                $data[] = $row;
            } else {
                $data = $row['total'];
            }
        }

        $con->close_db();

        return $data;
    }

}



<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
</head>


<?php
require("connect_db.php");

              $query = "SELECT * FROM reportes";
              $result = mysqli_query($mysqli,$query);
              while ($row = $result->fetch_assoc()){



?>


           <!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mod<?php echo $row['id']?>">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="mod<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $row['nombre']?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label>Edad: <?php echo $row['edad']?></label><br>
        <label>Identidad de genero: <?php echo $row['gender']?></label><br>
        <label>Grado escolar: <?php echo $row['academico']?></label><br>
        <label>Correo: <?php echo $row['correo']?></label><br>
        <label>Telefono: <?php echo $row['telefono']?></label><br>
        <label>Estado: <?php echo $row['estado']?></label><br>
        <label>Escuela: <?php echo $row['escuela']?></label><br>
        <label>Actor: <?php echo $row['actor']?></label><br>
        <label>Tipo de acoso: <?php echo $row['tipo_acoso']?></label><br>
        <label>Area de acoso: <?php echo $row['area_acoso']?></label><br>
        <label>Acosador: <?php echo $row['acosador']?></label><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--

<div class="modal fade" id="<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label>Edad: <?php echo $row['edad']?></label><br>
        <label>Identidad de genero: <?php echo $row['gender']?></label><br>
        <label>Grado escolar: <?php echo $row['academico']?></label><br>
        <label>Correo: <?php echo $row['correo']?></label><br>
        <label>Telefono: <?php echo $row['telefono']?></label><br>
        <label>Estado: <?php echo $row['estado']?></label><br>
        <label>Escuela: <?php echo $row['escuela']?></label><br>
        <label>Actor: <?php echo $row['actor']?></label><br>
        <label>Tipo de acoso: <?php echo $row['tipo_acoso']?></label><br>
        <label>Area de acoso: <?php echo $row['area_acoso']?></label><br>
        <label>Acosador: <?php echo $row['acosador']?></label><br>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>-->

            <?php     
              }

            ?>
 



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>




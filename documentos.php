<?php
require("connect_db.php");
require("navbar.php");

?>

<HTML>
	<BODY>
		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
			    <h1 class="display-4">Archivos de consulta</h1>
			    <p class="lead">Encuentra informacion de tu interes y alimenta tu conocimiento</p>

					<div class="card mb-3" style="max-width: 540px;">
  						<div class="row g-0">
						<?php
							$query = "SELECT * FROM archivos where id_status=1 order by created_at desc";
							$result = mysqli_query($mysqli,$query);
							while ($row = $result->fetch_assoc()){

								$tipo=$row['tipo'];
								$pdf='application/pdf';
								$video='video/mp4';
								if ($tipo==$pdf):
								
									$imagen="img/pdf.jpg";
								
								elseif($tipo==$video): 
								
									$imagen="img/video.jpg";
								else:
									$imagen="img/imagen.jpg";
								endif;
						?>		
								
							   <!-- <div class="card" style="width: 18rem;">
								  <img class="card-img-top" width="200" height="200" src=<?php echo $imagen?> alt="Card image cap">
								  <div class="card-body">
								    <h5 class="card-title"><?php echo $row['name']?></h5>
								    <p class="card-text"><?php echo $row['description']?></p>
								    <a href="#" class="btn btn-primary">descargar</a>
								  </div>
								</div> 

								
							    <img src="<?php echo $imagen?>" width="100" height="100"  alt="...">
								    <div class="card-body">
								      <h5 class="card-title"><?php echo $row['name']?></h5>
								      <p class="card-text"><?php echo $row['description']?></p>
								      <p class="card-text"><small class="text-muted"><?php echo $row['created_at']?></small></p>
								    </div> -->
								    <div class="col-md-4">
								      <img src="<?php echo $imagen?>"  width="200" height="200" alt="...">
								    </div>
								    <div class="col-md-8">
								      <div class="card-body">
								        <h5 class="card-title"><?php echo $row['name']?></h5>
								        <p class="card-text"><?php echo $row['description']?></p>
								        <p class="card-text"><small class="text-muted">Subido: <?php echo $row['created_at']?></small></p>
								        <p class="card-text">
								        	<form action="descargo.php" method="POST"  class="navbar-search form-inline">
											<input type="hidden" name="id_archivo" value="<?php echo $row['id']?>">
											<input type="hidden" name="id_user" value=<?php echo $_SESSION['id']?>>
											<input type="hidden" name="ruta" value=<?php echo $row['ruta']?>>
											<a class="nav-link"	 href="archivos/<?php echo $row['ruta']?>" download="<?php echo $row['ruta']?>">
												<input type="submit" value="Descargar" class="btn btn-success">
											</a>
											</form>
										</p>
										
								      </div>
								    </div>
							    




						<?php	    
							}

						?>
					  		</div>
						 </div>

					 
					</div>
				</div>
		</div>


	</BODY>
</HTML>
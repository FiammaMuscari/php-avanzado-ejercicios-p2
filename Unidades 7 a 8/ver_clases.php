<?php 
		include('conexion.php');

		$consultar_clases=mysqli_query($datos_db, "SELECT * FROM clases");

		while($listar_clases= mysqli_fetch_assoc($consultar_clases)){


		?>

		
		<div class="Clases" id='agendaClases'>
			<div class="unidad">
				<h1><?php echo $listar_clases['unidad']?></h1>
			</div>
			<div class="fecha">
				<h3><?php echo $listar_clases['fecha']?></h3>
			</div>
		</div>
	<?php } ?>
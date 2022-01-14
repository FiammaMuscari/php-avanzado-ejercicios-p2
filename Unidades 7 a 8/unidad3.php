<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Haz un comentario!</h2>

		<form method="POST" action="unidad3.php" enctype="multipart/form-data">
				<input type="text" name="nombre" placeholder="nombre y apellido" max="20" required>
				<input type="email" name="email" placeholder="email" max="20" required>
				<input type="textarea" name="comentario" placeholder="comentario" max="200" required>
				<input id='enviarcoment' type="submit" value="enviar">
			</form>
			<?php  
		    if($_POST){    
				echo '<h2>Comentario enviado</h2>';
			}
			include('comentarios.php')
		?>
	</section>
	
	<aside >
		
    <?php  
			$archivo_abrir_lectura = fopen ('comentarios.txt','r');
			fpassthru($archivo_abrir_lectura);
			fclose($archivo_abrir_lectura);
			?>
	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
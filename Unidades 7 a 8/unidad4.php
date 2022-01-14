

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
		<h2>Imágenes con PHP</h2>
		<?php

			$ruta = 'imagenes/unidad4.jpg';
			$base = imagecreatefromjpeg($ruta);

			$imgAncho = imagesx($base);
			$imgAlto =imagesy($base);

			$ancho_mini = $imgAncho/3.41;
			$alto_mini = $imgAlto/3.41;

			$imagen = imagecreate($ancho_mini,$alto_mini);

			imagecopyresized($imagen,$base,0,0,0,0,$ancho_mini,$alto_mini,$imgAncho,$imgAlto);
			imagejpeg($imagen, 'imagenes/imagen_mini.jpg');

			?>
		<div style="display: grid; justify-content: center; gap: 1em; margin-bottom: 2em;">
			<div style="display: flex; justify-content: center;">
				<img style='border-radius:3px;' src="imagenes/imagen_mini.jpg">	
			</div>
			<div>
				<img style='border-radius:3px;' src="marca_agua.php">
			</div>
		</div>
		
	</section>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
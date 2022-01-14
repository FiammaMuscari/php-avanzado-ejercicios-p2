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
		<h2>Enviar comentarios</h2>
		<form method="post" action='enviamail.php' style="display:grid; gap:1em;">
			<input type='text' name='nombreyapellido' required placeholder="Nombre y Apellido" maxlength="20">
			<input type="email" name="email" placeholder="E-mail" max="20" required>
			<input type="textarea" name="consulta" placeholder="Consulta" max="200" required autocomplete="off">
			<input  type="submit" value="enviar">
		</form>
		
	</section>
	<aside>
    <?php
		if(isset($_GET['mailok'])) {
		  echo "<h2>El comentario se envió correctamente!😄</h2>";
		} 
		if(isset($_GET['mailfail'])) { 
		echo "<h3>Error de envío 😔<br> Intentelo nuevamente.</h3>";
		}
			?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
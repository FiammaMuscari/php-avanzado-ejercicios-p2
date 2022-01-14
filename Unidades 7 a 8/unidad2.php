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
		<h2>Eventos</h2>
		<form method="POST" >
			<input type="number" name="dia" placeholder="Ingresar día" min="1" max="31" required>
			<input type="number" name="mes" placeholder="Ingresar mes" min="1" max="12" required>
			<input type="number" name="año" placeholder="Ingresar año" min="2020" max="3000" required>
			<input type="submit" value="Calcular">
		</form>
	</section>
	<aside>
    <?php include("calculo_fecha.php"); ?>   
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
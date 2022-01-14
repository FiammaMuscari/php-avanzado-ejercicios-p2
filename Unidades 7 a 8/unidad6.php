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
		<h2>Usuarios</h2>
		<form method="POST" id="unidad6">
			<input type='text' name='nombre' placeholder="Nombre" maxlength="20" required style="text-transform:capitalize;" >
			<input type='text' name='apellido' placeholder="Apellido" maxlength="20" required style="text-transform:capitalize;">
			<input type="number" name='edad' placeholder="Edad" min="1" max="120" required>
			<input type="submit" value="Ingresar">
		</form>

	</section>
	<aside>
    <?php include("caract_usuarios.php") ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
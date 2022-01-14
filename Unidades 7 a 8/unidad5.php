<?php session_start(); ?>
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
		
		<h2>Consultas</h2>
		<form method="POST" action='cargar.php' style="display:grid; gap:1em;">
			<input type='text' name='nombre' required placeholder="Nombre" maxlength="20">
			<input type='text' name='apellido' required placeholder="Apellido" maxlength="20">
			<input type="email" name="email" placeholder="email" max="20" required>
			<input type="textarea" name="consulta" placeholder="consulta" max="200" required autocomplete="off">
			<label>Verificación:</label>
			<?php
			function texto_captcha() {
				$texto = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$codigo = ''; // codigo referido abajo

				for($i=0; $i<6; $i++){
					$codigo .= $texto[rand(0,61)]; //concatenar datos, sumando los valores de la variable letra por letra
				}

				return $codigo; //generar codigo de captcha
			}

			$_SESSION['captcha'] = texto_captcha(); //para poder trasladar la funcion para la verificacion 

		?>
			
			<img  src="captcha.php">
			
			<input type="text" name="codigoCaptcha" placeholder="Código" required autocomplete="off">
			<input id='enviarcoment' type="submit" value="enviar">
		</form>
		<?php if(isset($_GET['enviado'])){
			echo "<h3 style='margin-bottom: 5rem;'>Consulta Enviada!</h3>";
		};
		?>
		<?php
		if(isset($_GET['error'])){
			echo"<h3 style='margin-bottom: 5rem;'>Error de código</h3>";
		}
		?>
	</section>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
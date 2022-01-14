<?php
	session_start();
	header("Content-Type:image/jpeg");
	$imagen = imagecreate(120, 40);
	$colorFondo = imagecolorallocate($imagen, 255, 80, 80);
	$colorTexto = imagecolorallocate($imagen, 255, 255, 255);
	imagestring($imagen, 100, 32, 10, $_SESSION['captcha'], $colorTexto);
	imagejpeg($imagen);
?>
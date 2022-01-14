<?php
			$original = 'imagenes/imagensinmarca.jpg';
			$marca_agua = 'imagenes/marca.png';

			$img_original = imagecreatefromjpeg($original);
			$img_marca = imagecreatefrompng($marca_agua);

			imagecopy($img_original, $img_marca, 150, 110, 0, 0, imagesx($img_marca), imagesy($img_marca));

			header("Content-type: image/jpeg");
			imagejpeg($img_original)
			?>
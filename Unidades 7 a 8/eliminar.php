<?php
include('recursos.php');

$carrito->eliminar_compra($_GET['codigo']);

header('Location: unidad7.php');
	
?>
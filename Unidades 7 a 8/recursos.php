<?php
include("basededatos.php");
include("productos.php");
include("carrito.php");

define('HOST','localhost');
define('USUARIO','root');
define('CLAVE','');
define('BASE','phpavanzado');

$base = new Basededatos(HOST, USUARIO, CLAVE, BASE);
$producto = new Producto($base);
$carrito = new Carrito($base);
?>
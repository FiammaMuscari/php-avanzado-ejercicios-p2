<?php
include('recursos.php');

$carrito->insertar_compra($_GET['cod'], $_GET['pro'], $_GET['des'], $_GET['pre']);

header('Location: unidad7.php');
?>
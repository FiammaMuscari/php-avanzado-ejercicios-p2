<?php
include('conexion.php');

$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

mysqli_query($datos_db,"INSERT INTO clases VALUES(DEFAULT, '$unidad', '$fecha')");

header("Location: unidad1.php?enviado");

?>
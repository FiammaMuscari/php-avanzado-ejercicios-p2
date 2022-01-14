<?php 
include("usuarios.php");

if($_POST)
    { 	$nombre_mostrar = $_POST['nombre'];
        $apellido_mostrar = $_POST['apellido'];
        $edad_mostrar = $_POST['edad'];

        $usuario = new usuarios($nombre_mostrar,$apellido_mostrar,$edad_mostrar);

        $usuario->imprime_caracteristicas();
    }
?>
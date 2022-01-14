<?php
include('conexion.php');

session_start();
if($_POST['codigoCaptcha']==$_SESSION['captcha']) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    mysqli_query($datos_db,"INSERT INTO consultas VALUES(DEFAULT, '$nombre', '$apellido','$email','$consulta')");

    header("Location: unidad5.php?enviado");

}else {
    header("Location: unidad5.php?error");
}

?>
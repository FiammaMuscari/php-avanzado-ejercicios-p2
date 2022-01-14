<?php 
    if($_POST)
    {
    $nombre = $_POST['nombre'];
    $email= $_POST['email'];
    $comentario= $_POST['comentario'];

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha_actual = date('d-m-Y H:i', time());
    
    
    $archivo_abrir = fopen ('comentarios.txt', 'a+');
    $texto_comentario = "<div class='comentario'><p><strong>Nombre y Apellido:</strong> ${nombre}</p><p><strong>Email:</strong> ${email}</p><p><strong>Comentario:</strong> ${comentario}</p><p><strong>Fecha:</strong> $fecha_actual</p></div>";
    fputs ( $archivo_abrir, $texto_comentario);
    fclose($archivo_abrir);
    }

?>
<?php
require("librerias/class.phpmailer.php");
require("librerias/class.smtp.php");

if (isset($_POST["nombreyapellido"]) && isset($_POST["email"]) && isset($_POST["consulta"]) ) {
    $nomyap = $_POST["nombreyapellido"];
    $email = $_POST["email"];
    $comentario = $_POST["consulta"];
    $comhtml = nl2br($comentario);

    $recipient = "fiammamuscari@gmail.com"; // correo electronico deseado
    $smtpServer = "smtp.gmail.com"; 
    $smtpUserName = "pruebasdeprogramaciones@gmail.com";
    $smtpPassword = "Contra1234";

    $mailer = new PHPMailer();
    $mailer->isSMTP();
    $mailer->SMTPAuth = TRUE;
    $mailer->Port = 587;
    $mailer->isHTML(true);

    $mailer->Host = $smtpServer;
    $mailer->Username = $smtpUserName;
    $mailer->Password = $smtpPassword;
    
    $mailer->From = $smtpUserName; //mail que recibe mensaje y reeenvia al mail que quieras;
    $mailer->addAddress($recipient);

    $mailer->Subject = ">>> Comentario de ". $nomyap ." en UNIDAD 8 <<<";
    
    $mailer->Body = '
        <html> 
        <body> 
        <h1 style="background-color: bisque;color: brown;"> Nuevo comentario de la Unidad 8</h1>
        <h2 style=";color: black;">📌 Nombre: '.$nomyap.'</h2>
        <h2 style=";color: black;">📌 Email: '.$email.'</h2>
        <h3>📝 Comentario: '.$comhtml.'</h3>
        </body> 
        </html>';
    
    $mailer->AltBody = $comentario.'\n\n';
    
    $mailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    $sentState = $mailer->Send(); 

    if($sentState){
        //enviado;
        header("Location: unidad8.php?mailok");
    } else {
        //error;
        header("Location: unidad8.php?mailfail");
    }

}
?>
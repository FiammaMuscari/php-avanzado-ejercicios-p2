<?php 
if ($_POST) {

	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$año = $_POST['año'];

	$fecha_actual = date('d-m-Y', time());
	$fecha_ingresada = date_create_from_format("d-m-Y","$dia-$mes-$año")->format("d-m-Y");
	$calculo=strtotime($fecha_ingresada)-strtotime($fecha_actual);
    
	if($calculo >= 0){
    echo '<p> Faltan <b>'.$calculo / (86400).'</b> días para el evento</p>';}
    if($calculo <= 0){
        echo '<p> Pasaron <b>'.$calculo / (-86400).'</b> días del evento</p>';}
    }

?>
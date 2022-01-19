<?php 

$nombre_us = $_POST ['nombre'];
$mail_us = $_POST ['mail'];
$telefono_us = $_POST ['telefono'];
$mensaje_us = $_POST ['mensaje'];
$archivo = $_POST ['archivo'];

/*
echo "$nombre_us <br/>";
echo "$mail_us <br/>";
echo "$telefono_us <br/>";
echo "$mensaje_us <br/>";
echo "$adjunto_us <br/>";
*/


if(!($_POST['nombre']) || !($_POST['mail']) || ($_POST['mensaje']) ){
	 
	 header("location:index.php?r=error");
	 
}else{

$destino = 'info@registrosya.com';
$asunto = 'Contacto desde mi sitio www.ingeniame.com';
$remitente = 'From: mail_us';

$mensaje = "Nombre:".$nombre_us."\r\n";
$mensaje .= "Mail:".$mail_us."\r\n";
$mensaje .= "Teléfono:".$telefono_us."\r\n";
$mensaje .= "Mensaje:".$mensaje_us."\r\n";
$mensaje .= "Adjunto:".$archivo;


mail($destino, $asunto, $mensaje, $remitente);

	header("location:index.php?r=ok");

 };
?>
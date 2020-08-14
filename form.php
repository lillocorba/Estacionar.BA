<?php

$destinatario = "agustin.corbalan1723@gmail.com";
$asunto = "Consulta Estacionar BA";
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];
$header = "Enviado desde Estacionar BA";
$mensajeCompleto = $mensaje . "\n\nNombre: " . $nombre . " / Email: " . $email;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>
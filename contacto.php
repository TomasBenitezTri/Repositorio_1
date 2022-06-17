<?php 
$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$correo_form = $_POST ['correo'];
$mensaje_form = $_POST ['mensaje'];

$cuerpo_mail = "Nombre: " . $nombre_form . "\r\n" . 
"Apellido: " . $apellido_form . "\r\n" . "Correo: " . 
$correo_form . "\r\n" . "Mensaje: " . $mensaje_form;

mail("tomasbenitezc13@gmail.com", "Mensaje enviado desde mi sitio web", $cuerpo_mail);
?>
<script>

window.location="consulta.php";

</script>
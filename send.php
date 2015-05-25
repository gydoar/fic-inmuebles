  <?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono: " . $telefono . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'arriendos@fic-inmuebles.com';
$asunto = 'Formulario Fondo Inmobiliario Colombia';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '';

header ("Location: http://www.fic-inmuebles.com/new/index.html");
?>
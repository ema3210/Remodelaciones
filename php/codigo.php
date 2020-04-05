<?php
//CAPUTA DE VARIABLES
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];

//CUERPO DEL EMAIL
%mensaje="
<strong>Nombre:</strong> $nombre <br /> <br />
<strong>Email:</strong> $email <br /> <br />
<strong>Consulta:</strong> $consult <br /> <br />
"

//ENVIO DEL EMAIL
mail("ema.mrs@hotmail.com", "Consulta Web Site", $mensaje, "From: $nombre<$mail>\nReply-To":$mail\nContent-Type: text\html; charset=iso-8859-1\n);
?>

<?php
require "../view/contact/phpmailer/class.phpmailer.php";

//$a="Jonathan";
//$b="emmanuespook@hotmail.com";
$asunto="FreemexStore,Bienvenido.";


$body="<html>
<body>
<div style='height: 150px;'>
	<img style='max-width: 100%; height: 150px;position: fixed; right: 100px;' src='http://www.freemexstore.com/store/image/freemex.png'>
</div>
<br>
<div>
	<center><h1>Bienvenido a Freemex Store</h1></center>
<b style='padding-left: 150px; font-size: 18px;'>".$a."</b>
<br>
</div>
<div style='width: 75%; padding-left: 150px; padding-bottom: 100px;'>
<p style='font-family: Arial, Helvetica, sans-serif; font-size: 16px;'>
El registro se a procesado de manera exitosa a partir de estos momentos ya puedes utilizar tu cuenta, donde podrás contactarte con miles de proveedores de diferente sitios, quien ofrecen miles de productos a los mejores precios.
</p>
<br><br>

<p style='font-size: 20px; color: black; font-weight:bold;'>¡Qué esperas, empieza a comprar!</p>
<br>
<p>Da click en el link de nuestra página <a href='www.freemexstore.com'>www.freemexstore.com</a></p>

</div>

<div style='padding-left: 150px;'>
<p>Siguenos en nuestros sitios:</p>
<a href='https://www.youtube.com/watch?v=ormgabLrkA0&feature=youtu.be'>
	<img style='padding-right: 50px;' src='http://www.freemexstore.com/store/image/youtube.png' width='75' height='25'>
</a>
&nbsp&nbsp
<a href='https://www.facebook.com/FreemexStore/?ref=settings'>
	<img style='padding-right: 50px;' src='http://www.freemexstore.com/store/image/facebook.png' width='75' height='25'>
</a>
&nbsp&nbsp
<a href='tel:+525581245044'>
	<img src='http://www.freemexstore.com/store/image/whats.png' width='75' height='25'>
</a>

</div>

</body>
</html>";

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->From= "freemexstore@freemexstore.com";
    $mail->FromName = "Freemex Store"; 

     $mail->AddAddress($b, "FreemexStore"); // Direccion a la que llegaran los mensajes clientes.freemex.2030@gmail.com
   	$mail->Subject =$asunto;
   	$mail->MsgHTML($body);
   	$mail->CharSet = 'UTF-8';

   	if(!$mail->Send()) {
	echo "<script>alertify.alert('<h3>Error al enviar el correo... No se preocupe a sido registrado.<b> BIENVENIDO!!</b>. Solo necesitas Iniciar Sesión para comprar o vender</h3>', function () {
					window.location='../view/auth/';
				});
	 </script>";
	//echo "<div class='container'><div class='alert alert-warning'>Error al enviar el correo... No se preocupe a sido registrado. BIENVENIDO!!</div></div>";
	//history.back();
	} else {
	 	echo "<script>alertify.alert('<b>BIENVENIDO!!!</b>, Solo necesitas Iniciar Sesión para comprar o vender');</script>";
	 	//<script>alert('Formulario enviado exitosamente, le responderemos pronto.');location.href ='../../';</script>
	}
?>
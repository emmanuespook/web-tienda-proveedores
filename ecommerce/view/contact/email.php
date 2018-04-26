<?php
require "phpmailer/class.phpmailer.php";
	 
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$cant=$_POST['cantidad'];
	$mensaje=$_POST['mensaje'];
	$product=$_POST['nombre_product'];
	$semail=$_POST['emailseller'];


	$body="Nombre: ".$nombre;
	$body.="<br>Correo: ".$email;
	$body.="<br>Mensaje: ".$mensaje;
	$body.="<br><br>";
	$body.="Producto: ".$product."<br> Cantidad: ".$cant;
	


	$asunto="FreemexStore,Contacto";

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->From= $email;
    $mail->FromName = $nombre; 
	
	
    $mail->AddAddress($semail, "FreemexStore"); // Direccion a la que llegaran los mensajes clientes.freemex.2030@gmail.com
   	$mail->Subject =$asunto;
   	$mail->MsgHTML($body);
   	$mail->CharSet = 'UTF-8';
  
     if(!$mail->Send()) {
	echo "<script>alert('Error al enviar el mensaje: " . $mail->ErrorInfo."');history.back();</script>";
} else {
 	echo "<script>alert('Formulario enviado exitosamente, le responderemos pronto.');location.href ='../../';</script>";
}
   
    
?>
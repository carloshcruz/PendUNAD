<?php 
	$nombre = $_POST['name'];
	$asunto = 'Formulario Rellenado';
	$email = $_POST['email'];
	$mensaje = "Nombre: ".$name."<br> Email: $email<br> Mensaje:".$_POST['message'];


	if(mail('carloshernancruzlopez@gmail.com', $subject, $message)){
		echo "Correo enviado";
	}
 ?>
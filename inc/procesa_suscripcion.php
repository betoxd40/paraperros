<?php

	$nombre = $_POST["fullName"];
	$email = $_POST["email"];
	$vlbla_db1 = "contactos";
	$email_to="paraperrostoday@gmail.com";
	$email_corporativ="Suscripción ParaPerros <paraperrostoday@gmail.com>";
	$email_subject="Suscripción ParaPerros";
	$email_message="Alguien se suscribió al blog ParaPerros.\n\n";
	$email_message .= "Nombre: " . $_POST['fullName'] . "\n";
	$email_message .= "E-mail: " . $_POST['email'] . "\n";

	$bcc="paraperrostoday@gmail.com";

	 ?><p>Gracias. La informacion ha sido enviada correctamente!</p><?php

	//Notificaciones
	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'BCC: '.$bcc."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

?>

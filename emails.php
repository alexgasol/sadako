<?php

function Autoresponder($user, $mail) 
{
	// Mail al nuevo usuario
	$destination = $mail;
	$subject =  $user . ", gracias por contactar con nosotros";
	$message = '
		<html lang=es>

			<head>
				<meta charset="utf-8" />
			</head>

			<body>

				<section>
					<h2>¡Gracias por confiar en nosotros!</h2>

					<p>Acabas de dar el primer paso para tener el mejor ramo del mundo</p>
					<p>En breve te escribiremos para empezar a prepararlo todo.</>
				</section>

				<footer>
					<p>Copyright © 2014 Sadako, todos los derechos reservados.</p>
					<p>¿No quieres que te enviemos más emails?</p>
					<p>Sólo tienes que enviarnos un email a <a class="mail" href="mailto:lasgrullasdesadako@gmail.com">lasgrullasdesadako@gmail.com</a> indicandonoslo...pero te echaremos de menos.</p>
				</footer>

			</body>

		</html>
		';

	$headers = 'Content-type: text/html; charset=utf-8' . "\r\n" .
		'From: lasgrullasdesadako@gmail.com' . "\r\n" .
		'Reply-To: lasgrullasdesadako@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($destination, $subject, $message, $headers);
}



function NewContact($user, $mail, $comment, $legal)
{
	// Mail al owner de la pagina
	$destination = "alexgasol@gmail.com";
	$subject = "Nuevo contacto de lasgrullasdesadako.com";
	$message = "Tienes un nuevo contacto en la página web lasgrullasdesadako.com " . "\r\n" .
				"/ <strong>Nombre:</strong> " . $user . "\r\n" .
				"/ <strong>Email:</strong> " . $mail . "\r\n" .
				"/ <strong>Comentario:</strong> " . $comment . "\r\n" .
				"/ <strong>Legal:</strong> " . $legal;
	$headers = 'Content-type: text/html; charset=utf-8' . "\r\n" .
		'From: lasgrullasdesadako@gmail.com' . "\r\n" .
		'Reply-To: lasgrullasdesadako@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($destination, $subject, $message, $headers);
}


?>
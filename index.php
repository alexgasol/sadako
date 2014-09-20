<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />    
	<title>Las Grullas de sadako</title>
	<meta name="description" content="Ramos de novia, boutonieres o la decoración completa. En Sadako podemos preparar todo lo necesario para la decoración de tu Boda" />
	<link href="favicon.ico" rel="shortcut icon" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<nav>
			<div class="row">
				<div class="small-6 medium-6 columns">
					<div class="FigureContainer">
						<a href="#">
							<img class="NavLog" src="img/sadako.jpg" width="150px" heigh="auto" alt="Logo Sadako">
						</a>
						
					</div>
				</div>
				<div class="small-6 medium-6 columns">
					<ul class="Social-listSmall right">
		                <li><a class="icon-facebook" href="https://www.facebook.com/lasgrullas.desadako"></a></li>
		                <li><a class="icon-twitter" href="https://twitter.com/grullasdesadako"></a></li>
		                <li><a class="icon-pinterest" href="http://www.pinterest.com/grullasdesadako/"></a></li>
		                <li><a class="icon-instagram" href="http://instagram.com/lasgrullasdesadako"></a></li>
		            </ul>
				</div>
			</div>
		</nav>
	</header>

	<section class="MainSection">
		<div class="row">
			<div class="small-10 medium-8 large-6 columns">
				<a name="Home"></a>
				<article class="MainArticle">
					<h1 class="MainTitle">El Ramo de novia que siempre has soñado desde sólo 70€</h1>
					<p class="MainDescription">Un ramo original, <strong>hecho a mano</strong> y usando el papel como materia prima. Cuéntanos como va a ser tu boda, tu vestido, el lugar y dinos tu presupuesto. <strong>Siempre en contacto contigo</strong>, nos encargaremos de prepararte el ramo ideal para tu boda</p>
					<a href="#FormAnchore" class="MainButton">Yo quiero</a>
				</article>
			</div>
		</div>

	</section>

	<section class="FeaturesSection PaddingContainer">
		<div class="row">
			<div class="small-12 columns center">
				<div class="FeatureIntro">
					<h2 class="FeaturesTitle">No dejes tu sueño a medias</h2>
					<p class="FeaturesDescription">También podemos hacer tu tocado, boutonnieres, souvenirs o cualquier elemento decorativo para la boda de tus sueños.</p>
				</div>
				
			</div>
		</div>
		<div class="row">
			<article>
				
				<div class="small-12 large-4 columns">
					<figure class="FeaturesImgContainer center">
						<a href="#FormAnchore">
							<img class="FeaturesImg" width="300px" heigh="auto" src="img/boutonier.jpg" alt="Sadako Boutonier">
						</a>
						<h3 class="FeaturesItemTitle">Boutonnieres y Tocados</h3>
						<p>Combínalo todo. Tocados y boutonnieres a juego con tu ramo.</p>
					</figure>
				</div>
				
			</article>

			<article>
				
				<div class="small-12 large-4 columns">
					<figure class="FeaturesImgContainer center">
						<a href="#FormAnchore">
							<img class="FeaturesImg" width="300px" heigh="auto" src="img/decoracion.jpg" alt="Decoración">
						</a>
						<h3 class="FeaturesItemTitle">Decoración</h3>
						<p>Personaliza la decoración de tu boda con centros de mesa, decoración mural, moviles decorativos o grandes flores en tu altar.</p>
					</figure>
				</div>
				
			</article>

			<article>
				
				<div class="small-12 large-4 columns">
					<figure class="FeaturesImgContainer center">
						<a href="#FormAnchore">
							<img class="FeaturesImg" width="300px" heigh="auto" src="img/souvenirs.jpg" alt="Souvenirs">
						</a>
						<h3 class="FeaturesItemTitle">Souvenirs</h3>
						<p>Para que tus invitados se lleven el mejor recuerdo de tu gran día.</p>
					</figure>
				</div>
							
			</article>
		</div>
	</section>
	<section class="ConfidenceSection">
		<div class="row">
			<article>
				<div class="small-12 large-6 columns right">
					<div class="PaddingContainer">
						<h2 class="ConfidenceTitle">100% Hecho a mano</h2>
						<p>Ramos, boutonnieres, tocados, souvenirs…todo lo que hacemos esta hecho a mano y con el cuidado que una boda necesita. Usando el papel como materia prima, adaptaremos nuestros diseños y colores a tus necesidades y estilo.</p>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="EtsySection">
		<div class="PaddingContainer">
			<div class="row">
				<div class="small-12 medium-8 columns">
					<div class="EtsySectionText">
						<h2>No puedo esperar</h2>
						<p>Si quieres comprar ya, siempre puedes ir a nuestra tienda de <a href="https://www.etsy.com/shop/LasgrullasdeSadako?ref=si_shop">Etsy</a> alli encontraras todo nuestros productos, eso si, sin personalizar.</p>
					</div>
					
				</div>
				<div class="small-12 medium-4 columns center">
					<figure class="EtsyImgContainer">
						<a href="https://www.etsy.com/shop/LasgrullasdeSadako?ref=si_shop" tarjet="_blank">
							<img class="EtsyImg" src="img/etsy-logo.png" alt="Etsy">
						</a>
					</figure>
				</div>
			</div>
			
		</div>
		<a name="FormAnchore"></a>
	</section>

	<section class="ContactSection center">
		<div class="row">
			<div class="small-12 columns">
				<div class="container">
					
					<?php

					if (isset($_POST["submit"]))
					{
						
						require_once('emails.php');
						require_once('bd/bd_conection.php');

						$ConnDB = DBConnection();
						
						$user 	 = $_POST["name"];
						$mail    = $_POST["email"];
						$comment = $_POST["comment"];
						$legal   = (isset($_POST["legal"])) ? 1 : 0;

						$currentDate = date("Y-m-d");

						$query = "INSERT INTO contacts (fecha, nombre, email, comentarios, legal) VALUES ('" . $currentDate . "', '" . $user . "', '" . $mail . "', '" . $comment . "', '" . $legal . "');";
						$queryResultEvent = $ConnDB->query($query);

						Autoresponder($user, $mail);

						NewContact($user, $mail, $phone, $web, $comment, $legal);
						
						?>

						<h2 class="ContactTitle">¡Estupendo!</h2>
						<p>Ya hemos empezado a pensar en tu ramo. En breve nos pondremos en contacto contigo para todo lo demás.</p>
						<p>Mira nuestras redes sociales, seguro que puedes encontrar inspiración para cuando te contactemos.</p>

						<?php
						
					}
					else
					{
						?>

						<h2 class="ContactTitle">Vale, quiero un ramo, y un tocado y...¡un boutonniere! </h2>
						<p>Fantástico, lo puedes tener todo, pero para ello necesitamos algunos datos, rellena estos campos, explícanos con tus palabras qué necesitas, y en muy poquito contactamos contigo.</p>
						
						<form data-abide action="/sadako/index.php#FormAnchore" method="POST">

							<div class="row">

								<div class="small-12 medium-6 columns">
									<input class="Inputs" name="name" type="text" placeholder="¿Cómo te llamas?" required pattern="[a-zA-Z]+"/>
									<small class="error">Necesitamos tu nomre...es verdad.</small>
								</div>

								<div class="small-12 medium-6 columns">
									<input class="Inputs" name="email" type="email" placeholder="Escribe aquí tu email" required />
									<small class="error">Sin email no te podremos contactar y te quedarás sin ramo.</small>
								</div>

								<div class="small-12 columns">
									<textarea class="Inputs InputsTextarea" name="comment" placeholder="Cuéntanos qué necesitas"></textarea>
								</div>

								<div class="small-12 large-6 columns">
									
									<div class="left">
										<input name="legal" value="1" type="checkbox" required="" />
										<label for="checkbox1"><span class="LegalText">He leído y acepto el </span><a class="LegalLink" href="#" data-reveal-id="myModal">aviso legal</a></label>
										<small class="error">Léetelo, no es muy largo.</small>

										<div id="myModal" class="reveal-modal" data-reveal>
											
											<h2>Aviso Legal</h2>
											<p>Acepto que mis datos personales recabados serán incorporados en un fichero cuyo responsable es Sadako S.L. con la única finalidad de responder a la solicitud de información indicada por el usuario. El usuario podrá ejercer los derechos de acceso rectificación oposición y cancelación mediante un escrito a lasgrullasdesadako@gmail.com.</p>
											<a class="close-reveal-modal">&#215;</a>
										</div>
									</div>

								</div>
								<div class="right">
									<div class="small-12 large-6 columns">
										<input class="FormButton"name="submit" type="submit" value="Enviar" />
									</div>
								</div>
								

							</div>

						</form>
						
						<?php
					}

					?>

				</div>
			</div>
		</div>
	</section>

	<section class="SadakoSection">
		<div class="row">
			<article>
				
				<div class="small-12 large-4 columns">
					<figure class="center">
						<img class="SadakoLogo" src="img/sadako.jpg" alt="Logo Sadako">
					</figure>
					
					<ul class="Social-listBig center">
		                <li><a class="Social-item icon-facebook" href="https://www.facebook.com/lasgrullas.desadako"></a></li>
		                <li><a class="Social-item icon-twitter" href="https://twitter.com/grullasdesadako"></a></li>
		                <li><a class="Social-item icon-pinterest" href="http://www.pinterest.com/grullasdesadako/"></a></li>
		                <li><a class="Social-item icon-instagram" href="http://instagram.com/lasgrullasdesadako"></a></li>
		            </ul>
				</div>
				<div class="small-12 large-8 columns">
					<p><strong>Sadako</strong> empezó en el 2010 como una marca de joyería y accesorios, inspirada en la historia de las mil grullas de Sadako Sasaki. Todas nuestras &nbsp;piezas están <strong>hechas a mano</strong> y usando como materia prima el papel, dándole forma mediante el <strong>arte japonés del&nbsp;origami</strong>. Recientemente hemos empezado a combinar nuestras piezas con joyería.</p>
					<p>Después de muchos encargos para novias, decidimos incorporar a <strong>Sadako</strong> una línea especial para bodas, incluyendo todos los posibles elementos decorativos de esta celebración.</p>
				</div>
				<div class="small-12 columns">
					<p>Si estas buscando el complemento ideal tanto para tu día a día como para un momento especial, visita nuestra tienda de <strong><a href="https://www.etsy.com/shop/LasgrullasdeSadako?ref=si_shop">Etsy</a></strong>, y si quieres saber más sobre <strong>Sadako</strong>, visita nuestra<strong> <a href="http://lasgrullasdesadako.wix.com/sadako">web</a></strong>, mantente al día en nuestro <strong><a href="http://lasgrullasdesadako.blogspot.com.es/">blog</a></strong> o síguenos en redes sociales</p>
				</div>
				
			</article>
		</div>
	</section>
	<footer class="center">
		<div class="row">
			<div class="small-12 large-11 columns">
				<div class="FooterText">
					<p>Copyright © 2014 Sadako, todos los derechos reservados</br>
					Contacto <a href="mailto:lasgrullasdesadako@gmail.com" title='lasgrullasdesadako@gmail.com'>lasgrullasdesadako@gmail.com</a></p>
				</div>
			</div>
			<div class="small-12 large-1 columns">
				<div class="AnchoreUp">
					<a class="icon-arrow-up" href="#Home"></a>
				</div>
			</div>
		</div>
		
		

		
	

	</footer>

	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/js.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>
<?php
if ($_POST['enviar']) {
	// Guardar los datos recibidos en variables:
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	// Definir el correo de destino:
	$dest = "frank@goweb.com.ve"; 
	 
	// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
	$headers = "From: $nombre <$email>\r\n";  
	$headers .= "X-Mailer: PHP5\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	// Aqui definimos el asunto y armamos el cuerpo del mensaje
	$asunto = "Contacto Goweb";
	$cuerpo = "Nombre: ".$nombre."<br>";
	$cuerpo .= "Email: ".$email."<br>";
	$cuerpo .= "Mensaje: ".$mensaje;
	 
	// Enviar el correo
		if (@mail($dest,$asunto,$cuerpo,$headers)) {
			?><script>alert("Mensaje enviado")</script><?php  
		} else {
			?><script>alert("Ocurrió un error!")</script><?php  
		}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Diseño y Desarrollo Web - Diseño de Páginas Web - Crear Páginas Web - Portales Web - Soluciones Web - MyMDesign - Caracas - Venezuela</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        <script src="js/jquery.slides.min.js"></script>
        <script>
			$(function() {
			  $('#slides').slidesjs({
				width: 940,
				height: 400,
				play: {
				  active: false,
				  auto: true,
				  interval: 4000,
				},
				navigation: {
					active: false
				},
				pagination: {
					active: false}
				});
			});
		</script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
        <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1170px
      }
    }
	
  </style>
  <!-- SlidesJS Required: -->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><a href="index.php"><img src="images/logomym.png" alt=""/></a></span>
						  <h1 id="title">GoWeb</h1>
							<span class="byline">Diseño y Desarrollo Web</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="skel-panels-ignoreHref"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Inicio</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-user">Servicios</span></a></li>
                                <li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Portafolio</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contacto</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="http://twitter.com/frankdr0id" class="fa fa-twitter solo"><span>Twitter</span></a></li>
							<li><a href="http://facebook.com/frankdr0id" class="fa fa-facebook solo"><span>Facebook</span></a></li>
                            <li><a href="https://plus.google.com/+FrankAlbarracin" class="fa fa-google-plus-square solo"><span>Google</span></a></li>
							<li><a href="mailto:frank@goweb.com.ve" class="fa fa-envelope solo"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">

                                  <div id="slides">
                                  	<img src="images/banner1.jpg" />
                                    <img src="images/banner2.jpg" />
                                    <img src="images/banner3.jpg" />
                                  </div>

							<header>
								<h2 class="alt">Bienvenidos a GoWeb</h2>
                                <h2 class="alt">Diseño y desarrollo web</h2>
								<h2 class="alt">Su marca en la Web es fácil y posible!</h2>
							</header>
							
                            <p>Creamos o adaptamos su imagen corporativa en la web.</p>


							<footer>
								<a href="#portfolio" class="button scrolly">Ir al Portafolio</a>
							</footer>

						</div>
					</section>
					
				<!-- About Me -->
					<section id="about" class="three">
					  <div class="container">

					    <header>
								<h2>Servicios</h2>
						  </header>
						  <h1>Diseño de Páginas Web</h1>
                            <p>Diseño efectivo de su sitio web,   para ampliar la imagen corporativa de la empresa.                            </p>
                            <h1></h1>
                            <h1>Rediseño Web</h1>
                            <p>Soluciones profesionales de rediseño de su página web   existente.</p>
                            <h1></h1>
                            <h1>Mantenimiento de Sitios Web</h1>
                        <p>Servicios de mantenimiento y   actualización  de   acuerdo a sus necesidades.</p>
					  </div>
					</section>
			
            
            <!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2>Portafolio Web</h2>
							</header>
							
							<p>&quot;Si buscas resultados distintos, no hagas siempre lo mismo&quot;</p>
						
							<div class="row">
								<div class="4u">
									<article class="item">
										<a href="http://clinicahomeopaticakaren.com/" target="new" class="image full"><img src="images/portafolio/clinicakaren.jpg" alt="" /></a>
										<header>
										  <h3><a href="http://http://clinicahomeopaticakaren.com/" target="new">Clínica Homeopática Karen</a></h3>
										</header>
									</article>
									<article class="item">
										<a href="http://balancepersonal.net/" target="new" class="image full"><img src="images/portafolio/balancepersonal.jpg" alt="" /></a>
										<header>
										  <h3><a href="http://balancepersonal.net/" target="new">BalancePersonal.net</a></h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="http://kiaritours.com/" target="new" class="image full"><img src="images/portafolio/kiaritours.jpg" alt="" /></a>
										<header>
										  <h3><a href="http://kiaritours.com/" target="new">Kiari Tours</a></h3>
										</header>
									</article>
									<article class="item">
										<a href="http://www.venezuelaindomita.com/" target="new" class="image full"><img src="images/portafolio/vzlaindomita.jpg" alt="" /></a>
										<header>
										  <h3><a href="http://www.venezuelaindomita.com/" target="new">Venezuela Indómita</a></h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="http://natacioninfantil.com.ve/" target="new" class="image full"><img src="images/portafolio/pirsi.jpg" alt="" /></a>
										<header>
										  <h3><a href="http://natacioninfantil.com.ve/" target="new">Pirsi Natación Infantil</a></h3>
										</header>
									</article>
									<article class="item">
										<a href="http://xpertplus.com.ve/" target="new" class="image full"><img src="images/portafolio/xpertplus.jpg" alt="" /></a>
										<header>
										  <h3><a href="http://xpertplus.com.ve/" target="new">XpertPlus Muebles</a></h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contacto</h2>
							</header>

							<p>Tiene alguna consulta o requiere información? También puede contactarnos directamente a través de los correos: <a href="mailto:frank@goweb.com.ve"><strong><em>frank@goweb.com.ve</em></strong></a> - <em><a href="mailto:molina.frank@gmail.com"><strong>molina.frank@gmail.com</strong></a></em> - <a href="mailto:molina.frank@outlook.com"><strong><em>molina.frank@outlook.com</em></strong></a></p>
							
							<form method="post">
								<div class="row half">
									<div class="6u"><input name="nombre" type="text" required class="text" id="nombre" placeholder="Nombre" maxlength="80" /></div>
									<div class="6u"><input name="email" type="email" required class="text" id="email" placeholder="Email" /></div>
							  </div>
								<div class="row half">
									<div class="12u">
										<textarea name="mensaje" required id="mensaje" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input class="button" type="submit" name="enviar" value="Enviar" >
									</div>
								</div>
						  </form>

						</div>
					</section>
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2014 GoWeb. Todos los derechos reservados.</p>
						
					</div>
				
			</div>
	</body>
</html>
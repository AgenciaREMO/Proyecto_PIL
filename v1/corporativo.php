<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Video Corporativo - PILGRIM'S</title>
		<meta name="description" content="Video corporativo de la historia de Pilgrim's">
		<meta name="keywords" content="Pilgrim's, video corporativo">
	</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
		menu("7");
	?>
	<div class=" bg-content ">
		<section class="container">
		<ol class="breadcrumb" style="padding-top:2%;">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="#">Nuestra empresa</a></li>
			  <li class="active">Video Corporativo</li>
		</ol>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 ">
					<img class="img-responsive" style="margin: auto;" src="rec/img/titulos/titulo-video.png">
				</div>
			</div>
				<video width="100%" controls id="video-corpo">
				  <source src="rec/video/Pilgrim'sMexico.mp4" type="video/mp4">
				  <source src="mov_bbb.ogg" type="video/ogg">
				</video>
			
		<br>
	</section>
	</div>
	
	<?php
		footer();
	?>
</body>
</html>
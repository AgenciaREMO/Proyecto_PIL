<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Video Corporativo - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, estándares de calidad, tif, certificación">
	</head>
<body>
	<?php
		menu("1");
	?>
	<div class=" bg-content ">
		<section class="container">
		<ol class="breadcrumb">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="#">Nuestra empresa</a></li>
			  <li class="active">Video Corporativo</li>
		</ol>
		<div class=" text-center">
			<h1>Vídeo Corporativo Pilgrim's</h1><br>
		</div>
		<div class="">
			
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
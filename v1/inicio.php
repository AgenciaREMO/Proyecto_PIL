<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>INICIO - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, pollo, pollo fresco, valor agregado, lanzamientos">
		<script type="text/javascript">
	        $(document).ready(function() {
	            $("#cont-video").fadeOut(20000);
	        });
	    </script>
	</head>
<body>
	<?php
		menu("1");
	?>
	<!--<div class="app-container" data-bb="app-main-region">-->
		<div class="hero main">
		  <div class="embed-responsive embed-responsive-16by9 vid-bg hidden-sm hidden-xs">
		    <video autoplay="" loop="" muted="" class="embed-responsive-item">
		    	<source src="//prod1.nescafe.com/es_es/public/vid/nescafe-background.mp4" type="video/mp4">
		    </video>
		    <button class="mute on"></button>
		  </div>
		  <img src="rec/img/16x9.png" class="ratio spacer hidden-sm hidden-xs">
		  <img src="//prod1.nescafe.com/es_es/public/img/hero/landing-mobile.gif" class="mobile-hero hidden-md hidden-lg hidden-xl"> <!-- Video Movil-->
		  <div id="cont-video" class="vertical-center">
		    <div class="vertical-center-inner">
		      <div class="hero-content">
		        <div class="hero-head">
		          <img src="rec/img/logo-video.png" class="img-responsive center-block">
		        </div>
		        <div class="hero-cta">
		          <h4>
		            Somos el segundo mayor productor de pollo en el mundo. A lo largo de 70 años, en Pilgrim’s, hemos producido alimentos con altos estándares de calidad. Estamos comprometidos con los más de 35,000 miembros del equipo que trabajan con nosotros para ofrecer productos a mayoristas, minoristas, instituciones, restaurantes, autoservicios y clientes.
		          </h4>
		        </div><!-- /.hero-cta -->
		         <div class="hero-head">
		          <img src="rec/img/linea-video.png" class="img-responsive center-block">
		        </div>
		      </div><!-- /.hero-content -->
		    </div><!-- /.vertical-center-inner -->
		  </div>
		</div>
	<!--</div>-->



	<!--<section>
		    <video autoplay loop muted poster="screenshot.jpg" id="background">
		      <source src="rec/video/nescafe-background.mp4" type="video/mp4">
		    </video>
	</section>-->

	<section class="content">
		
	</section>
	<?php
		footer();
	?>
</body>
</html>

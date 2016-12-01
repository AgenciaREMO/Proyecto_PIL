<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Pilgrim's Fresco - Pilgrim's</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="css/pilgrimsML.css" rel="stylesheet">
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php
			menu("2");
		?>
		<div class="nuestras-marcas">
			<section class="content container" style="padding-bottom:2%;">
				<div class="cont p-02" data-speed="2" data-type="background" style="background-color:white !important;">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<img src="rec/img/titulos/titulo-error.png" alt="Error 404" class="img-responsive plecas elem_animar titulo-error">
							<img src="rec/img/404.jpg" alt="Pollito error 404" class="img-responsive pollo">
							<h3 class="elem_animar">¡Lo sentimos!</h3>
							<h3 class="elem_animar">Página no encontrada.</h3>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php
			footer();
		?>
		<script type="text/javascript">
			$(document).ready(function(){
			  	// hide our element on page load
			  	$('.elem_animar').css('opacity', 0);
			  	$('.pollo').css('opacity', 0);

			  	$('.pollo').waypoint(function(direction) {
			      	$(this).css('opacity', 1);
			      	$(this).css('-webkit-transition', 'opacity .3s ease-in-out');
			      	$(this).addClass('animated pulse');	 
			  	}, { offset: '100%' });
			 
			  	$('.elem_animar').waypoint(function(direction) {
			      	$(this).css('opacity', 1);
			      	$(this).css('-webkit-transition', 'opacity .3s ease-in-out');
			      	$(this).addClass('animated slideInUp');	 
			  	}, { offset: '100%' });
			});
		</script>
	</body>
</html>
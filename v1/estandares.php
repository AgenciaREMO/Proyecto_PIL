<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Estándares de Calidad - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, estándares de calidad, tif, certificación">
	</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
		menu("6");
	?>
	<div class="bg-content">
	<section class="content" style="position:relative">
		<img src="rec/img/banners_jpg/estandares.jpg" alt="" class="img-responsive">
		<div id="b" class="flecha-azul text-center animated tada" style="position:absolute">
			<a href="#b">
				<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
			</a>
		</div>
	</section>
	<div class="gris-banner-sl">
    </div>
		<section class="content container ">
		<ol class="breadcrumb">
		  <li><a href="inicio.php">Inicio</a></li>
		  <li><a href="#">Procesos</a></li>
		  <li class="active">Estándares de Calidad</li>
		</ol>
		<div class="row ">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<img class="img-responsive" style="margin: auto;" src="rec/img/titulos/titulo-estandares.png">
			</div>
		</div>
		<section class=" p-02">
			<div class="row verde">
				<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12">
					<div class="anima-img">
						<img class="img-tif img-responsive" src="rec/img/tif.png">
					</div>
				</div>
				<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12">
				    <div class="anima-text" >					
						<p class="sello">El Sello Inspección de Tipo Federal (TIF) garantiza que el alimento es inocuo; es otorgado por SAGARPA quien hace la auditoría, donde verifican que las instalaciones y productos cumplan con las regulaciones que señalan.</p>
					</div>
				</div>
			</div>
			<div class="row blanco">
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="anima-text" >
						<p id="nues-pollos"><b>¿Nuestros pollos tienen hormonas o clembuterol?</b></p>
						<p><b>Nuestros Pollos no tienen Hormonas ni Clembuterol.</b> Estas sustancias son ilegales, por lo que nos sería imposible obtener el Sello TIF en nuestros productos. </p>
						<p>Además, el lapso de tiempo que tarda un pollito en crecer es aproximadamente de 21 días. Las hormonas y el clembuterol  son componentes que tardan de 60 a 100 días para hacer efecto.</p>
					</div>
				</div>
				<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12">
					<div class="anima-img">
						<img class="img-tif img-responsive" src="rec/img/pollo-estandar.png">
					</div>
				</div>
			</div>
		</section>
	</section>
	</div>
	<?php
		footer();
	?>
	<script type="text/javascript">
			$(document).ready(function(){
			  	// hide our element on page load
			  	$('.anima-title').css('opacity', 0);
			  	$('.anima-text').css('opacity', 0);
			  	$('.anima-img').css('opacity', 0);

			  	$('.anima-title').waypoint(function(direction) {
			      	$(this).css('opacity', 1);
			      	$(this).css('-webkit-transition', 'opacity .3s ease-in-out');
			      	$(this).addClass('animated pulse');	 
			  	}, { offset: '70%' });

			  	$('.anima-text').waypoint(function(direction) {
			      	$(this).css('opacity', 1);
			      	$(this).css('-webkit-transition', 'opacity .3s ease-in-out');
			      	$(this).addClass('animated slideInUp');	 
			  	}, { offset: '70%' });

			  	$('.anima-img').waypoint(function(direction) {
			      	$(this).css('opacity', 1);
			      	$(this).css('-webkit-transition', 'opacity .3s ease-in-out');
			      	$(this).addClass('animated pulse');	 
			  	}, { offset: '70%' });
			 	
			});
		</script>
</body>
</html>
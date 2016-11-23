<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Pilgrim's México- PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, Pigrim's México, Historia Pilgrim's, plantas, servicio y calidad">
	</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
		menu("7");
	?>

	<div class="bg-content">
		<section class="content" style="position:relative">
			<img style="" src="rec/img/banners_jpg/pilgrims_mex.jpg" class="banner">
			<div id="b" class="flecha text-center animated tada" style="position:absolute">
			<a href="#b">
				<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
			</a>
		</div>
		</section>
		<div class="gris-banner-sl">
	    </div>
		<section class="container">
			<ol class="breadcrumb">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="#">Nuestra empresa</a></li>
			  <li class="active">Pilgrim's México</li>
			</ol>

			<div class="wow fadeInUp animated" data-wow-delay="0.6s" data-wow-duration="0.10s" style="visibility: visible; 
																											 animation-duration: 0.10s; 
																											 animation-delay: 0.6s; 
																											 animation-name: fadeInUp;">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">
						<img class="img-responsive" style="margin: auto;" src="rec/img/titulos/titulo-mexico.png">
					</div>
				</div>
			</div>
			<div class="wow fadeInUp animated" data-wow-delay="0.6s" data-wow-duration="0.10s" style="visibility: visible; 
																											 animation-duration: 0.20s; 
																											 animation-delay: 0.6s; 
																											 animation-name: fadeInUp;">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="d-mapa">
							<div style="background:url('rec/img/pil_mexico.png');background-size: cover;" class="mapa">
								<img src="rec/img/pil_mexico-hover.png" class="img-responsive mapita" alt="Mapa Pilgrim's México" style="opacity:0;">
							</div>
						</div>
						<div class="m-mapa">
							<img class="img-responsive" src="rec/img/mapa-mob.png">
						</div>
						<p class="div-azul">
							En Pilgrim´s Pride México somos una organización que a través del Servicio y Calidad, hemos logrado marcar una diferencia en nuestros productos, contamos con:
						</p>
					</div>
				</div>
			</div>
			<div class="bg-mexico">
					<div class="row" id="d-mexico">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="elem-somos" style="text-align:center; background:url('rec/img/colaboradores-hover.png') no-repeat center;">
								<img src="rec/img/colaboradores.png" alt="Más de 10,000 colaboradores" class="elem-somos-1">
							</div>
							<div class="elem-somos" style="text-align:center; background:url('rec/img/alimentos-hover.png') no-repeat center;">
								<img src="rec/img/alimentos.png" alt="7 plantas de alimentos" class="elem-somos-2">
							</div>
							<div class="elem-somos" style="text-align:center; background:url('rec/img/procesadoras-hover.png') no-repeat center;">
								<img src="rec/img/procesadoras.png" alt="6 plantas procesadoras" class="elem-somos-3">
							</div>
							<div class="elem-somos" style="text-align:center; background:url('rec/img/incubadoras-hover.png') no-repeat center;">
								<img src="rec/img/incubadoras.png" alt="9 plantas incubadoras" class="elem-somos-4">
							</div>
							<div class="elem-somos" style="text-align:center; background:url('rec/img/engorda-hover.png') no-repeat center;">
								<img src="rec/img/engorda.png" alt="Más de 3000 casetas de engorda" class="elem-somos-5">
							</div>
							<div class="elem-somos" style="text-align:center; background:url('rec/img/distribucion-hover.png') no-repeat center;">
								<img src="rec/img/distribucion.png" alt="22 centros de distribución" class="elem-somos-6">
							</div>
							<div class="elem-somos" style="text-align:center; background:url('rec/img/certificadas-hover.png') no-repeat center;">
								<img src="rec/img/certificadas.png" alt="5 plantas certificadas con el sello TIF" class="elem-somos-7">
							</div>
						</div>
					</div>

					<div class="row" id="m-mexico">
						<div class="col-lg-12" >
							<img class="img-responsive" src="rec/img/somos.png" alt="En Pilgrim's somos">
						</div>
					</div>
				</div>
		</section>
	</div>
	<?php
		footer();
	?>
	<script>
		$(document).ready(function(){
			$(".mapa").hover(function(){
				$(".mapita").css("opacity","1");
				$(".mapita").css("-webkit-transition","opacity 2s");
				$(".mapita").css("transition","opacity 2s");
			});
			$(".mapa").mouseout(function(){
				$(".mapita").css("opacity","0");
				$(".mapita").css("-webkit-transition","opacity 2s");
				$(".mapita").css("transition","opacity 2s");
			});
			//Efecto over somos
			$(".elem-somos-1").hover(function(){
				$(".elem-somos-1").css("opacity","0");
			});
			$(".elem-somos-1").mouseout(function(){
				$(".elem-somos-1").css("opacity","1");
			});
			$(".elem-somos-2").hover(function(){
				$(".elem-somos-2").css("opacity","0");
			});
			$(".elem-somos-2").mouseout(function(){
				$(".elem-somos-2").css("opacity","1");
			});
			$(".elem-somos-3").hover(function(){
				$(".elem-somos-3").css("opacity","0");
			});
			$(".elem-somos-3").mouseout(function(){
				$(".elem-somos-3").css("opacity","1");
			});
			$(".elem-somos-4").hover(function(){
				$(".elem-somos-4").css("opacity","0");
			});
			$(".elem-somos-4").mouseout(function(){
				$(".elem-somos-4").css("opacity","1");
			});
			$(".elem-somos-5").hover(function(){
				$(".elem-somos-5").css("opacity","0");
			});
			$(".elem-somos-5").mouseout(function(){
				$(".elem-somos-5").css("opacity","1");
			});
			$(".elem-somos-6").hover(function(){
				$(".elem-somos-6").css("opacity","0");
			});
			$(".elem-somos-6").mouseout(function(){
				$(".elem-somos-6").css("opacity","1");
			});
			$(".elem-somos-7").hover(function(){
				$(".elem-somos-7").css("opacity","0");
			});
			$(".elem-somos-7").mouseout(function(){
				$(".elem-somos-7").css("opacity","1");
			});
		});
	</script>
</body>
</html>
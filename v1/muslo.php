<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta_alt(); ?>
	  	<title>Pilgrim's Fresco - Pilgrim's</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="css/pilgrimsML.css" rel="stylesheet">
	</head>
	<body>
		<?php
			menu("2");
		?>
		<section class="content nuestras-marcas" data-speed="2" data-type="background">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestras marcas</li>
					<li><a href="pilgrims_fresco.php">Pilgrim's fresco</a></li>
					<li class="active">Muslo</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-fresco.png">
						</div>
					</div>
				</section>
				<div class="row productos bg-productos" style="margin-bottom:5%;">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<img src="rec/img/pleca_muslo.png" alt="Cinta muslo" class="img-responsive animated fadeInDown" style="margin: 5% auto;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<h3 class="animated fadeInDown" style="background-color:#e7e7e7; color:#071689; border-top-left-radius:10px; padding:10px 15px; text-align:left; margin-top:0px;">Descripción:</h3>
						<p class="animated fadeInDown" style="font-size:1.3em;">Muslo de pollo que puedes encontrar con o sin piel en distintas porciones por empaque.</p>
						<br>
						<hr class="hr-productos">
						<div class="col-lg-12 col-md-12 col-sm-12 producto movil-historia">
							<div style="background:url('rec/img/nuestras_marcas/muslos_temporal_back.jpg') no-repeat center;" class=" animated zoomIn">
								<img src="rec/img/nuestras_marcas/muslos_temporal.png" alt="Muslo" class="img-responsive img-thumbnail thumbnail-producto" style="max-width:100%">
							</div>
						</div>
						<div class="row vista animated fadeInUp">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<h3 style="color:#071689; padding:10px 15px; text-align:left;">Vistas:</h3>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<img src="rec/img/nuestras_marcas/muslos_temporal.png" alt="Muslo" class="miniatura-vista" id="frente">
								<img src="rec/img/nuestras_marcas/muslos_temporal_back.jpg" alt="Muslo back" class="miniatura-vista" id="back">
							</div>
						</div>
						<div class="row" style="background-color:#e7e7e7; color:#071689; padding:0px; width:100%; margin:2% 0px !important; display: table;">
							<a href="r2-muslo-tamarindo.php" >
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-1" style="float: none;display: table-cell; vertical-align: middle;">
									<i class="fa fa-play-circle fa-2x" aria-hidden="true" style="color:#071689;"></i>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-8 col-xs-9  text-right" style="margin-left:0px; float: none;display: table-cell; vertical-align: middle;">
									<h3 style="color:#071689; text-align:right;">
										Muslos de pollo al tamarindo
									</h3>
									Ver receta
								</div>
								<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2" style="padding:0px; float: none;display: table-cell; vertical-align: middle;">
									<img src="rec/img/recetas/muslo_de_pollo_en_tamarindo.jpg" alt="Muslos de pollo al tamarindo" style="width:100%;" class="miniatura-receta">
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto desktop-historia" >
						<div style="background:url('rec/img/nuestras_marcas/muslos_temporal_back.jpg');background-size: cover;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/muslos_temporal.png" alt="Muslo" class="img-responsive img-thumbnail thumbnail-producto">
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
			footer();
		?>
	</body>
	<script>
		$(document).ready(function(){
			$('#frente').click(function(){
				$('.thumbnail-producto').css('opacity','1');
				$('.thumbnail-producto').css('-webkit-transition','opacity 0.35s');
			});
			$('#back').click(function(){
				$('.thumbnail-producto').css('opacity','0');
				$('.thumbnail-producto').css('-webkit-transition','opacity 0.35s');
			});
		});
	</script>
</html>
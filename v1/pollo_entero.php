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
					<li class="active">Pollo entero</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-fresco.png">
						</div>
					</div>
				</section>
				<div class="row productos bg-productos" style="padding-top:3%; padding-bottom:3%;">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<img src="rec/img/pleca_pollo_entero.png" alt="Cinta pollo entero" class="img-responsive animated fadeInDown" style="margin: 10px auto;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<h3 class="animated fadeInDown" style="background-color:#e7e7e7; color:#071689; border-top-left-radius:10px; padding:10px 15px; text-align:left; margin-top:0px;">Descripción:</h3>
						<p class="animated fadeInDown" style="font-size:1.3em;">Pollo entero fresco que puedes encontrar en diversos tamaños para toda la familia.</p>
						<br>
						<hr class="hr-productos">
						<div class="col-lg-12 col-md-12 col-sm-12 producto movil-historia">
							<div style="background:url('rec/img/nuestras_marcas/pollo_entero_back.jpg') no-repeat center;" class=" animated zoomIn">
								<img src="rec/img/nuestras_marcas/pollo_entero.png" alt="Pollo entero" class="img-responsive img-thumbnail thumbnail-producto" style="max-width:100%">
							</div>
						</div>
						<div class="vista animated fadeInUp">
							<div class="col-lg-3">
								<h3 style="color:#071689; padding:10px 15px; text-align:left;">Vistas:</h3>
							</div>
							<div class="col-lg-9">
								<img src="rec/img/nuestras_marcas/pollo_entero.png" alt="Pollo entero" class="miniatura-vista" id="frente">
								<img src="rec/img/nuestras_marcas/pollo_entero_back.jpg" alt="Pollo entero back" class="miniatura-vista" id="back">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto desktop-historia" >
						<div style="background:url('rec/img/nuestras_marcas/pollo_entero_back.jpg');background-size: cover;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/pollo_entero.png" alt="Pollo entero" class="img-responsive img-thumbnail thumbnail-producto">
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
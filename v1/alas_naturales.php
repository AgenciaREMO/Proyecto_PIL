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
					<li class="active">Alitas naturales</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-fresco.png">
						</div>
					</div>
				</section>
				<div class="row productos bg-productos">
					<div class="col-lg-12 col-md-12 col-sm-12 producto">
						<h2 class="h2-producto">
							Alitas naturales
							<hr class="hr-rojo">
						</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto" >
						<div style="background:url('rec/img/nuestras_marcas/alas_naturales_temporal_back.jpg');background-size: cover;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/alas_naturales_temporal.png" alt="Alitas naturales" class="img-responsive img-thumbnail thumbnail-producto">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<table style="border:none;">
							<tr>
								<td>
									<h3 class="animated fadeInDown">Alitas naturales en diversas presentaciones para un antojo en casa o para deleitar a tantos invitados como quieras.</h3>
									<br>
									<h3 class="animated fadeInDown" style="text-align:left;">Vistas:</h3>
									<div class="vista animated fadeInUp">
										<img src="rec/img/nuestras_marcas/alas_naturales_temporal.png" alt="Alitas naturales" class="miniatura-vista" id="frente">
										<img src="rec/img/nuestras_marcas/alas_naturales_temporal_back.jpg" alt="Alitas naturales back" class="miniatura-vista" id="back">
									</div>
								</td>
							</tr>
							<tr>
								<td class="a-receta animated zoomIn">
									<a href="r5-alitas-tamarindo.php">
										<img src="rec/img/recetas/alitas_de_pollo_en_salsa_de_tamarindo_picante_sobre_aranitas_de_plato.jpg" alt="Pollo en salsa de tamarindo" class="miniatura-receta img-thumbnail"><br>
										<p>Alitas de pollo en salsa de tamarindo picante</p>
										Ver receta <i class="fa fa-chevron-right" aria-hidden="true"></i>
									</a>
								</td>
							</tr>
						</table>
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
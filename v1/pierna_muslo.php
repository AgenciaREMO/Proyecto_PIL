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
					<li class="active">Pierna y muslo</li>
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
							Pierna y muslo
							<hr class="hr-rojo">
						</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto" >
						<div style="background:url('rec/img/nuestras_marcas/charola_pierna_muslo_back.jpg');background-size: cover;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/charola_pierna_muslo.png" alt="Pierna y muslo" class="img-responsive img-thumbnail thumbnail-producto">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<table style="border:none;">
							<tr>
								<td>
									<h3 class="animated fadeInDown">Esta pieza completa la puedes encontrar en corte anatómico o corte americano.</h3>
									<br>
									<h3 class="animated fadeInDown" style="text-align:left;">Vistas:</h3>
									<div class="vista animated fadeInUp">
										<img src="rec/img/nuestras_marcas/charola_pierna_muslo.png" alt="Pierna y muslo" class="miniatura-vista" id="frente">
										<img src="rec/img/nuestras_marcas/charola_pierna_muslo_back.jpg" alt="Pierna y muslo back" class="miniatura-vista" id="back">
									</div>
								</td>
							</tr>
							<tr>
								<td class="a-receta animated zoomIn">
									<a href="r8-pierna-muslo-rajas.php">
										<img src="rec/img/recetas/pierna_muslo_con_rajas_champinones.jpg" alt="Pierna y muslo corte americano con rajas y champiñones" class="miniatura-receta img-thumbnail"><br>
										<p>Pierna y muslo corte americano con rajas y champiñones</p>
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
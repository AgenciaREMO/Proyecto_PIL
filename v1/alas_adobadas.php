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
				<h1 class="h1-producto">Pilgrim's Fresco</h1>
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestras marcas</li>
					<li><a href="pilgrims_fresco.php">Pilgrim's fresco</a></li>
					<li class="active">Alitas adobadas</li>
				</ol>
				<div class="row productos bg-productos">
					<div class="col-lg-12 col-md-12 col-sm-12 producto">
						<h2 class="h2-producto">
							Alitas adobadas
							<hr class="hr-rojo">
						</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto" >
						<div style="background:url('rec/img/nuestras_marcas/charola_alas_adobadas_back.jpg');background-size: cover;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/charola_alas_adobadas.jpg" alt="Alitas adobadas" class="img-responsive img-thumbnail thumbnail-producto">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<table style="border:none;">
							<tr>
								<td>
									<h3 class="animated fadeInDown">Alitas adobadas en una mezcla de chiles y especias que le dan sabor picosito y delicioso.</h3>
									<br>
									<h3 class="animated fadeInDown" style="text-align:left;">Vistas:</h3>
									<div class="vista animated fadeInUp">
										<img src="rec/img/nuestras_marcas/charola_alas_adobadas.jpg" alt="Alitas adobadas" class="miniatura-vista" id="frente">
										<img src="rec/img/nuestras_marcas/charola_alas_adobadas_back.jpg" alt="Alitas adobadas back" class="miniatura-vista" id="back">
									</div>
								</td>
							</tr>
							<tr>
								<td class="a-receta animated zoomIn">
									<a href="r6-alitas-adobadas.php">
										<img src="rec/img/recetas/alitas_de_pollo_adobadas_rebozadas_en_coctel_de_frutas_mixtas.jpg" alt="Alitas adobadas rebozadas en coctel de frutas mixtas" class="miniatura-receta img-thumbnail"><br>
										<p>Alitas de pollo adobadas,<br>rebozadas en cóctel de frutas mixtas</p>
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
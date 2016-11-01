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
		<section class="content">
			<img src="rec/img/b_pollo_fresco.jpg" alt="img-responsive" class="banner">
		</section>
		<section class="content nuestras-marcas" data-speed="2" data-type="background">
			<div class="container">
				<h1 class="h1-producto">Pilgrim's Fresco</h1>
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestras marcas</li>
					<li><a href="pilgrims_fresco.php">Pilgrim's fresco</a></li>
					<li class="active">Arrachera de pollo</li>
				</ol>
				<div class="row productos bg-productos">
					<div class="col-lg-12 col-md-12 col-sm-12 producto">
						<h2 class="h2-producto">
							Arrachera de pollo
							<hr class="hr-rojo">
						</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto" >
						<div style="background:url('rec/img/nuestras_marcas/charola_arrachera_temporal_back.jpg');background-size: cover;">
							<img src="rec/img/nuestras_marcas/charola_arrachera_temporal.jpg" alt="Pollo entero" class="img-responsive img-thumbnail thumbnail-producto">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<table style="border:none;">
							<tr>
								<td>
									<p style="margin-top:0px;">Prácticos filetes de pierna/muslo sazonados a las finas hierbas, listos para taquear.</p>
									<p style="margin:5px;">Vistas:</p>
									<img src="rec/img/nuestras_marcas/charola_arrachera_temporal.jpg" alt="Pollo entero" class="miniatura-vista" id="frente">
									<img src="rec/img/nuestras_marcas/charola_arrachera_temporal_back.jpg" alt="Pollo entero back" class="miniatura-vista" id="back">
								</td>
							</tr>
							<tr>
								<td class="a-receta">
									<a href="#">
										<img src="rec/img/nuestras_marcas/receta_pollo_entero.jpg" alt="Pollo entero" class="miniatura-receta img-thumbnail"><br>
										<h3>Pollo horneado</h3>
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
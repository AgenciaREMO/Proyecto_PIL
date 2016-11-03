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
				<div class="row productos bg-productos">
					<div class="col-lg-12 col-md-12 col-sm-12 producto">
						<h2 class="h2-producto">
							Pollo entero
							<hr class="hr-rojo">
						</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto" >
						<div style="background:url('rec/img/nuestras_marcas/pollo_entero_back.jpg');background-size: cover;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/pollo_entero.jpg" alt="Pollo entero" class="img-responsive img-thumbnail thumbnail-producto">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<table style="border:none;">
							<tr>
								<td>
									<h3 class="animated fadeInDown">Pollo entero fresco que puedes encontrar en diversos tamaños para toda la familia.</h3>
									<br>
									<h3 class="animated fadeInDown" style="text-align:left;">Vistas:</h3>
									<div class="vista animated fadeInUp">
										<img src="rec/img/nuestras_marcas/pollo_entero.jpg" alt="Pollo entero" class="miniatura-vista" id="frente">
										<img src="rec/img/nuestras_marcas/pollo_entero_back.jpg" alt="Pollo entero back" class="miniatura-vista" id="back">
									</div>
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
<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta_alt(); ?>
	  	<title>Pilgrim's Valor Agregado - Pilgrim's</title>
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
					<li><a href="valor_agregado.php">Pilgrim's valor agregado</a></li>
					<li class="active">Filete empanizado</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-agregado.png">
						</div>
					</div>
				</section>
				<div class="row productos bg-productos" style="padding-top:3%; padding-bottom:3%;">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<img src="rec/img/pleca_filete_empanizado.png" alt="Cinta filete empanizado" class="img-responsive animated fadeInDown" style="margin: 10px auto;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<h3 class="animated fadeInDown" style="background-color:#e7e7e7; color:#071689; border-top-left-radius:10px; padding:10px 15px; text-align:left; margin-top:0px;">Descripción:</h3>
						<p class="animated fadeInDown" style="font-size:1.3em;">Filetes de pollo empanizados, parcialmente cocinados.</p>
						<p class="animated fadeInDown" style="font-size:1.3em;">Contenido neto 700gr.</p>
						<br>
						<hr class="hr-productos">
						<div class="col-lg-12 col-md-12 col-sm-12 producto movil-historia">
							<div style="background:url('rec/img/nuestras_marcas/filete_empanizado_back.png') no-repeat center; background-size:auto 363px;" class=" animated zoomIn">
								<img src="rec/img/nuestras_marcas/filete_empanizado.png" alt="Filete empanizado" class="img-responsive img-thumbnail thumbnail-producto" style="max-width:100%">
							</div>
						</div>
						<div class="vista animated fadeInUp">
							<div class="col-lg-3">
								<h3 style="color:#071689; padding:10px 15px; text-align:left;">Vistas:</h3>
							</div>
							<div class="col-lg-9">
								<img src="rec/img/nuestras_marcas/filete_empanizado.png" alt="Filete empanizado" class="miniatura-vista" id="frente">
								<img src="rec/img/nuestras_marcas/filete_empanizado_back.png" alt="Filete empanizado back" class="miniatura-vista" id="back">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto desktop-historia" >
						<div style="background:url('rec/img/nuestras_marcas/filete_empanizado_back.png') no-repeat center; background-size:auto 363px;" class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/filete_empanizado.png" alt="Filete empanizado" class="img-responsive img-thumbnail thumbnail-producto">
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
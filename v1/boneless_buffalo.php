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
					<li class="active">Boneless buffalo</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-agregado.png">
						</div>
					</div>
				</section>
				<div class="row productos bg-productos">
					<div class="col-lg-12 col-md-12 col-sm-12 producto">
						<h2 class="h2-producto">
							Boneless buffalo
							<hr class="hr-rojo">
						</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto" >
						<img src="rec/img/nuestras_marcas/boneless_buffalo.png" alt="Boneless buffalo" class="img-responsive img-thumbnail thumbnail-producto animated zoomIn">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<h3 class="animated fadeInDown">Cubos de Pechuga empanizados<br>con salsa tipo Buffalo,<br>totalmente cocinados.</h3>
						<br>
						<h3 class="animated fadeInDown">Contenido neto 600gr.</h3>
					</div>
				</div>
			</div>
		</section>
		<?php
			footer();
		?>
	</body>
</html>
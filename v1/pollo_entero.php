<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
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
				<h1>Pilgrim's Fresco</h1>
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestras marcas</li>
					<li><a href="pilgrims_fresco.php">Pilgrim's fresco</a></li>
					<li class="active">Pollo entero</li>
				</ol>
				<table class="table-responsive">
				  	<tr>
					  	<td rowspan="2">
					  		<img src="rec/img/nuestras_marcas/pollo_entero.jpg" alt="Pollo entero" class="img-responsive">
					  	</td>
					  	<td  class="prueba">
					  		<h2>Pollo entero</h2>
							<p>Pollo entero fresco que puedes encontrar en diversos tamaños para toda la familia.</p>
						<td>
				  	</tr>
				  	<tr>
				  		<td>
							<div class="a-receta">
								<img src="rec/img/nuestras_marcas/receta_pollo_entero.jpg" alt="Pollo entero" class="miniatura"><br>
								<a href="#">Ver receta <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</div>
				  		</td>
				  	</tr>
				</table>
				<div class="row productos">
					<div class="col-lg-8 col-md-8 col-sm-12">
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						
					</div>
				</div>
			</div>
		</section>
		<?php
			footer();
		?>
	</body>
</html>
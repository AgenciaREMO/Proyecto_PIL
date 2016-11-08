<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Ciclo de proceso - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, estándares de calidad, tif, certificación">
		<link rel="stylesheet" type="text/css" href="css/4_5_4styles.min.css">
	</head>
<body>
	<?php
		menu("6");
	?>
	<div class="bg-content">
		<section class="content">
			<img src="rec/img/banners_jpg/ciclo_proceso.jpg" alt="" class="img-responsive">
		</section>
		<section class="content container">
			<ol class="breadcrumb">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="#">Procesos</a></li>
			  <li class="active">Ciclo de procesos</li>
			</ol>
			<div class="wow fadeInUp animated" data-wow-delay="0.6s" data-wow-duration="0.10s" style="visibility: visible; 
																											 animation-duration: 0.10s; 
																											 animation-delay: 0.6s; 
																											 animation-name: fadeInUp;">
					
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">
						<img class="img-responsive" style="margin: auto; padding:4%;" src="rec/img/titulos/titulo-ciclo.png">
					</div>
				</div>
			</div>
			<div class="cont">
				<div style="padding: 5%;">
					<table id="esc-procesos" width="100%">
					<tr>
						<td style="background:url('rec/img/proceso/h-clientes.png')center no-repeat;" class="text-center">
							<img class="  img-proceso" src="rec/img/proceso/cliente.png">
						</td>
						<td rowspan="3">
							<img  style="margin: auto;" class="img-responsive" src="rec/img/proceso/logo-proceso.png">
						</td>
						<td style="background:url('rec/img/proceso/h-alimentos.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/alimentos.png">
						</td>
					</tr>
					<tr>
						<td style="background:url('rec/img/proceso/h-distribucion.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/distribucion.png">
						</td>
						<td style="background:url('rec/img/proceso/h-progenitoras.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/progenitoras.png">
						</td>
					</tr>
					<tr>
						<td style="background:url('rec/img/proceso/h-productos.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/productos.png">
						</td>
						<td style="background:url('rec/img/proceso/h-reproductoras.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/reproductoras.png">
						</td>
					</tr>
					<tr>
						<td style="background:url('rec/img/proceso/h-progenitoras.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/proceso.png">
						</td>
						<td style="background:url('rec/img/proceso/h-en-engorda.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/en_engorda.png">
						</td>
						<td style="background:url('rec/img/proceso/h-incubadoras.png')center no-repeat;" class="text-center">
							<img class=" img-proceso" src="rec/img/proceso/incubadora.png">
						</td>
					</tr>
				</table>
				</div>
				
				<div id="mob-procesos">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img src="rec/img/proceso/procesos.png" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php
		footer();
	?>
</body>
</html>
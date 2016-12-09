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
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php
			menu("2");
		?>
		<section class="content nuestras-marcas" data-speed="2" data-type="background">
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestras marcas</li>
					<li><a href="pilgrims_fresco.php">Pilgrim's fresco</a></li>
					<li class="active">Pechuga</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-fresco.png">
						</div>
					</div>
				</section>
				<div class="row productos bg-productos" style="margin-bottom:5%;">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<img src="rec/img/pleca_pechuga.png" alt="Cinta pechuga" class="img-responsive animated fadeInDown" style="margin: 5% auto;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12" >
						<h3 class="animated fadeInDown" style="background-color:#e7e7e7; color:#071689; border-top-left-radius:10px; padding:10px 15px; text-align:left; margin-top:0px;">Descripción:</h3>
						<p class="animated fadeInDown" style="font-size:1.3em;">Pechuga entera, deshuesada, con hueso, con piel, sin piel y aplanada lista para asar.</p>
						<br>
						<hr class="hr-productos">
						<div class="col-lg-12 col-md-12 col-sm-12 producto movil-historia">
							<div class=" animated zoomIn">
								<img src="rec/img/nuestras_marcas/charola_pechuga_entera.png" alt="Pechuga" class="img-responsive thumbnail-producto" style="max-width:100%">
							</div>
						</div>
						<div class="row" style="background-color:#e7e7e7; color:#071689; padding:0px; width:100%; margin:2% 0px !important; display: table;">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-1" style="float: none;display: table-cell; vertical-align: middle;">
									<i class="fa fa-play-circle fa-2x" aria-hidden="true" style="color:#071689;"></i>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-8 col-xs-9  text-right" style="margin-left:0px; float: none;display: table-cell; vertical-align: middle;">
									<a href="r11-pechuga-ajillo.php" >
										<h3 style="color:#071689; text-align:right;">
											Pechuga al ajillo
										</h3>
										Ver receta
									</a>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2" style="padding:0px; float: none;display: table-cell; vertical-align: middle;">
									<img src="rec/img/recetas/pechuga_al_ajillo.jpg" alt="Pechuga al ajillo" style="width:100%;" class="miniatura-receta">
								</div>
						</div>
						<div class="row">
							<div class="col-lg-offset-9 col-lg-3 col-md-offset-9 col-md-3 col-sm-offset-9 col-sm-3 col-xs-12">
								<img src="rec/img/incomparable.png" alt="Sabor incomparable" style="margin: auto;" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 producto desktop-historia" >
						<div class=" animated zoomIn">
							<img src="rec/img/nuestras_marcas/charola_pechuga_entera.png" alt="Pechuga" class="img-responsive thumbnail-producto">
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<?php
			footer();
		?>
	</body>
</html>
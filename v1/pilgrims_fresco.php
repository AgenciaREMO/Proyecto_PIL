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
		<!-- Carousel -->
	    <header id="myCarousel" class="carousel slide carousel-negocio">
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>

	        <!-- Wrapper for slides -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <div class="fill" style="background-image:url('rec/img/b_pollo_fresco.jpg');">
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_va.jpg');">
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_del_dia.jpg');">
	                </div>
	            </div>

	        <!-- Controls -->
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	            <span class="icon-prev"></span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next">
	            <span class="icon-next"></span>
	        </a>
	    </header>

	    <section class="content nuestras-marcas" data-speed="2" data-type="background">
	    	<div class="container">
				<h1>Pilgrim's Fresco</h1>
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestras marcas</li>
					<li class="active">Pilgrim's fresco</li>
				</ol>
				<div class="container productos">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/pollo_entero.jpg" alt="Pollo entero" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Pollo entero</h2>
									<p class="descripcion"> 
										<a href="pollo_entero.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Pollo entero fresco que puedes encontrar en diversos tamaños para toda la familia.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/charola_pechuga_entera.jpg" alt="Pechuga" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Pechuga</h2>
									<p class="descripcion"> 
										<a href="pechuga.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Pechuga entera, deshuesada, con hueso, con piel, sin piel y aplanada lista para asar.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/charola_piernas.jpg" alt="Pierna" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Pierna</h2>
									<p class="descripcion"> 
										<a href="pierna.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Pierna de pollo que puedes encontrar con o sin piel en distintas porciones por empaque.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/alas_naturales_temporal.jpg" alt="Alitas naturales" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Alitas naturales</h2>
									<p class="descripcion"> 
										<a href="alas_naturales.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Alitas naturales en diversas presentaciones para un antojo en casa o para...
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/muslos_temporal.jpg" alt="Muslo" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Muslo</h2>
									<p class="descripcion"> 
										<a href="muslo.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Muslo de pollo que puedes encontrar con o sin piel en distintas porciones por empaque.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/charola_pierna_muslo.jpg" alt="Pierna y muslo" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Pierna y muslo</h2>
									<p class="descripcion"> 
										<a href="pierna_muslo.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Esta pieza completa la puedes encontrar en corte anatómico o corte americano.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/charola_milanesa_aplanada.jpg" alt="Milanesas" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Milanesas</h2>
									<p class="descripcion"> 
										<a href="milanesas.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Filete de pechuga en diversas porciones por empaque para...
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/charola_alas_adobadas.jpg" alt="Alitas adobadas" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Alitas adobadas</h2>
									<p class="descripcion"> 
										<a href="alas_adobadas.php">
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Alitas adobadas en una mezcla de chiles y especias que le dan sabor picosito y delicioso.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					    	<div class="hovereffect">
								<img src="rec/img/nuestras_marcas/charola_arrachera_temporal.jpg" alt="Arrachera de pollo" class="img-responsive producto">
								<div class="overlay">
					            	<hr class="hr-hover">
					                <h2>Arrachera de pollo</h2>
									<p class="descripcion"> 
										<a href="arrachera_pollo.php" >
											<i class="fa fa-chevron-down" aria-hidden="true"></i><br>
											Prácticos filetes de pierna/muslo sazonados a las finas hierbas, listos para taquear.
										</a>
									</p>
									<hr class="hr-hover"> 
					            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
			footer();
		?>
		<!-- Script to Activate the Carousel -->
    	<script>
    	$('.carousel').carousel({
    	    interval: 5000 //changes the speed
    	})
    	</script>
	</body>
</html>

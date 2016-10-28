<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Nuestra Empresa - Pilgrim's</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="css/pilgrimsML.css" rel="stylesheet">
	</head>
	<body>
		<?php
			menu("5");
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
	                <div class="fill" style="background-image:url('rec/img/b_planta_incubadora.jpg');">
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_planta_alimentos.jpg');">
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_planta_proceso.jpg');">
	                </div>
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
	    <section class="content container">
			<h1 class="h1-producto">Nuestras plantas</h1>
			<ol class="breadcrumb">
				<li><a href="inicio.php">Inicio</a></li>
				<li>Nuestra empresa</li>
				<li class="active">Hagamos negocio</li>
			</ol>
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="#">Home</a></li>
			  <li role="presentation"><a href="#">Profile</a></li>
			  <li role="presentation"><a href="#">Messages</a></li>
			</ul>
		</section>
		<?php
			footer();
		?>
	</body>
</html>

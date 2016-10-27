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
			menu("8");
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
	                <div class="fill" style="background-image:url('rec/img/b_valor_agregado.jpg');">
	                	<div class="container">
		                	<div class="row">
			                	<div class="carousel-caption">
								   	<h2>Valor Agregado</h2>
									<p>La mejor opción si buscas productos como nuggets, hamburguesas, pierna y muslo empanizados, cordon bleu, o tenders.</p>
								</div>
			               	</div>
		                </div>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_fresco.jpg');">
	                	<div class="container">
	                		<div class="row ">
		                		<div class="carousel-caption">
								   	<h2>Pollo Fresco</h2>
									<p>Si buscas pollo entero, en piezas, rosticero, o alitas marinadas.</p>
								</div>
		                	</div>
	                	</div>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_pollo_vivo.jpg');">
	                	<div class="container">
	                		<div class="row ">
		                		<div class="carousel-caption">
								   	<h2>Pollo Vivo</h2>
									<p>Si buscas aves hembras o machos, de la mejor calidad.</p>
								</div>
		                	</div>
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
			<h1>Hagamos negocio</h1>
			<ol class="breadcrumb">
				<li><a href="inicio.php">Inicio</a></li>
				<li>Nuestras marcas</li>
				<li class="active">Pilgrim's fresco</li>
			</ol>
			<div class="row">
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<img src="" alt="">
				</div>
			</div>
		</section>
		<?php
			footer();
		?>
	</body>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		    $('#categorias').change(function(){
		    	var html = "<i class='fa fa-hand-o-right' aria-hidden='true'></i>";
		    	var seleccion = $("#categorias").val();
		    	if(seleccion == "Valor agregado"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas productos como Nuggets, hamburguesas, pierna y muslo empanizada, cordon bleu, o tenders.");
		    	}
		    	else if(seleccion == "Pollo fresco"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas Pollo entero, en piezas, rosticero, o alitas marinadas.");
		    	}
		    	else if(seleccion == "Pollo vivo"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas aves hembras o machos, de la mejor calidad.");
		    	}
		    	else if(seleccion == "Render"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas productos como pollinaza y gallinaza, huevo para uso industrial, harinas de carne o mixta, pastas, chatarra de maquinaria o pedacería, y gallina de desecho.");
		    	}
		    });
		});
	</script>
</html>

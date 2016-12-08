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
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php
			menu("7");
		?>
		<!-- Carousel -->
	    <div class="nuestras-marcas">
			<!-- Carousel -->
		<header id="myCarousel" class="carousel slide" style="position:relative">
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>

	        <!-- Wrapper for slides -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <div class="fill" >
	                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/planta_incubadora.jpg" alt="Pilgrim's plantas incubadoras">
		            </div>
	                <div class="flecha text-center animated infinite tada" style="position:absolute">
						<a href="#b">
							<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
						</a>
					</div>	
	            </div>
	            <div class="item">
	                <div class="fill" >
	                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/planta_alimentos.jpg" alt="Pilgrim's plantas de alimentos">
	                </div>
					<div class="flecha text-center animated infinite tada" style="position:absolute">
						<a href="#b">
							<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
						</a>
					</div>	
	            </div>
	            <div class="item">
	                <div class="fill" >
	                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/planta_procesos.jpg" alt="Pilgrim's plantas de procesos">
	                </div>
	                <div class="flecha-azul text-center animated infinite tada" style="position:absolute">
						<a href="#b">
							<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
						</a>
					</div>	
	            </div>
	            <div id="b"></div>
	        </div>
	        <!-- Controls -->
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	            <span class="icon-prev"></span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next">
	            <span class="icon-next"></span>
	        </a>
	    </header>
		<div class="gris-banner-sl">
	    </div>
	    <section class="content " style="padding-bottom:2%; !important">
	    	<div class="container">
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestra empresa</li>
					<li class="active">Nuestras plantas</li>
				</ol>
				<section class="container text-center ">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-plantas.png">
						</div>
					</div>
				</section>
				<div class="cont p-02">
					<ul class="nav nav-tabs plantas-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#incubadoras" aria-controls="home" role="tab" data-toggle="tab">Incubadoras</a></li>
					    <li role="presentation"><a href="#alimentos" aria-controls="profile" role="tab" data-toggle="tab">De alimentos</a></li>
					    <li role="presentation"><a href="#proceso" aria-controls="messages" role="tab" data-toggle="tab">De proceso</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane in active text-left" id="incubadoras">
					    	<h2 class="animated fadeIn">Nuestras incubadoras</h2>
					    	<div class="row">
						    	<div class="col-lg-6 elem_animar">
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta incubadora Antongo 1 y 2</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Carretera Antongo km 5.5, El Marqués, Querétaro.
						    		</p>
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta incubadora Balvanera 1 y 2</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Camino a la Esperanza- Nogales km 7, Colón, Querétaro.
						    		</p>
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta incubadora La Esperanza</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Retorno de Don José No. 18 y 21 (respectivamente), Parque Industrial Balvanera, Corregidora, Querétaro.
						    		</p>
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta incubadora Río Verde</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Calle Abasolo s/n Barrio Primero El Refugio, Cd. Fernández, San Luis Potosí.
						    		</p>
						    	</div>
						    	<div class="col-lg-6 elem_animar">
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta Incubadora Petsa</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Canatlán y Cuatro Ciénagas s/n Zona Industrial, Gómez Palacio, Durango.
						    		</p>
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta Incubadora Citra</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Carretera Bermejillo- La Zarca km 11.5 + 2, Mapimi, Durango.
						    		</p>
						    		<h3><img src="rec/img/p_incubadoras.png" alt="Icono plantas incubadoras" class="icon-pollito">Planta incubadora Veracruz</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Localizada a 35 km de Boca del Río, Veracruz.
						    		</p>
						    	</div>
						    </div>
					    </div>
					    <div role="tabpanel" class="tab-pane fade text-left" id="alimentos">
					    	<h2 class=" animated fadeIn">Nuestras plantas de alimentos</h2>
					    	<div class="row">
						    	<div class="col-lg-6 elem_animar">
						    		<h3 ><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de alimentos Querétaro</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Av. 5 de Febrero No. 1408, Col. San Pablo, Querétaro, Querétaro.
						    		</p>
						    		<h3 ><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de alimentos Colón</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Fraccionamiento Exhacienda, Col. Viborillas s/n, Colón, Querétaro.
						    		</p>
						    		<h3 ><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de alimentos Saltillo</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Periférico Luis Echeverría Álvares y Blvd. Vito Alessio Robles, Saltillo, Coahuila.
						    		</p>
						    		<h3 ><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de alimentos San Luis Potosí</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Periférico Norte km 23.5, Municipio Soledad de Graciano Sánchez, San Luis Potosí.
						    		</p>
						    	</div>
						    	<div class="col-lg-6 elem_animar">
						    		<h3><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de Alimentos 1 Durango</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Valle de Guadiana No. 294, Parque Industrial Gómez Palacio, Durango.
						    		</p>
						    		<h3><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de Alimentos 2 Durango</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Valle de Guadiana No. 355, Parque Industrial Gómez Palacio, Durango.
						    		</p>
						    		<h3><img src="rec/img/p_alimentos.png" alt="Icono planta alimentos" class="icon-pollito">Planta de alimentos Veracruz</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Av. Palmillas, lote 4, manzana 1, Col. Parque Industrial Córdoba Amatlan de los Reyes, Veracruz.<br>
						    		</p>
						    	</div>
					    	</div>
					    </div>
					    <div role="tabpanel" class="tab-pane fade text-left" id="proceso">
					      	<h2 class=" animated fadeIn">Nuestras plantas de procesos</h2>
					      	<div class="row">
						    	<div class="col-lg-6 elem_animar">
						    		<h3><img src="rec/img/p_procesos.png" alt="Icono planta de procesos" class="icon-pollito">Planta de proceso Tepeji de Río</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Km 72.5 Antigua Carretera México-Querétaro, Tepeji de Río, Hidalgo.
						    		</p>
						    		<h3><img src="rec/img/p_procesos.png" alt="Icono planta de procesos" class="icon-pollito">Planta de proceso Los Cues</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Km 3 a Carretera a los Cues, El Marqués, Querétaro.
						    		</p>
						    		<h3><img src="rec/img/p_procesos.png" alt="Icono planta de procesos" class="icon-pollito">Planta de proceso San Luis Potosí</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Av. De las Flores No. 95, Soledad de Graciano Sánchez, San Luis Potosí.
						    		</p>
						    	</div>
						    	<div class="col-lg-6 elem_animar">
						    		<h3><img src="rec/img/p_procesos.png" alt="Icono planta de procesos" class="icon-pollito">Planta Citra</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Prol. Fco. I. Madero No. 257, Col. Centro en Gómez Palacio, Durango.
						    		</p>
						    		<h3><img src="rec/img/p_procesos.png" alt="Icono planta de procesos" class="icon-pollito">Planta Porvenir</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Carretera a Cd. Juárez km 20.5, Gómez Palacio, Durango.
						    		</p>
						    		<h3><img src="rec/img/p_procesos.png" alt="Icono planta de procesos" class="icon-pollito">Planta La Popular</h3>
						    		<p class="p-plantas">
						    			<strong>Ubicación:</strong> Carretera Gómez Palacio a Fco. I. Madero km 6.5, Gómez Palacio, Durango.
						    		</p>
						    	</div>
					      	</div>
					    </div>
					</div>
				</div>
			</div>
		</section>
	</div>
		<?php
			footer();
		?>
		<script>
		    $('.carousel').carousel({
		        interval: 5000 //changes the speed
		    })
		   </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  	// hide our element on page load
			  	$('.elem_animar').css('opacity', 0);

			  	$('.elem_animar').waypoint(function(direction) {
			      	$(this).css('opacity', 1);
			      	$(this).css('-webkit-transition', 'opacity .3s ease-in-out');
			      	$(this).addClass('animated zoomIn');	 
			  	}, { offset: '100%' });
			 
			});
		</script>
	</body>
</html>

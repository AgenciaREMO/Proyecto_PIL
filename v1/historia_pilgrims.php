<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta_alt(); ?>
	  	<title>Nuestra Empresa - Pilgrim's</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="css/pilgrimsML.css" rel="stylesheet">
	</head>
	<body>
		<?php
			menu("7");
		?>
		<section class="content nuestras-marcas">
	    	<div class="container">
	    		<h1 class="h1-producto">Historia Pilgrim's</h1>
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Nuestra empresa</li>
					<li class="active">Historia Pilgrim's</li>
				</ol>
				<div class="tabs-plantas">
					<div class="col-lg-12">
						<h2 class="text-center" style="margin:30px;">¿Quiénes somos?</h2>
						<img src="rec/img/jbs.jpg" class="img-responsive" alt="JBS" style="margin-left:auto; margin-right:auto;margin-bottom:30px;border-radius:5px;">
						<p style="text-align:justify; margin:10px;">Formamos parte del <a href="http://www.jbsgroup.com/" target="_blank">Grupo JBS</a>, corporación brasileña fundada en 1953, siendo la mayor empresa de proteína animal con más de 200 mil colaboradores en todo el mundo, con presencia en los 5 continentes. Tenemos plantas y oficinas en: Brasil, Argentina, México, Uruguay, Paraguay, Estados Unidos, Italia, China, Rusia.</p>
					</div>
				
					<div class="row">
						<div class="col-lg-12">
							<h2 class="text-center" style="margin:30px;">Pilgrim´s  en el Mundo.</h2>
						</div>
						<div class="col-lg-12 pilgrims-mundo">
							<img src="rec/img/globe-chicken.png" alt="Pollo en el mundo" style="margin-left:auto; margin-right:auto;" class="img-responsive">
							<p class="text-right">
								Somos el segundo mayor productor de pollo en el mundo. A lo<br> largo de 70 años, en Pilgrim’s, hemos producido alimentos con<br> altos estándares de calidad
							</p>
							<p class="text-left">
								Estamos comprometidos con los más de 35,000 miembros del<br> equipo que trabajan con nosotros para ofrecer productos a<br> mayoristas, minoristas, instituciones, restaurantes,<br> autoservicios y clientes.
							</p>
							<p class="text-right">
								Nuestra Sede Central se encuentra en Greeley,<br> Colorado, tenemos operaciones en 12 estados de<br> Estados Unidos, así como en México y Puerto Rico. 
							</p>
							<p class="text-center">
								Trabajamos con más de<br> 4,000 granjas familiares en los EE.UU. y México.
							</p>
							<p class="text-left">
								Tenemos  la capacidad para procesar aproximadamente<br> 34 millones de aves por semana. 
							</p>
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
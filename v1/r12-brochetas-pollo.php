<!DOCTYPE html>
<?php 
	$url = $_SERVER['SCRIPT_NAME'];
?>
<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Brochetas de pollo - PILGRIM'S</title>
		<meta name="description" content="Pilgrim’s Receta de Brochetas de pollo">
		<meta name="keywords" content="Pilgrim's, Pigrim's México, pechuga.">
	</head>
<body class="bg-r">
	<?php
		menu("3");
	?>
	<section class="content">
		<img style="margin-button:2%;" src="rec/img/re1.png"  class="banner">
	</section>
	<div>
		<section class="container ">
			<br>
			<ol class="breadcrumb" style="background: rgba(255,255,255, 0.7)">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="recetario.php">Recetario</a></li>
			  <li class="active">Brochetas de pollo.</li>
			</ol>
	</div>
	<div class=" bg-r">
		<section class="container">
			<div class="esc-header-recetas">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
						<i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span class="ico-cook">   min. aproximadamente</span>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
						<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span class="ico-cook"> 4 Porciones</span>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
						<form method="get" action="php/r1.php">
							<input type="hidden" name="url" value="<?php echo $url; ?>"/>
							<i class="fa fa-download fa-2x" aria-hidden="true"></i> <span class="ico-cook"><input style="background:transparent; border:none;" type="submit" value="Descargar"></span>
						</form>
					</div>
				</div>
			</div>
			<div class="esc-receta">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<b><h1 style="font-style:">INGREDIENTES</h1></b>
						<hr style="width:75%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						<li>1 <a href="pechuga.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Pechuga de pollo aplanada.</i></b></a>.</li>
						<li>4 Palillos grandes aproximadamente 15 cm.</li>
						<li>Tocino.</li>
						<li>Pimientos verde, naranja, rojo, amarillo.</li>
						<li>Champiñones.</li>
						<li>Sal y pimienta.</li>
						<li>1 cebolla.</li>

					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 text-center">
						<h1>VIDEO DE LA RECETA</h1>
						<hr style="width:75%; background:#25346d; text-aling-center; margin:auto; height:1px;">
						<br>
						<video width="100%" controls id="video-corpo">
						  <source src="rec/video/nescafe-background.mp4" type="video/mp4">
						  <source src="mov_bbb.ogg" type="video/ogg">
						</video>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						La pechuga se parte en cubos de 2cm por 2cm y se les pone sal y pimienta al gusto se parte la cebolla en cubos del mismo tamaño al igual que los 
						pimientos y el tocino los champiñones se parten a la mitad ya preparado todo se inserta en el palillo cada uno de los ingredientes agregando
						hasta el final en la punta del palillo un champiñón entero si es de su gusto se puede agregar trozos de piña en un asador ya precalentado se 
						pone las brochetas  hasta que estén bien cocidas cuidando que no se quemen se puede acompañar con un timbal de arroz.
					</div>
				</div>
			</div>
			<div class="mob-header-recetas">
				<div class="row">
					<div class="col-sm-12 col-xs-12 text-center">
						<i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span class="ico-cook">  min. de preparación</span>
					</div>
					<div class="col-sm-12 col-xs-12 text-center">
						<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span class="ico-cook"> 4 Porciones</span>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<form method="get" action="php/r1.php">
							<input type="hidden" name="url" value="<?php echo $url; ?>"/>
							<i class="fa fa-download fa-2x" aria-hidden="true"></i> <span class="ico-cook"><input style="background:transparent; border:none;" type="submit" value="Descargar"></span>
						</form>
					</div>
				</div>
			</div>
			<br>
			<div class="mob-receta">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12" style="padding-left:5%;">
						<b><h1 style="font-style:">INGREDIENTES</h1></b>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						<ul>
						<li>1 <a href="pechuga.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Pechuga de pollo aplanada.</i></b></a>.</li>
						<li>4 Palillos grandes aproximadamente 15 cm.</li>
						<li>Tocino.</li>
						<li>Pimientos verde, naranja, rojo, amarillo.</li>
						<li>Champiñones.</li>
						<li>Sal y pimienta.</li>
						<li>1 cebolla.</li>

					</ul>
					</div><br>
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						La pechuga se parte en cubos de 2cm por 2cm y se les pone sal y pimienta al gusto se parte la cebolla en cubos del mismo tamaño al igual que los 
						pimientos y el tocino los champiñones se parten a la mitad ya preparado todo se inserta en el palillo cada uno de los ingredientes agregando
						hasta el final en la punta del palillo un champiñón entero si es de su gusto se puede agregar trozos de piña en un asador ya precalentado se 
						pone las brochetas  hasta que estén bien cocidas cuidando que no se quemen se puede acompañar con un timbal de arroz.
					</div><br>
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<h1>VIDEO DE LA RECETA</h1>
						<hr style="width:75%; background:#25346d; text-aling-center; margin:auto; height:1px;">
						<br>
						<video width="100%" controls id="video-corpo">
						  <source src="rec/video/nescafe-background.mp4" type="video/mp4">
						  <source src="mov_bbb.ogg" type="video/ogg">
						</video>
					</div>
				</div>
				<br>
				<div class="row">
					
				</div>
			</div>
		</section>
	</div>
<?php
		footer();
	?>
</body>
</html>
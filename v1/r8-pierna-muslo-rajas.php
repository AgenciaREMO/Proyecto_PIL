<!DOCTYPE html>
<?php 
	$url = $_SERVER['SCRIPT_NAME'];
?>
<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Pierna y muslo corte americano con rajas y champiñones - PILGRIM'S</title>
		<meta name="description" content="Pilgrim’s Receta de Pierna y muslo corte americano con rajas y champiñones">
		<meta name="keywords" content="Pilgrim's, Pigrim's México, pierna y muslo.">
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
			  <li class="active">Pierna y muslo corte americano con rajas y champiñones.</li>
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
						<li>4 <a href="pierna_muslo.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Piernas/Muslos corte Americano Pilgrim`s Pride </i></b></a>limpios, sin piel.</li>
						<li>4 Tazas de champiñones crudos, limpios y rebanados.</li> 
						<li>3 Chiles poblanos asados, limpios y cortados en tiras.</li>
						<li>1 Taza de cebolla cruda rebanada en rodajas.</li>
						<li>Aceite en aerosol (5 disparos).</li>
						<li>Sal y epazote al gusto.</li>

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
						Pon el pollo a cocer por 20 minutos en una olla con agua hirviendo, sazona con sal. 
						Una vez transcurrido el tiempo, retira el pollo del caldo y fríelo ligeramente en una cacerola aproximadamente por 5 minutos. 
						Agrega  la cebolla, los champiñones y las rajas de poblano. Mezcla todos los ingredientes y fríe 10 minutos. Añade un poco de caldo, sal y epazote. 
						Deja hervir por 10 minutos. Sirve caliente y acompaña con tortillas.
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
						<li>4 <a href="pierna_muslo.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Piernas/Muslos corte Americano Pilgrim`s Pride </i></b></a>limpios, sin piel.</li>
						<li>4 Tazas de champiñones crudos, limpios y rebanados.</li> 
						<li>3 Chiles poblanos asados, limpios y cortados en tiras.</li>
						<li>1 Taza de cebolla cruda rebanada en rodajas.</li>
						<li>Aceite en aerosol (5 disparos).</li>
						<li>Sal y epazote al gusto.</li>
					</ul>
					</div><br>
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						Pon el pollo a cocer por 20 minutos en una olla con agua hirviendo, sazona con sal. 
						Una vez transcurrido el tiempo, retira el pollo del caldo y fríelo ligeramente en una cacerola aproximadamente por 5 minutos. 
						Agrega  la cebolla, los champiñones y las rajas de poblano. Mezcla todos los ingredientes y fríe 10 minutos. Añade un poco de caldo, sal y epazote. 
						Deja hervir por 10 minutos. Sirve caliente y acompaña con tortillas.
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
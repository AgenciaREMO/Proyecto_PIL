<!DOCTYPE html>
<?php 
	$url = $_SERVER['SCRIPT_NAME'];
?>
<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Medallones de pollo Pilgrim's estilo Colima - PILGRIM'S</title>
		<meta name="description" content="Pilgrim’s Receta de medallones estilo Colima.">
		<meta name="keywords" content="Pilgrim's, Pigrim's México, medallones.">
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
			  <li class="active">Medallones de pollo Pilgrim's estilo Colima.</li>
			</ol>
	</div>
	<div class=" bg-r">
		<section class="container">
			<div class="esc-header-recetas">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
						<i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span class="ico-cook">  min. de preparación</span>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
						<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span class="ico-cook"> 6 Porciones</span>
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
						<li>1 Lata de 420 gramos de crema de chile poblano. </li>
						<li>2 Cucharadas de aceite.</li>
						<li>6 <a href="medallones.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Medallones de muslo Pilgrim's salpimentados</i></b></a></li>
						<li>250 Gramos de queso panela en tiras</li>
						<li>Sal y pimienta negra molida</li>
						<li>1 Cebolla fileteada</li>
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
						En una sartén con aceite caliente, fríe los medallones Pilgrim’s durante 3 minutos, o hasta que estén dorados por ambos lados. Apártalos en un recipiente. En la misma sartén, fríe la cebolla hasta que esté transparente. Agrega la crema de chile poblano y la leche, mezclándolos.
Añade los medallones y el queso. Agrégales sal y pimienta al gusto y cocínalos por 5 minutos o hasta que el pollo esté bien cocido.

						<br>
						<b>Sugerencia:</b> Acompáñalo con arroz. 
					</div>
				</div>
			</div>
			<div class="mob-header-recetas">
				<div class="row">
					<div class="col-sm-12 col-xs-12 text-center">
						<i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span class="ico-cook">  min. de preparación</span>
					</div>
					<div class="col-sm-12 col-xs-12 text-center">
						<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span class="ico-cook"> 6 Porciones</span>
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
						<li>1 Lata de 420 gramos de crema de chile poblano. </li>
						<li>2 Cucharadas de aceite.</li>
						<li>6 <a href="medallones.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Medallones de muslo Pilgrim's salpimentados</i></b></a></li>
						<li>250 Gramos de queso panela en tiras</li>
						<li>Sal y pimienta negra molida</li>
						<li>1 Cebolla fileteada</li>
					</ul>
					</div><br>
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						En una sartén con aceite caliente, fríe los medallones Pilgrim’s durante 3 minutos, o hasta que estén dorados por ambos lados. Apártalos en un recipiente. En la misma sartén, fríe la cebolla hasta que esté transparente. Agrega la crema de chile poblano y la leche, mezclándolos.
Añade los medallones y el queso. Agrégales sal y pimienta al gusto y cocínalos por 5 minutos o hasta que el pollo esté bien cocido.

						<br>
						<b>Sugerencia:</b> Acompáñalo con arroz.
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
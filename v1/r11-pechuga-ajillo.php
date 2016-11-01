<!DOCTYPE html>
<?php 
	$url = $_SERVER['SCRIPT_NAME'];
?>
<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Pechugas al ajillo - PILGRIM'S</title>
		<meta name="description" content="Pilgrim’s Receta de Pechugas al ajillo">
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
			  <li class="active">Pechugas al ajillo</li>
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
						<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span class="ico-cook">  Porciones</span>
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
						<li>1 Chile guajillo fileteado.</li>
						<li>Ajo finamente picado.</li>
						<li>Mantequilla.</li>
						<li>1 cucharadita de harina.</li>
						<li>Sal y pimienta.</li>
						<li>1 Cucharadita de tequila.</li>

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
						En una sartén se agrega la mantequilla, ya caliente se pone el chile guajillo y el
						ajo se pone a dorar el ajo se agrega la harina  no quemado ya dorado se agrega el
						tequila y se mueve hasta que no se vea la harina y se retira del fuego ahora en 
						un grill ya previamente caliente se pone la pechuga a cocine ya que este bien 
						cocida se pone en un plato y en sima del plato se pone el ajillo se puede 
						acompañar con una ensalada
					</div>
				</div>
			</div>
			<div class="mob-header-recetas">
				<div class="row">
					<div class="col-sm-12 col-xs-12 text-center">
						<i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span class="ico-cook">  min. de preparación</span>
					</div>
					<div class="col-sm-12 col-xs-12 text-center">
						<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span class="ico-cook"> Porciones</span>
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
						<li>1 Chile guajillo fileteado.</li>
						<li>Ajo finamente picado.</li>
						<li>Mantequilla.</li>
						<li>1 cucharadita de harina.</li>
						<li>Sal y pimienta.</li>
						<li>1 Cucharadita de tequila.</li>
					</ul>
					</div><br>
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						En una sartén se agrega la mantequilla, ya caliente se pone el chile guajillo y el
						ajo se pone a dorar el ajo se agrega la harina  no quemado ya dorado se agrega el
						tequila y se mueve hasta que no se vea la harina y se retira del fuego ahora en 
						un grill ya previamente caliente se pone la pechuga a cocine ya que este bien 
						cocida se pone en un plato y en sima del plato se pone el ajillo se puede 
						acompañar con una ensalada.
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
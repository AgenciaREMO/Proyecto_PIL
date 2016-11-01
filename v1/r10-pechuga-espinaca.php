<!DOCTYPE html>
<?php 
	$url = $_SERVER['SCRIPT_NAME'];
?>
<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Pechuga rellenas de espinacas - PILGRIM'S</title>
		<meta name="description" content="Pilgrim’s Receta de Pechuga rellenas de espinacas">
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
			  <li class="active">Pechuga rellenas de espinacas.</li>
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
						<li>1 <a href="pechuga.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>pechuga de pollo aplanada.</i></b></a>.</li>
						<li>8 hojas de espinaca lavadas y desinfectadas.</li>
						<li>1/2 metro de egapack (plastico tipo bolsa).</li>
						<li>Sal pimienta.</li>
						<li>Mantequilla.</li>
						<li>¼ de taza de crema.</li>
						<li>¼ de taza de leche.</li>
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
						En una sartén se precalienta dos cucharaditas de mantequilla, ya que se deshizo la mantequilla se ponen las espinacas finamente picadas, se sofríen un poco, se le va incorporando la crema y la leche a modo que quede una cremita con las espinacas. 
						Después se retira del fuego, ponemos nuestra pechuga extendida, en una orilla de la pechuga agregamos sal y pimienta al gusto y agregamos nuestras espinacas, las acomodamos de tal forma que se haga una línea recta en nuestra pechuga. 
						La vamos a enrollar con el egapack de modo que quede como taco. Se cierra bien el egapack con la pechuga adentro. En una cacerola con agua previamente calentándose se agrega el egapack con la pechuga,  se deja a fuego lento por alrededor de 15 a 20 min cuidando que la pechuga no se abra. 
						Después de que se sacó de la cacerola  se saca del egapack y se deja enfriar por alrededor de 5 min  y se empieza a rebanar con grosor de dos centímetros  se puede acompañar con un arroz.
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
						<li>1 <a href="pechuga.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>pechuga de pollo aplanada.</i></b></a>.</li>
						<li>8 hojas de espinaca lavadas y desinfectadas.</li>
						<li>1/2 metro de egapack (plastico tipo bolsa).</li>
						<li>Sal pimienta.</li>
						<li>Mantequilla.</li>
						<li>¼ de taza de crema.</li>
						<li>¼ de taza de leche.</li>
					</ul>
					</div><br>
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						En una sartén se precalienta dos cucharaditas de mantequilla, ya que se deshizo la mantequilla se ponen las espinacas finamente picadas, se sofríen un poco, se le va incorporando la crema y la leche a modo que quede una cremita con las espinacas. 
						Después se retira del fuego, ponemos nuestra pechuga extendida, en una orilla de la pechuga agregamos sal y pimienta al gusto y agregamos nuestras espinacas, las acomodamos de tal forma que se haga una línea recta en nuestra pechuga. 
						La vamos a enrollar con el egapack de modo que quede como taco. Se cierra bien el egapack con la pechuga adentro. En una cacerola con agua previamente calentándose se agrega el egapack con la pechuga,  se deja a fuego lento por alrededor de 15 a 20 min cuidando que la pechuga no se abra. 
						Después de que se sacó de la cacerola  se saca del egapack y se deja enfriar por alrededor de 5 min  y se empieza a rebanar con grosor de dos centímetros  se puede acompañar con un arroz.
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
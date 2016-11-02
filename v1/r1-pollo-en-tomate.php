<!DOCTYPE html>
<?php 
	$url = $_SERVER['SCRIPT_NAME'];
?>
<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Espagueti con pollo Pilgrim’s en salsa de tomate - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s Receta de Espagueti con pollo Pilgrim’s en salsa de tomate">
		<meta name="keywords" content="Pilgrim's, Pigrim's México, Historia Pilgrim's">
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
			  <li class="active">Espagueti con pollo Pilgrim’s en salsa de tomate</li>
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
						<li>4 Mitades de <a href="milanesas.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Pechuga de Pollo Pilgrim’s sin hueso.</i></b></a></li>
						<li>2 Cucharadas de aceite de oliva</li>
						<li>1 Cebolla picada</li>
						<li>1 Zanahoria picada</li>
						<li>1 Tallo de apio con hojas, lavado y sin fibra, picado</li>
						<li>1 Diente de ajo machacado</li>
						<li>1/2 Taza de vino blanco seco</li>
						<li>1 Lata de puré de tomate</li>
						<li>1 Taza de caldo de pollo</li>
						<li>1 Cucharada de perejil lavado y picado</li>
						<li>3 Cucharadas de albahaca fresca, lavada y picada</li>
						<li>Sal y pimienta al gusto</li>
						<li>500 Gramos de espagueti</li>
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
						En una cacerola grande, calienta el aceite a temperatura media. Agrega la cebolla, la zanahoria y el perejil, dejándolos hasta que se suavicen. 
						Añade el pollo Pilgrim’s Premium   y cocina por ambos lados hasta que pierda el color rosado. Agrega el vino blanco y cocina a fuego alto aproximadamente por 7 minutos. 
						Mezcla el puré de jitomate con el caldo de pollo y el perejil. Deja hervir reduciendo el fuego hasta que la  salsa se espese, aproximadamente 40 minutos. 
						Añade la albahaca y sazona con sal y pimienta al gusto. 
						Cocina el espagueti siguiendo las instrucciones del paquete. Por último cuela y agrega el pollo y la salsa.

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
						<li>4 Mitades de <a href="milanesas.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Pechuga de Pollo Pilgrim’s sin hueso.</i></b></a></li>
						<li>2 Cucharadas de aceite de oliva</li>
						<li>1 Cebolla picada</li>
						<li>1 Zanahoria picada</li>
						<li>1 Tallo de apio con hojas, lavado y sin fibra, picado</li>
						<li>1 Diente de ajo machacado</li>
						<li>1/2 Taza de vino blanco seco</li>
						<li>1 Lata de puré de tomate</li>
						<li>1 Taza de caldo de pollo</li>
						<li>1 Cucharada de perejil lavado y picado</li>
						<li>3 Cucharadas de albahaca fresca, lavada y picada</li>
						<li>Sal y pimienta al gusto</li>
						<li>500 Gramos de espagueti</li>
					</ul>
					</div><br>
					<div class="col-lg-12 col-md-12 text-justify">
						<h1>PREPARACIÓN</h1>
						<hr style="width:100%; background:#25346d; text-aling-center; margin:0px; height:1px;">
						<br>
						En una cacerola grande, calienta el aceite a temperatura media. Agrega la cebolla, la zanahoria y el perejil, dejándolos hasta que se suavicen. Añade el pollo Pilgrim’s Premium   y cocina por ambos lados hasta que pierda el color rosado. Agrega el vino blanco y cocina a fuego alto aproximadamente por 7 minutos. Mezcla el puré de jitomate con el caldo de pollo y el perejil. Deja hervir reduciendo el fuego hasta que la  salsa se espese, aproximadamente 40 minutos. Añade la albahaca y sazona con sal y pimienta al gusto. 
						Cocina el espagueti siguiendo las instrucciones del paquete. Por último cuela y agrega el pollo y la salsa.

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
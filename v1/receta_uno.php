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
<body >
	<?php
		menu("3");
	?>

	<div class="bg-content">
		<section class="content">
			<img src="rec/img/ba-pilgrims-mexico.jpg" class="banner">
		</section>
		<div class="gris-banner">
	    </div>
		<section class="container">
			<ol class="breadcrumb">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="#">Nuestra empresa</a></li>
			  <li class="active">Pilgrim's México</li>
			</ol>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 ">
					<img class="img-responsive" style="margin: auto;" src="rec/img/titulos/titulo-recetario.png">
				</div>
			</div>
			<div class="cont">

			</div>
		</section>
	<?php
		footer();
	?>
</body>
</html>
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
<body >
	<?php
		menu("3");
	?>

	<div class="bg-content">
		<section class="content" style="position:relative">
			<img src="rec/img/banners_jpg/recetas_brochetasdepollo.jpg" alt="" class="img-responsive">
			<div id="b" class="flecha-azul text-center animated infinite tada" style="position:absolute">
				<a href="#b">
					<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</section>
		<div class="gris-banner-sl">
    	</div>
		<section class="container">
			<ol class="breadcrumb">
			  <li><a href="inicio.php">Inicio</a></li>
			  <li><a href="recetario.php">Recetario</a></li>
			  <li class="active">Brochetas de pollo</li>
			</ol>
			<div class="cont-recetas">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<p class="title-receta">Brochetas  </p>
						<p class="com-receta">de pollo</p>
						<p class="rinde"><b><i>* Rinde para 4 personas<i></b></p>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 incomparable" >
						<img class="img-responsive logo-incomparable" src="rec/img/incomparable.png">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 firma">
						<img class="img-responsive" src="rec/img/firma.png">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 " >
						<img src="rec/img/gallina.png" class="img-responsive gallina">
						<div class="ingredientes">
							Ingredientes
						</div>
						<div class="ing">
							<p>1 <a href="pechuga.php" data-toggle="tooltip" data-placement="top" title="Ver producto"><b><i>Pechuga de pollo aplanada.</i></b></a>.</p>
							<p>4 Palillos grandes aproximadamente 15 cm.</p>
							<p>Tocino.</p>
							<p>Pimientos verde, naranja, rojo, amarillo.</p>
							<p>Champiñones.</p>
							<p>Sal y pimienta.</p>
							<p>1 cebolla.</p>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 " >
						<img src="rec/img/cubiertos.png" class="img-responsive gallina">
						<div class="hr-title-recetas"></div>
							<div class="procedimiento">
								Procedimiento
							</div>
						<div class="hr-title-recetas"></div>
						<table width="97%">
							<tr>
								<td width="13%;" >
									<img style="margin: auto;" src="rec/img/uno.png" class="img-responsive">
								</td>
								<td style="padding: 2%; font-style: normal; color: #6e6e6d; font-size: 1.2em">
									La pechuga se parte en cubos de 2cm por 2cm y se les pone sal y pimienta al gusto se parte la cebolla en cubos del mismo tamaño al igual que los 
						pimientos y el tocino los champiñones se parten a la mitad ya preparado todo se inserta en el palillo cada uno de los ingredientes agregando
						hasta el final en la punta del palillo un champiñón entero si es de su gusto se puede agregar trozos de piña en un asador ya precalentado se 
						pone las brochetas  hasta que estén bien cocidas cuidando que no se quemen se puede acompañar con un timbal de arroz.
								</td>
							</tr>
							
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="icon-down">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
									<img src="rec/img/reloj.png" class="img-responsive gallina">
									<b>min. aproximados</b>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
									<img src="rec/img/porcion.png" class="img-responsive gallina">
									<b>Porciones</b>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
									<img id="descargar" src="rec/img/down.png" class="img-responsive gallina">
									<b>Descarga</b>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="vertical-align: bottom;">
						<video width="95%" controls id="video-corpo">
							<source src="rec/video/nescafe-background.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
						</video>
					</div>-->
				</div>
			</div>
		</section>
	</div>
	<?php
		footer();
	?>

</body>
</html>
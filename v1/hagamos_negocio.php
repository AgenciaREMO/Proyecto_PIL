<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Hagamos Negocio - Pilgrim's</title>
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
			menu("5");
		?>
		<div class="nuestras-marcas">
			<!-- Carousel -->
			<header id="myCarousel" class="carousel slide" style="position:relative">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		            <li data-target="#myCarousel" data-slide-to="1"></li>
		            <li data-target="#myCarousel" data-slide-to="2"></li>
		            <li data-target="#myCarousel" data-slide-to="3"></li>
		        </ol>

		        <!-- Wrapper for slides -->
		        <div class="carousel-inner">
		            <div class="item active">
		                <div class="fill" >
		                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/hagamosnegocio_valoragregado.jpg" alt="Pilgrim's valor agregado">
		                	<div class="flecha text-center animated infinite tada" style="position:absolute">
								<a href="#b">
								   <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
								</a>
							</div>		                	
			            </div>
		            </div>
		            <div class="item">
		                <div class="fill" >
		                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/hagamosnegocio_fresco.jpg" alt="Pilgrim's fresco">
		                	<div class="flecha text-center animated infinite tada" style="position:absolute">
								<a href="#b">
								   <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
								</a>
							</div>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" >
		                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/hagamosnegocio_pollovivo.jpg" alt="Pilgrim's pollo vivo">
		                	<div class="flecha text-center animated infinite tada" style="position:absolute">
								<a href="#b">
								   <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
								</a>
							</div>		              
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" >
		                	<img class="img-responsive slide-inicio" src="rec/img/banners_jpg/hagamosnegocio_rendering.jpg" alt="Pilgrim's rendering">
		                	<div class="flecha text-center animated infinite tada" style="position:absolute">
								<a href="#b">
								   <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
								</a>
							</div>		              
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
		    <section class="content container" style="padding-bottom:2%;">
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li class="active">Hagamos negocio</li>
				</ol>
				<section class="container text-center ">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-negocio.png">
						</div>
					</div>
				</section>
				<div class="cont p-02" data-speed="2" data-type="background">
					<div class="container notificacion">
						<?php
							if (isset($_GET['resnegocio'])) {
								$res = $_GET['resnegocio'];
								if ($resnegocio=="1") {
									echo "<div class='alert alert-success alert-dismissable'>
										<button type='button' class='close' data-dismiss='alert'>&times;</button>
										<p><i class='fa fa-check' aria-hidden='true'></i> ¡Envio exitoso!</p>
									</div>";
								}
								else if ($resnegocio=="2") {
									echo "<div class='alert alert-danger alert-dismissable'>
										<button type='button' class='close' data-dismiss='alert'>&times;</button>
										<i class='fa fa-ban' aria-hidden='true'></i> El envio no ha podido realizarse. Intentalo en unos minutos.
									</div>";
								}
							}
						?>
					</div>

					<form action="enviar_hagamos_negocio.php" class="formulario" method="POST">
						<div class="row">
							<div class="col-lg-12" style="text-align:left;">
								<label for="categorias">¿En qué esta interesado?</label>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select name="categorias" id="categorias" class="form-control formulario-input" required>
										<option value="" selected="selected">Seleccione una categoría...</option>
				                        <option value="Valor agregado">Valor agregado (Nuggets, hamburguesas, pierna y muslo empanizada, cordon bleu, o tenders.)</option>
				                        <option value="Pollo fresco">Pollo fresco (Pollo entero, en piezas, rosticero, o alitas marinadas.)</option>
				                        <option value="Pollo vivo">Pollo vivo (Aves hembras o machos, de la mejor calidad.)</option>
				                        <option value="Rendering">Rendering (Pollinaza y gallinaza, huevo para uso industrial, harinas de carne o mixta, pastas, chatarra de maquinaria o pedacería, y gallina de desecho.)</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" name="nombre" class="form-control formulario-input" placeholder="Nombre completo..." required>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control formulario-input" placeholder="Correo electrónico..." data-toggle="tooltip" data-placement="left" title="Ejemplo: ejemplo@email.com" required>
								</div>
							</div>
							<div class="col-lg-6">
								<!-- Dropdown estados de México --> 
								<div class="form-group">
									<select name="estados" id="estados" class="form-control formulario-input" required>
										<option value="" selected="selected">Seleccione un estado...</option>
				                        <option value="Aguascalientes">Aguascalientes</option>
				                        <option value="Baja California">Baja California</option>
				                        <option value="Baja California Sur">Baja California Sur</option>
				                        <option value="Campeche">Campeche</option>
				                        <option value="Coahuila">Coahuila</option>
				                        <option value="Colima">Colima</option>
				                        <option value="Chiapas">Chiapas</option>
				                        <option value="Chihuahua">Chihuahua</option>
				                        <option value="Ciudad de Mexico">Ciudad de México</option>
				                        <option value="Durango">Durango</option>
				                        <option value="Guanajuato">Guanajuato</option>
				                        <option value="Estado de México">Estado de México</option>
				                        <option value="Guerrero">Guerrero</option>
				                        <option value="Hidalgo">Hidalgo</option>
				                        <option value="Jalisco">Jalisco</option>
				                        <option value="Michoacán">Michoacán</option>
				                        <option value="Morelos">Morelos</option>
				                        <option value="Nayarit">Nayarit</option>
				                        <option value="Nuevo León">Nuevo León</option>
				                        <option value="Oaxaca">Oaxaca</option>
				                        <option value="Puebla">Puebla</option>
				                        <option value="Querétaro">Querétaro</option>
				                        <option value="Quintana Roo">Quintana Roo</option>
				                        <option value="San Luis Potosí">San Luis Potosí</option>
				                        <option value="Sinaloa">Sinaloa</option>
				                        <option value="Sonora">Sonora</option>
				                        <option value="Tabasco">Tabasco</option>
				                        <option value="Tamaulipas">Tamaulipas</option>
				                        <option value="Tlaxcala">Tlaxcala</option>
				                        <option value="Veracruz">Veracruz</option>
				                        <option value="Yucatán">Yucatán</option>
				                        <option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" name="telefono" class="form-control formulario-input" placeholder="Teléfono..." data-toggle="tooltip" data-placement="left" title="Favor de incluir lada." required>	
								</div>
								<div class="form-group">
									<textarea name="mensaje" class="form-control formulario-input" rows="3" placeholder="Mensaje..." required></textarea>	
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>
				        					<input type="checkbox" required> He leído y acepto el <a href="" data-toggle="modal" data-target="#a-privacidad">aviso de privacidad</a>.
				        				</label>
									</div>
								</div>
								<div class="col-lg-6 text-right">
									<button id="enviar" type="submit" class="btn btn-default" style="background-color:rgb(7,22,137);color:rgb(255,255,255);"><i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar</button>
								</div>
							</div>
						</div>
					</form>
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
		    $('#categorias').change(function() {
		    	var seleccion = $('#categorias option:selected').val();
		    	if (seleccion=='Valor agregado') {
			  		$("#myCarousel").carousel(0);
			  		$('#myCarousel').carousel('pause');
			  	};
			  	if (seleccion=='Pollo fresco') {
			  		$("#myCarousel").carousel(1);
			  		$('#myCarousel').carousel('pause');
			  	};
			  	if (seleccion=='Pollo vivo') {
			  		$("#myCarousel").carousel(2);
			  		$('#myCarousel').carousel('pause');
			  	};
			  	if (seleccion=='Rendering') {
			  		$("#myCarousel").carousel(3);
			  		$('#myCarousel').carousel('pause');
			  	};
			});
    	</script>
	</body>
</html>

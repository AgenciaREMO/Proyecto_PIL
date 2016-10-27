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
		<?php
			menu("8");
		?>
		<!-- Carousel -->
	    <header id="myCarousel" class="carousel slide carousel-negocio">
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
	                <div class="fill" style="background-image:url('rec/img/b_valor_agregado.jpg');">
	                	<div class="container">
		                	<div class="row">
			                	<div class="carousel-caption">
								   	<h2>Valor Agregado</h2>
									<p>La mejor opción si buscas productos como nuggets, hamburguesas, pierna y muslo empanizados, cordon bleu, o tenders.</p>
								</div>
			               	</div>
		                </div>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_fresco.jpg');">
	                	<div class="container">
	                		<div class="row ">
		                		<div class="carousel-caption">
								   	<h2>Pollo Fresco</h2>
									<p>Si buscas pollo entero, en piezas, rosticero, o alitas marinadas.</p>
								</div>
		                	</div>
	                	</div>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_pollo_vivo.jpg');">
	                	<div class="container">
	                		<div class="row ">
		                		<div class="carousel-caption">
								   	<h2>Pollo Vivo</h2>
									<p>Si buscas aves hembras o machos, de la mejor calidad.</p>
								</div>
		                	</div>
	                	</div>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" style="background-image:url('rec/img/b_render.jpg');">
	                	<div class="container">
	                		<div class="row ">
		                		<div class="carousel-caption">
								   	<h2>Render</h2>
									<p>Si buscas productos como pollinaza y gallinaza, huevo para uso industrial, harinas de carne o mixta, pastas, chatarra de maquinaria o pedacería, y gallina de desecho. ¡Contactanos!</p>
								</div>
		                	</div>
	                	</div>
	                </div>
	            </div>
	        </div>

	        <!-- Controls -->
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	            <span class="icon-prev"></span>
	        </a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next">
	            <span class="icon-next"></span>
	        </a>
	    </header>
	    <section class="content container">
			<h1>Hagamos negocio</h1>
			<ol class="breadcrumb">
				<li><a href="inicio.php">Inicio</a></li>
				<li class="active">Hagamos negocio</li>
			</ol>

			<div class="container notificacion">
				<?php
					if (isset($_GET['res'])) {
						$res = $_GET['res'];
						if ($res=="1") {
							echo "<div class='alert alert-success alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert'>&times;</button>
								<p><i class='fa fa-check' aria-hidden='true'></i> ¡Envio exitoso!</p>
							</div>";
						}
						else if ($res=="2") {
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
					<div class="col-lg-12">
						<label for="categorias">¿En qué esta interesado?</label>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<select name="categorias" id="categorias" class="form-control formulario-input" required>
								<option value="" selected="selected">Seleccione una categoría...</option>
		                        <option value="Valor agregado">Valor agregado</option>
		                        <option value="Pollo fresco">Pollo fresco</option>
		                        <option value="Pollo vivo">Pollo vivo</option>
		                        <option value="Render">Render</option>
							</select>
						</div>
						<img src="rec/img/triangulo.png" alt="triangulo" class="triangulo">
						<div class="info-negocio">
							<i class="fa fa-hand-o-right" aria-hidden="true"></i>
							<span name="info-categoria" id="info-categoria"> Descripción de la categoría seleccionada.</span>
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
		        					<input type="checkbox" required> He leído y acepto el aviso de privacidad.
		        				</label>
							</div>
						</div>
						<div class="col-lg-6 text-right">
							<button id="enviar" type="submit" class="btn btn-default"><i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar</button>
						</div>
					</div>
				</div>
			</form>
		</section>
		<?php
			footer();
		?>
	</body>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		    $('#categorias').change(function(){
		    	var html = "<i class='fa fa-hand-o-right' aria-hidden='true'></i>";
		    	var seleccion = $("#categorias").val();
		    	if(seleccion == "Valor agregado"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas productos como Nuggets, hamburguesas, pierna y muslo empanizada, cordon bleu, o tenders.");
		    	}
		    	else if(seleccion == "Pollo fresco"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas Pollo entero, en piezas, rosticero, o alitas marinadas.");
		    	}
		    	else if(seleccion == "Pollo vivo"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas aves hembras o machos, de la mejor calidad.");
		    	}
		    	else if(seleccion == "Render"){
		    		$("#info-categoria").html(html);
		    		$("#info-categoria").text(" Tu mejor opción si buscas productos como pollinaza y gallinaza, huevo para uso industrial, harinas de carne o mixta, pastas, chatarra de maquinaria o pedacería, y gallina de desecho.");
		    	}
		    });
		});
	</script>
</html>

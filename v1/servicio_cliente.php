<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta_alt(); ?>
	  	<title>Servicio al cliente - Pilgrim's</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="css/pilgrimsML.css" rel="stylesheet">
	</head>
	<body>
		<?php
			menu("8");
		?>
		<div class="nuestras-marcas">
			<section class="content">
				<img src="rec/img/banners_jpg/servicio_a_clientes.jpg" alt="img-responsive" class="banner">
			</section>
			<div class="gris-banner">
		    </div>
			<section class="content container" style="padding-bottom:2%;">
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Contacto</li>
					<li class="active">Servicio al cliente</li>
				</ol>
				<section class="container text-center ">
					<div class="row plecas">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-cliente.png">
						</div>
					</div>
				</section>
				
				<div class="cont p-02" data-speed="2" data-type="background">
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

					<form action="enviar_servicio_cliente.php" class="formulario" method="POST">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="nombre" class="form-control formulario-input" placeholder="Nombre completo..." required>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control formulario-input" placeholder="Correo electrónico..." data-toggle="tooltip" data-placement="left" title="Ejemplo: ejemplo@email.com" required>
								</div>
								<div class="form-group">
									<input type="text" name="telefono" class="form-control formulario-input" placeholder="Teléfono..." data-toggle="tooltip" data-placement="left" title="Favor de incluir lada." required>	
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
	</body>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		    $('.noti-footer').css('display','none');
		});
	</script>
</html>

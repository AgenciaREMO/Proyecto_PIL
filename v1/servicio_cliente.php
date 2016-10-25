<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>INICIO - PILGRIM'S</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
	</head>
	<body>
		<?php
			menu("8");
		?>
		<section class="content">
			<img src="rec/img/b_contacto.jpg" alt="img-responsive" class="banner">
		</section>
		<section class="content container">
			<form action="enviar_servicio_cliente.php" class="form-horizontal" method="POST">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<input type="text" name="nombre" class="form-control" placeholder="Nombre completo..." required>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control i-email" placeholder="Correo electronico..." required>
						</div>
						<div class="form-group">
							<input type="text" name="telefono" class="form-control" placeholder="Teléfono..." required>	
						</div>
					</div>
					<div class="col-lg-6">
					<!-- Dropdown estados de México --> 
						<div class="form-group">
							<select name="estados" id="estados" class="form-control" required>
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
							<textarea name="mensaje" class="form-control" rows="3" placeholder="Mensaje..." required></textarea>	
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>
		        					<input type="checkbox" required> He leído y acepto el aviso de privacidad.
		        				</label>
							</div>
						</div>
						<div class="col-lg-6 text-right">
							<button id="enviar" type="submit" class="btn btn-default">Enviar</button>
						</div>
					</div>
				</div>
			</form>
		</section>
		<?php
			footer();
		?>
	</body>
</html>

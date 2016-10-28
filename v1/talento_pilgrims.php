<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Servicio al cliente - Pilgrim's</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="css/pilgrimsML.css" rel="stylesheet">
	</head>
	<body>
		<?php
			menu("9");
		?>
		<section class="content">
			<img src="rec/img/b_talento.jpg" alt="img-responsive" class="banner">
		</section>
		<section class="content container">
			<h1 class="h1-producto">Talento Pilgrim's</h1>
			<ol class="breadcrumb">
				<li><a href="inicio.php">Inicio</a></li>
				<li class="active">Talento Pilgrim's</li>
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

			<form action="enviar_talento_pilgrims.php" class="formulario" method="POST" enctype="multipart/form-data"> <!--Determinar el tipo de informaicon-->
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
						<div class="form-group">   
				        	<label for="archivo">Adjunta tu curriculum:</label>
				            <!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
				            <input type="file" name="archivo" id="archivo" class="form-control formulario-input" required>
						</div>
					</div>
					<div class="col-lg-6">
					<!-- Dropdown estados de México --> 
						<div class="form-group">
							<textarea name="mensaje" class="form-control formulario-input" rows="5" placeholder="Mensaje..." required></textarea>	
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
		});
	</script>
</html>

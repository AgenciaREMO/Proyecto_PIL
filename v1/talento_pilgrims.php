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
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php
			menu("9");
		?>
		<div class="nuestras-marcas">
			<section class="content" style="position:relative">
				<img src="rec/img/banners_jpg/talento.jpg" alt="Banner" class="banner">
				<div id="b" class="flecha text-center animated infinite tada" style="position:absolute">
					<a href="#b">
					   <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
					</a>
				</div>
			</section>
			<div class="gris-banner-sl">
		    </div>
			<section class="content container" style="padding-bottom:2%;">
				<ol class="breadcrumb">
					<li><a href="inicio.php">Inicio</a></li>
					<li class="active">Talento Pilgrim's</li>
				</ol>
				<section class="container text-center ">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-talento.png">
						</div>
					</div>
				</section>
				<div class="cont p-02" data-speed="2" data-type="background">
					<div class="container notificacion">
						<?php
							if (isset($_GET['restalento'])) {
								$res = $_GET['restalento'];
								if ($restalento=="1") {
									echo "<div class='alert alert-success alert-dismissable'>
										<button type='button' class='close' data-dismiss='alert'>&times;</button>
										<p><i class='fa fa-check' aria-hidden='true'></i> ¡Envio exitoso!</p>
									</div>";
								}
								else if ($restalento=="2") {
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
								<div class="form-group text-left">   
						        	<label for="archivo" >Adjunta tu curriculum:</label>
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
				        					<input type="checkbox" required> He leído y acepto el aviso de <a href="" data-toggle="modal" data-target="#a-privacidad">privacidad</a>.
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
			<?php
				footer();
			?>
		</div
	</body>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</html>

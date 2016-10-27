<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Estándares de Calidad - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, estándares de calidad, tif, certificación">
		<link rel="stylesheet" type="text/css" href="css/4_5_4styles.min.css">
		<!-- /TERMINA MAPA-->
		<title>DISTRIBUIDORES - KURIMEXICANA</title>

		<style>
	      #map {
	        height: 550px;
	        width: 100%;     
	      }
	    </style>
		<meta name="description" content="">
	    <meta name="keywords" content="">
	</head>
<body class="sucursales">

	<?php
		menu("1");
	?>

	<!-- MENU-->
	<!-- menú --> 


<!-- / menú --> 
	<!-- /MENU -->
	
	<section class="col-md-12 hidden-sm hidden-xs">
		<div class="cont-map">
			<div id="maps">
				<div id="mapa-principal">
					<!--
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4442.22672377184!2d-100.27414539303317!3d20.569569390877696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d342977ac75079%3A0xd97e8aa1c196f011!2sKurimexicana+S.A+de+C.V.!5e0!3m2!1ses!2smx!4v1470760978554" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					-->
					<div id="map"></div>
				    <script>

					function initMap() {
					  var muno = {lat: 19.364030, lng: -99.181781};  // D.F. 19.364030, -99.181781
					  var mdos = {lat: 19.364030, lng: -99.181781}; // D.F. 19.364030, -99.181781
					  var mtres = {lat: 20.654383,  lng: -100.432934}; // Qro 20.654383, -100.432934
					  var mcuatro = {lat: 24.834580, lng: -107.370992};	// Culiacán 24.834580, -107.370992
					  var mcinco = {lat: 25.554027,  lng: -103.468356}; // Durango 25.554102, -103.468833
					  var mseis = {lat: 19.750429, lng: -99.134574}; // Estado de México 19.750429, -99.134574
					  var msiete = {lat: 25.580312, lng: -100.900484}; // Coahuila 25.580312, -100.900484 pendiente
					  
					  var map = new google.maps.Map(document.getElementById('map'), {
					    zoom: 4,
					    center: muno
					  });

					  ////////////////////////////
					  var uno = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Pilgrim’s México</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Av. Insurgentes Sur No. 1602 3er piso #301 <br/>Col. Crédito Consultor, Delegación Benito Juárez, <br/> C.P. 03940 Ciudad de México</p>'+
					      '</div>'+
					      '</div>';

					  var infouno = new google.maps.InfoWindow({
					    content: uno
					  });

					  var marcauno = new google.maps.Marker({
					    position: muno,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcauno.addListener('click', function() {
					    infouno.open(map, marcauno);
					  });

					  ////////////////////////////
					  var dos = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Pilgrim’s México</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Av. Insurgentes Sur No. 1602 3er piso #301 <br/>Col. Crédito Consultor, Deleg. Benito Juárez, <br/>C.P. 03940. México, DF.</p>'+
					      '</div>'+
					      '</div>';

					  var infodos = new google.maps.InfoWindow({
					    content: dos
					  });

					  var marcados = new google.maps.Marker({
					    position: mdos,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcados.addListener('click', function() {
					    infodos.open(map, marcados);
					  });

					  ////////////////////////////
					  var tres = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Corporativo Pilgrim’s Querétaro</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Privada de los Industiales 115<br/> Col. Jurica<br/>C.P. 76100 Querétaro, Qro.</p>'+
					      '</div>'+
					      '</div>';

					  var infotres = new google.maps.InfoWindow({
					    content: tres
					  });

					  var marcatres = new google.maps.Marker({
					    position: mtres,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcatres.addListener('click', function() {
					    infotres.open(map, marcatres);
					  });

					  ////////////////////////////
					  var cuatro = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Oficinas Culiacán</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Calle Galileo No. 2784<br/> Col. Villa Universidad<br/>Culiacán Sinaloa</p>'+
					      '</div>'+
					      '</div>';

					  var infocuatro = new google.maps.InfoWindow({
					    content: cuatro
					  });

					  var marcacuatro = new google.maps.Marker({
					    position: mcuatro,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcacuatro.addListener('click', function() {
					    infocuatro.open(map, marcacuatro);
					  });

					  ////////////////////////////
					  var cinco = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Oficinas Durango</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Calle Valle del Guadiana #294<br/> Parque Industrial Gómez Palacio<br/>C.P. 35078 Durango</p>'+
					      '</div>'+
					      '</div>';

					  var infocinco = new google.maps.InfoWindow({
					    content: cinco
					  });

					  var marcacinco = new google.maps.Marker({
					    position: mcinco,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcacinco.addListener('click', function() {
					    infocinco.open(map, marcacinco);
					  });

					  //////////////////////////// 6
					  var seis = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Oficinas Estado de México</h2>'+
					      '<div>'+
					      '<p>Carr. Teoloyucan - Jaltenco S/N <br/> Col. Ejido de Nextlapan<br/></p>'+
					      '</div>'+
					      '</div>';

					  var infoseis = new google.maps.InfoWindow({
					    content: seis
					  });

					  var marcaseis = new google.maps.Marker({
					    position: mseis,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcaseis.addListener('click', function() {
					    infoseis.open(map, marcaseis);
					  });

					  //////////////////////////// 7
					  var siete = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Oficinas Saltillo</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Carr. A Piedras Negras KM 11.5<br/> Ramos Arizpe<br/> Coahuila</p>'+
					      '</div>'+
					      '</div>';

					  var infosiete = new google.maps.InfoWindow({
					    content: siete
					  });
					  var marcasiete = new google.maps.Marker({
					    position: msiete,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcasiete.addListener('click', function() {
					    infosiete.open(map, marcasiete);
					  });
					}

				    </script>
				    <script async defer
				        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCnsDYOv3bixc66gjmFqCiS7LCYL3UIMg&signed_in=true&libraries=places&callback=initMap"></script>
					
				</div>
				<div id="map-uno">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Av.%20Insurgentes%20Sur%20No.%201602%203er%20piso%20%23301%20Col.%20Cr%C3%A9dito%20Consultor%2C%20Deleg.%20Benito%20Ju%C3%A1rez%2C%20C.P.%2003940.%20M%C3%A9xico%2C%20DF.&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-dos">
					<div class=" mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Av.%20Insurgentes%20Sur%20No.%201602%203er%20piso%20%23301%20Col.%20Cr%C3%A9dito%20Consultor%2C%20Deleg.%20Benito%20Ju%C3%A1rez%2C%20C.P.%2003940.%20M%C3%A9xico%2C%20DF.&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-tres">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Privada%20de%20los%20industriales%20115%20Col.%20Jurica%20%20CP.%2076100%20%20Quer%C3%A9taro%2C%20Qro.&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				
				<div id="map-cuatro">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Galileo%20No.%202784%20Col.%20Villa%20Universidad%2C%20Culiac%C3%A1n%20Sinaloa.&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64"  width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-cinco">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Ubicaci%C3%B3n%3A%20Calle%20Valle%20del%20Guadiana%20%23294%20Parque%20Industrial%20G%C3%B3mez%20Palacio%20C.P.%2035078&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-seis">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Carretera%20Teoloyucan%20%20Jaltenco%20%2C%20Colonia%20Ejidos%20De%20Nextlalpan%20Estado%20de%20M%C3%A9xico&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-siete">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Ramos%20Arizpe%2C%20Coahuila&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div><!--/.maps -->
		</div><!--/.cont-map -->

		<!--<section class="sucursal">
				<div class="row">
					<div id="unon">
						<div class="col-md-3 col-sm-3 text-right">
							<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>KURIMEXICANA QUERÉTARO</h4>
							<p>
								Matriz y Planta
								<br/>
								<i class="fa fa-mobile " aria-hidden="true"></i> (442) 103-1400 / 01(800) 0120-112
								
								<br/>
								Av. de las Fuentes #6 Parque Industrial Bernardo Quintana. <br/>El Marqués, Querétaro. C.P. 76246
							</p>
						</div>
					</div>
					<div id="dosn">
						<div class="col-md-3 col-sm-3 text-right">
						<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>KURIMEXICANA GUADALAJARA</h4>
							<p>
								<i class="fa fa-mobile " aria-hidden="true"></i> (33) 3162-0801 / Fax. (33) 3810-8666
								
								<br/>
								Calle Andador del Rosario No. 268 Col. Fraccionamiento Tonaltecas. <br>Tonalá Jalisco. C.P. 45400
							</p>
						</div>
					</div>
					<div id="tresn">
						<div class="col-md-3 col-sm-3 text-right">
						<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>KURIMEXICANA NORESTE</h4>
							<p>
								Matriz y Planta
								<br/>
								<i class="fa fa-mobile " aria-hidden="true"></i> Nextel: (833) 3 59 14 45 / ID: 52*15*42941
								<br/>
								Calle Burgos No. 726-C Col. Colinas de San Genaro. <br>Tampico, Tamaulipas. C.P. 89367
							</p>
						</div>
					</div>
					<div id="cuatron">
						<div class="col-md-3 col-sm-3 text-right">
						<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>CHIHUAHUA</h4>
							<p>
								INDUSTRIAL WATER SERVICIES
								<br/>
								<i class="fa fa-mobile " aria-hidden="true"></i> (656) 619-2808 / Fax. (656) 620-8728
								<br/>
								Cordillera de los Andes No. 5740 Col. Jarudo del Norte. <br>Cd. Juárez, Chih. C.P. 32652
							</p>
						</div>
					</div>
					<div id="cincon">
						<div class="col-md-3 col-sm-3 text-right">
							<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>COAHUILA / MONCLOVA</h4>
							<p>
								ING. OBED CHÁVEZ PRUNEDA
								<br/>
								<i class="fa fa-mobile " aria-hidden="true"></i> Tel/Fax. (865) 635-1869 / Cel. (866) 638-1999
								<br/>
								Calle Morse No. 1308  Col. Tecnológico. <br>Monclova, Coahuila, C.P. 25716
							</p>
						</div>
					</div>
					<div id="seisn">
						<div class="col-md-3 col-sm-3 text-right">
							<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>COAHUILA / TORREÓN</h4>
							<p>
								SYNERGY AMBIENTAL MEXICANA
								<br/>
								<i class="fa fa-mobile " aria-hidden="true"></i> (871) 193-9633
								<br/>
								Calle del Halcón No. 562 Fracc. Santa Fé. <br>Torreón, Coahuila CP. 27000.
							</p>
						</div>
					</div>
					<div id="sieten">
						<div class="col-md-3 col-sm-3 text-right">
							<i class="fa fa-map-marker fa-3x hidden-xs" aria-hidden="true"></i>
						</div>
						<div class="col-md-7 col-sm-7 text-left">
							<h4>GUERRERO / ACAPULCO</h4>
							<p>
								ALBERCAS Y TRATAMIENTO DE AGUA DE ACAPULCO
								<br/>
								<i class="fa fa-mobile " aria-hidden="true"></i> (744) 433-4367
								<br/>
								
								Blvd. De las Naciones No.2157 Local D Col. La Poza ó La Zanja. <br>Acapulco de Juárez, Gro. C.P. 39906
							</p>
						</div>
					</div>
				</div>
		</section>-->


	</section>
	<div class="container">
		<section class="col-md-12">
		<br/>
		<div class="row lista-sucur">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h3>OFICINAS</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 text-center">
					<div id="btn-uno" >
						<span id="btn-dos">PILGRIM'S MÉXICO</span><br>
						<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Av. Insurgentes Sur No. 1602 3er piso #301 Col. Crédito Consultor, Deleg. Benito Juárez, C.P. 03940. México, DF.<br>
						<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (55) 54488300
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 text-center">
					<div id="btn-dos" >
						<span id="btn-tres">CORPORATIVO PILGRI'S QUERÉTARO</span><br>
						<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Privada de los industriales 115 Col. Jurica  CP. 76100  Querétaro, Qro.<br>
						<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> 442 103 2200
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 text-center">
					<div id="btn-cuatro" >
						<span id="btn-cuatro">OFICINAS CULIACÁN</span><br>
						<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Galileo No. 2784 Col. Villa Universidad, Culiacán Sinaloa.<br>
						<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (667) 1469827
					</div>
				</div>
			</div>
			<br>
			<div  class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 text-center">
					<div id="btn-cinco" >
						<span id="btn-cinco">OFICINAS DURANGO</span><br>
						<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Calle Valle del Guadiana #294 Parque Industrial Gómez Palacio C.P. 35078<br>
						<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> 871 749 2000
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 text-center">
					<div id="btn-seis" >
						<span id="btn-seis">OFICINAS ESTADO DE MÉXICO</span><br>
						<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Carr. Teoloyucan – Jaltenco S/N, Col. Ejidos De Nextlalpan<br>
						<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (59) 39147219
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 text-center">
					<div id="btn-siete"> 
						<span id="btn-siete">OFICINAS SALTILLO</span><br>
						<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Carretera A Piedras Negras Km. 11.5, Ramos Arizpe, Coahuila.<br>
						<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (844) 171 4070
					</div>
				</div>					
			</div>
		</div>
		<br/>
	</section>
	</div>
	
	<div class="clearfix"></div>
	
	

		

    
	


    <!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>	
	<script src="js/modern-business.js"></script>


	<?php
		footer();
	?>
</body>
</html>

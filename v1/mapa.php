<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>Oficinas - PILGRIM'S</title>
		<meta name="description" content="Oficinas corporativas de Pilgrim's en México">
		<meta name="keywords" content="Oficinas, corporativas, ubicación">

		<style>
	      #map {
	        height: 350px;
	        width: 100%;     
	      }
	    </style>
		<meta name="description" content="">
	    <meta name="keywords" content="">
	</head>
<body class="bg-content ">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
		menu("8");
	?>
	<section class="col-md-12 hidden-sm hidden-xs content">
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
					  var mocho = {lat: 19.145493, lng: -96.105103}; // Veracruz 19.145493, -96.105103 
					  
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


					  //////////////////////////// 7
					  var ocho = '<div id="content">'+
					      '<div id="siteNotice">'+
					      '</div>'+
					      '<h2 id="firstHeading" class="firstHeading">Veracruz</h2>'+
					      '<div id="bodyContent">'+
					      '<p>Reyes Católicos # 231,Depto.202,<br/> Fracc. Las Américas,<br/> Boca del Rio, Veracruz.</p>'+
					      '</div>'+
					      '</div>';

					  var infoocho = new google.maps.InfoWindow({
					    content: ocho
					  });
					  var marcaocho = new google.maps.Marker({
					    position: mocho,
					    map: map,
					    title: 'Presiona para ver detalles'
					  });
					  marcaocho.addListener('click', function() {
					    infoocho.open(map, marcaocho);
					  });
					}

				    </script>
				    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCnsDYOv3bixc66gjmFqCiS7LCYL3UIMg&signed_in=true&libraries=places&callback=initMap"></script>
					
				</div>
				<div id="map-uno">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-xf9TYz_0YURVpN2I6w5ZP0&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-dos">
					<div class=" mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-xf9TYz_0YURVpN2I6w5ZP0&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Carr%20Teoloyucan%20-%20Jaltocan%20&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64"  width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="map-siete">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed/v1/place?q=Saltillo-Monterrey%20301%20Fraccionamiento%20del%20Bosque%2025903%20Ramos%20Arizpe%2C%20Coah.&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64" width="100%" height="550" frameborder="0" style="border:0"  allowfullscreen></iframe>
					</div>
			</div>
			<div id="map-ocho">
					<div class="mapa">
  						<iframe src="https://www.google.com/maps/embed/v1/place?q=Reyes%20Cat%C3%B3licos%20%23%20231%2C%20%20Depto.202%2C%20Fracc.%20Las%20Am%C3%A9ricas%2C%20Boca%20del%20Rio%2C%20Veracruz.&key=AIzaSyDndS2QqSrlCrWGYg1yF4juTLWxqxmHJ64"  width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>					</div>
			</div><!--/.maps -->
		</div><!--/.cont-map -->

	</section>
	<div class="bg-content">
		<div class="container">
				<ol class="breadcrumb">
		  <li><a href="inicio.php">Inicio</a></li>
		  <li class="active">Oficinas</li>
		</ol>
			<div class="wow fadeInUp animated" data-wow-delay="0.6s" data-wow-duration="0.10s" style="visibility: visible; 
																											 animation-duration: 0.10s; 
																											 animation-delay: 0.6s; 
																											 animation-name: fadeInUp;">
					
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">
						<img class="img-responsive" style="margin: auto;" src="rec/img/titulos/titulo-oficinas.png">
					</div>
				</div>
			</div>
		<section class="col-md-12 esc-oficinas ">
			<br/>
			<div class="row lista-sucur cont">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-dos" >
							<span id="btn-ofi">PILGRIM'S MÉXICO</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Av. Insurgentes Sur No. 1602 3er piso #301 Col. Crédito Consultor, Deleg. Benito Juárez, C.P. 03940. México, DF.<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (55) 54488300
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-tres"  >
							<span id="btn-ofi">CORPORATIVO PILGRI'S QUERÉTARO</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Privada de los industriales 115 Col. Jurica  CP. 76100  Querétaro, Qro.<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> 442 103 2200
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-cuatro"  >
							<span id="btn-ofi">OFICINAS CULIACÁN</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Galileo No. 2784 Col. Villa Universidad, Culiacán Sinaloa.<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (667) 1469827
						</div>
					</div>
				</div>
				<br>
				<div  class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-cinco"  >
							<span id="btn-ofi">OFICINAS DURANGO</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Calle Valle del Guadiana #294 Parque Industrial Gómez Palacio C.P. 35078<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> 871 749 2000
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-seis"  >
							<span id="btn-ofi">OFICINAS ESTADO DE MÉXICO</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Carr. Teoloyucan – Jaltenco S/N, Col. Ejidos De Nextlalpan<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (59) 39147219
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-siete" > 
							<span id="btn-ofi">OFICINAS SALTILLO</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Carretera A Piedras Negras Km. 11.5, Ramos Arizpe, Coahuila.<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (844) 171 4070
						</div>
					</div>					
				</div>
				<br>
				<div  class="row">
					<div class="col-lg-offset-4 col-lg-4  col-md-6 col-sm-12 text-center">
						<div id="btn-ocho"  >
							<span id="btn-ofi"> VERACRUZ</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Reyes Católicos #231,<br>Depto. 202, Fracc. Las Américas,<br>Boca del Río, Veracruz
						</div>
					</div>				
				</div>
			</div>
			<br/>
		</section>
	</div>
	<div class="container bg-content ">
		<section class="col-md-12 mob-oficinas">
			<br/>
			<div class="row lista-sucur cont">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-dos" >
							Presiona la dirección que quieres ver.
							<img class="img-responsive" style="margin:auto;" src="rec/img/franja.png">
						</div>
					</div>
					<br/>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-dos" >
							<a href="https://www.google.com.mx/maps/place/Av+de+los+Insurgentes+Sur+1602,+Cr%C3%A9dito+Constructor,+03940+Ciudad+de+M%C3%A9xico,+D.F./@19.3639743,-99.1824842,19z/data=!4m5!3m4!1s0x85d1ff8c4dfd17fb:0xfd6439ac23769356!8m2!3d19.3639743!4d-99.181937"><span id="btn-ofi">PILGRIM'S MÉXICO</span><br>
								<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Av. Insurgentes Sur No. 1602 3er piso #301 Col. Crédito Consultor, Deleg. Benito Juárez, C.P. 03940. México, DF.<br>
								<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (55) 54488300
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-tres"  >
							<a href="https://www.google.com/maps/place/Privada+de+los+Industriales+115,+Jurica,+76100+Santiago+de+Quer%C3%A9taro,+Qro.,+M%C3%A9xico/@20.654372,-100.433763,18z/data=!4m5!3m4!1s0x85d35a739ee7889b:0xa6bdc827f81d3f2a!8m2!3d20.6542721!4d-100.4329127?hl=es-ES">
								<span id="btn-ofi">CORPORATIVO PILGRI'S QUERÉTARO</span><br>
								<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Privada de los industriales 115 Col. Jurica  CP. 76100  Querétaro, Qro.<br>
								<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> 442 103 2200
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-cuatro"  >
							<a href="https://www.google.com/maps?ll=24.834504,-107.370979&z=17&t=m&hl=es-ES&gl=US&mapclient=embed&q=Galileo+2784+Loma+de+Tamazula+80014+Culiac%C3%A1n+Rosales,+Sin.+M%C3%A9xico">
								<span id="btn-ofi">OFICINAS CULIACÁN</span><br>
								<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Galileo No. 2784 Col. Villa Universidad, Culiacán Sinaloa.<br>
								<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (667) 1469827
							</a>
						</div>
					</div>
				</div>
				<br>
				<div  class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-cinco"  >
							<a href="https://www.google.com/maps/place/Calle+Valle+del+Guadiana+294,+Parque+Industrial,+35078+G%C3%B3mez+Palacio,+Dgo.,+M%C3%A9xico/@25.554066,-103.469064,17z/data=!4m5!3m4!1s0x868fd975db7fe267:0xd2e36b839b3b406c!8m2!3d25.5540656!4d-103.4690638?hl=es-ES">
								<span id="btn-ofi">OFICINAS DURANGO</span><br>
								<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Calle Valle del Guadiana #294 Parque Industrial Gómez Palacio C.P. 35078<br>
								<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> 871 749 2000
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-seis"  >
							<a href="https://www.google.com/maps/place/Carr+Teoloyucan+-+Jaltocan,+San+Andres,+Jaltenco,+M%C3%A9x.,+M%C3%A9xico/@19.750344,-99.114293,17z/data=!4m5!3m4!1s0x85d18b6f3788fae9:0xd35710d43d408bb3!8m2!3d19.7457483!4d-99.0994361?hl=es-ES">
								<span id="btn-ofi">OFICINAS ESTADO DE MÉXICO</span><br>
								<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación: </b>Carr. Teoloyucan – Jaltenco S/N, Col. Ejidos De Nextlalpan<br>
								<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (59) 39147219
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-siete" >
						<a href="https://www.google.com/maps/place/Saltillo-Monterrey+301,+Fraccionamiento+del+Bosque,+25903+Ramos+Arizpe,+Coah.,+M%C3%A9xico/@25.540879,-100.942997,17z/data=!4m5!3m4!1s0x868814838ebf891b:0x9dd9b7ec858a2012!8m2!3d25.540879!4d-100.9429969?hl=es-ES">
							<span id="btn-ofi">OFICINAS SALTILLO</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Carretera A Piedras Negras Km. 11.5, Ramos Arizpe, Coahuila.<br>
							<b><i class="fa fa-mobile" aria-hidden="true"> </i> Tel:</b> (844) 171 4070
						</a> 
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 text-center">
						<div id="btn-ocho" >
						<a href="https://www.google.com.mx/maps/place/De+Los+Reyes+Cat%C3%B3licos+231,+De+Las+Americas,+Heriberto+Kehoe+Vicent,+94299+Boca+del+R%C3%ADo,+Ver./@19.1452798,-96.1072707,17z/data=!3m1!4b1!4m5!3m4!1s0x85c340fca0eb2a7b:0x72a7169afc97c158!8m2!3d19.1452798!4d-96.105082">
							<span id="btn-ofi">VERACRUZ</span><br>
							<b><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación:</b> Reyes Católicos #231,<br>Depto. 202, Fracc. Las Américas,<br>Boca del Río, Veracruz
						</a> 
						</div>
					</div>					
				</div>
			</div>
			<br/>
		</section>
	</div>
	</div>
	
	
	<div class="clearfix"></div>
	
	

		

    
	


    <!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
    
	<?php
		footer();
	?>

	<!--<script src="js/bootstrap.js"></script>	-->
	<script src="js/modern-business.js"></script>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>

</body>
</html>

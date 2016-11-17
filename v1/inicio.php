<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>INICIO - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, pollo, pollo fresco, valor agregado, lanzamientos">
		<script type="text/javascript" src="rec/video/main.dist.js"></script>
		<script type="text/javascript">
	        $(document).ready(function() {
	            $("#cont-video").fadeOut(20000);
	        });
	    </script>
	</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
		menu("1");
	?>
	<div class="bg-lanzamiento">
		<header id="carousel-inicio" class="carousel slide" style="position:relative">
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#carousel-inicio" data-slide-to="0" class="active"></li>
	            <li data-target="#carousel-inicio" data-slide-to="1"></li>
	            <li data-target="#carousel-inicio" data-slide-to="2"></li>
	            <li data-target="#carousel-inicio" data-slide-to="3"></li>
	        </ol>

	        <!-- Wrapper for slides -->
	        <div class="rojo">
	        </div>
	        <div class="carousel-inner">
	            <div class="item active">
	                <div class="fill" >
	                	<video autoplay="" loop="" width="100%">
						    <source src="rec/video/animacion-pechuga-navidena.mp4" type="video/mp4">
						</video>
		            </div>
	            </div>
	            <div class="item">
	                <div class="fill" >
	                	<video autoplay="" loop="" width="100%">
						    <source src="rec/video/animacion-nuggets.mp4" type="video/mp4">
						</video>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" >
	                	<video autoplay="" loop="" width="100%">
							<source src="rec/video/animacion-boneless.mp4" type="video/mp4">
						</video>
	                </div>
	            </div>
	            <div class="item">
	                <div class="fill" >
	                	<video autoplay="" loop="" width="100%">
							<source src="rec/video/animacion-arrachera.mp4" type="video/mp4">
						</video>
	                </div>
	            </div>
	        	<div class="flecha text-center animated infinite tada" style="position:absolute" id="b">
					<a href="#b">
						<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
					</a>
				</div>
	        </div>
	        <!-- Controls -->
	        <a class="left carousel-control" href="#carousel-inicio" data-slide="prev">
	            <span class="icon-prev"></span>
	        </a>
	        <a class="right carousel-control" href="#carousel-inicio" data-slide="next">
	            <span class="icon-next"></span>
	        </a>
	    </header>



	<!--<div class="app-container" data-bb="app-main-region">-->
		<!--<div class="hero main">
		  <div class="embed-responsive embed-responsive-16by9 vid-bg hidden-sm hidden-xs">
		    <video autoplay="" loop="" muted="" class="embed-responsive-item" controls>
		    	<source src="rec/video/nescafe-background.mp4" type="video/mp4">
		    </video>
		  </div>
		  <img src="rec/img/16x9.png" class="ratio spacer hidden-sm hidden-xs">
		  <img src="//prod1.nescafe.com/es_es/public/img/hero/landing-mobile.gif" class="mobile-hero hidden-md hidden-lg hidden-xl"> 
		  <div id="cont-video" class="vertical-center">
		    <div class="vertical-center-inner">
		      <div class="hero-content">
		        <div class="hero-head">
		          <img src="rec/img/logo-video.png" class="img-responsive center-block">
		        </div>
		        <div class="hero-cta">
		          <h4>
		            Somos el segundo mayor productor de pollo en el mundo. A lo largo de 70 años, en Pilgrim’s, hemos producido alimentos con altos estándares de calidad. Estamos comprometidos con los más de 35,000 miembros del equipo que trabajan con nosotros para ofrecer productos a mayoristas, minoristas, instituciones, restaurantes, autoservicios y clientes.
		          </h4>
		        </div>
		         <div class="hero-head">
		          <img src="rec/img/linea-video.png" class="img-responsive center-block">
		        </div>
		      </div>
		    </div>
		  </div>
		</div>-->
		
		  	<div class="gris-superior">
        	</div>
	<!--</div>-->
	    <!-- Header Carousel -->
	<section class="container text-center ">
		<div class="row plecas">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-lanzamientos.png">
			</div>
		</div>
	</section>
    <header id="carousel-lanzamientos" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-lanzamientos" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-lanzamientos" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="rojo">
        </div>
        <div class="carousel-inner">
            <div class="item active">
                <a href="">
                	<div class="fill" >
                		<img class="img-responsive slide-inicio" src="rec/img/lanzamiento1.jpg" >
	                </div>
                </a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" >
                		<img class="img-responsive slide-inicio" src="rec/img/lanzamiento2.jpg" >
                </div>

                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="rojo">
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-lanzamientos" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-lanzamientos" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!--<section class="container text-center ">
		<div class="row plecas">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-promociones.png">
			</div>
		</div>
	</section>

	<div class="content" style="width:100%; height:auto;">
		<div class="gris-superior"></div>
		<img class="img-responsive" src="rec/img/promocion.jpg">
		<div class="gris-inferior"></div>
	</div>-->

    <!--
	<section class="container text-center ">
		<div class="row plecas">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<img class="img-responsive plecas" style="margin: auto;" src="rec/img/titulos/titulo-noticias.png">
			</div>
		</div>
	</section>
	<div class="container"> 
		<div class="row">
			<div class="col-sm-4 col-lg-4 col-md-4">
	            <div class="thumbnail">
	                <img class="img-responsive img-noti" src="http://placehold.it/280x280" alt="">
	                <div class="caption">
	                    <h4><a href="#">Nombre de la noticia</a>
	                    </h4>
	                    <p>Descripcion de la noticia <a target="_blank" href="http://www.bootsnipp.com">Ver más...</a>.</p>
	                </div>
	            </div>
	        </div>
			<div class="col-sm-4 col-lg-4 col-md-4">
	            <div class="thumbnail">
	                <img class="img-responsive img-noti" src="http://placehold.it/280x280" alt="">
	                <div class="caption">
	                    <h4><a href="#">Nombre de la noticia</a>
	                    </h4>
	                   <p>Descripcion de la noticia <a target="_blank" href="http://www.bootsnipp.com">Ver más...</a>.</p>
	                </div>
	            </div>
	        </div>
			<div class="col-sm-4 col-lg-4 col-md-4">
	            <div class="thumbnail">
	                <img class="img-responsive img-noti" src="http://placehold.it/280x280" alt="">
	                <div class="caption">
	                    <h4><a href="#">Nombre de la noticia</a>
	                    </h4>
	                    <p>Descripcion de la noticia <a target="_blank" href="http://www.bootsnipp.com">Ver más...</a>.</p>
	                </div>
	            </div>
	        </div>
	    </div>
	    <br>
	</div>-->
	</div>
    <div class="bg-inicio">
    	<div class="container">
    		<div id="esc-rec-ini" >
    			<div >
    				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    					<img  id="chef" class="img-responsive" src="rec/img/chef-omar.png" >
    				</div>
    				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
    										<img id="tit-recetario" class="img-responsive" style="margin: auto;" src="rec/img/titulos/titulo-recetario.png">

    				</div>
    				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
    					<div class="bg-recetas">
				    			<div class="row">
					    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 recetas-inicio">
									    <div class="hovereffect">
									        <img class="img-responsive" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Espagueti con pollo en salsa de tomate</h2>
													<p> 
														<a href="r1-pollo-en-tomate.php" >
															Ver receta
														</a>
													</p>
													<hr class="hr-hover"> 
									            </div>
									    </div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 recetas-inicio">
									    <div class="hovereffect">
									        <img class="img-responsive" src="rec/img/recetas/medallones_de_pollo_estilo_Colima.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Medallones de pollo estilo Colima</h2>
													<p> 
														<a href="r3-medallones-colima.php">
															Ver receta
														</a>
													</p>
													<hr class="hr-hover">
									            </div>
									    </div>
									</div>
					    		</div>
				    			<div class="row">
					    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 recetas-inicio">
									    <div class="hovereffect">
									        <img class="img-responsive " src="rec/img/recetas/medallones_de_pollo_con_brocoli_en_salsa_de_queso.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Medallones de pollo con brocolie en salsa de queso</h2>
													<p>
														<a href="r4-medallones-queso.php" >
															Ver receta
														</a>
													</p>
													<hr class="hr-hover"> 
									            </div>
									    </div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 recetas-inicio">
									    <div class="hovereffect">
									        <img class="img-responsive" src="rec/img/recetas/pollo_al_xoconochtle.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Pollo al Xoconochtle</h2>
													<p> 
														<a href="r9-pollo-xoconochtle.php">
															Ver receta
														</a>
													</p>
													<hr class="hr-hover">
									            </div>
									    </div>
									</div>
				    			</div>
				    		</div>
    				</div>
    			</div>
    		</div>
    		<section id="mob-re-ini" >
    				<div class="row">
    					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<img style="margin:auto !important;" id="recetas" class="img-responsive" src="rec/img/recetas.png" >
    					</div>
    				</div>
    					<div class="bg-recetas">
    							<br>
    							<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<h2>Espagueti con pollo en salsa de tomate</h2>
										<p> 
											<a href="r1-pollo-en-tomate.php" >
												Ver receta
											</a>
										</p>
					    			</div>
					    		</div>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
									        <img class="img-responsive img-thumbnail" src="rec/img/recetas/medallones_de_pollo_estilo_Colima.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
										<h2>Medallones de pollo estilo Colima</h2>
										<p> 
											<a href="r3-medallones-colima.php">
												Ver receta
											</a>
										</p>					    			
									</div>
					    		</div>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
									        <img class="img-responsive img-thumbnail" src="rec/img/recetas/medallones_de_pollo_con_brocoli_en_salsa_de_queso.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
										<h2>Medallones de pollo con brocoli en salsa de queso</h2>
										<p> 
											<a href="r4-medallones-queso.php">
												Ver receta
											</a>
										</p>					    			
									</div>
					    		</div>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/pollo_al_xoconochtle.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
										<h2>Pollo al xoconochtle</h2>
										<p> 
											<a href="r9-pollo-xoconochtle.php">
												Ver receta
											</a>
										</p>					    			
									</div>
					    		</div>
					    		<br>
				    	</div>
    		</section>


<!--
    		<section class="esc-re-ini">
    			<table width="100%">
    				<tr>
    					<td style="padding-bottom:0% !important; margin-left:2%; vertical-align: bottom;" rowspan="2"><img style="" id="chef" class="img-responsive" src="rec/img/chef-omar.png" ></td>
    					<td width:="30%" style="vertical-align:top"><img style="margin:auto !important;" id="recetas" class="img-responsive" src="rec/img/recetas.png" ></td>
    				</tr>
    				<tr>
    					<td style="padding-bottom:15%;">
    						<div class="bg-recetas">
				    			<div class="row">
					    			<div style="margin-top:0px !important ;padding:1% !important;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									    <div class="hovereffect">
									        <img class="img-responsive" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Nombre de la receta</h2>
													<p> 
														<a href="#" >
															<i class="fa fa-video-camera fa-2x" aria-hidden="true"></i> <br>
															Ver receta
														</a>
													</p>
													<hr class="hr-hover"> 
									            </div>
									    </div>
									</div>
									<div style="margin-top:0px !important ;padding:1% !important;"  class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									    <div class="hovereffect">
									        <img class="img-responsive" src="rec/img/recetas/medallones_de_pollo_estilo_Colima.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Nombre de la receta</h2>
													<p> 
														<a href="#">
															<i class="fa fa-video-camera fa-2x" aria-hidden="true"></i> <br>
															Ver receta
														</a>
													</p>
													<hr class="hr-hover">
									            </div>
									    </div>
									</div>
					    		</div>
				    			<div class="row">
					    			<div style="margin-top:0px !important ;padding:1% !important;"  class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									    <div class="hovereffect">
									        <img class="img-responsive " src="rec/img/recetas/medallones_de_pollo_con_brocoli_en_salsa_de_queso.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Nombre de la receta</h2>
													<p> 
														<a href="#" >
															<i class="fa fa-video-camera fa-2x" aria-hidden="true"></i> <br>
															Ver receta
														</a>
													</p>
													<hr class="hr-hover"> 
									            </div>
									    </div>
									</div>
									<div style="margin-top:0px !important ;padding:1% !important;"  class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									    <div class="hovereffect">
									        <img class="img-responsive" src="rec/img/recetas/alitas_de_pollo_en_salsa_de_tamarindo_picante_sobre_aranitas_de_plato.jpg">
									            <div class="overlay">
									            	<hr class="hr-hover">
									                <h2>Nombre de la receta</h2>
													<p> 
														<a href="#">
															<i class="fa fa-video-camera fa-2x" aria-hidden="true"></i> <br>
															Ver receta
														</a>
													</p>
													<hr class="hr-hover">
									            </div>
									    </div>
									</div>
				    			</div>
				    		</div>
    					</td>
    				</tr>
    			</table>
    		</section>
    		<section class="esc-991">
    			<table width="100%">
    				<tr>
    					<td style="padding-bottom:0% !important; margin-left:2%; vertical-align: bottom;" rowspan="2"><img style="" id="chef" class="img-responsive" src="rec/img/chef-omar.png" ></td>
    					<td width:="30%" style="vertical-align:top"><img style="margin:auto !important;" id="recetas" class="img-responsive" src="rec/img/recetas.png" ></td>
    				</tr>
    				<tr>
    					<td style="padding-bottom:15%;">
    						<div class="bg-recetas">
    							<br>
    							<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<a href="receta_uno.php"><p>RECETA UNO</p></a>
					    			</div>
					    		</div>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<a href="receta_uno.php"><p>RECETA DOS</p></a>
					    			</div>
					    		</div>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<a href="receta_uno.php"><p>RECETA TRES</p></a>
					    			</div>
					    		</div>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<a href="receta_uno.php"><p>RECETA CUATRO</p></a>
					    			</div>
					    		</div>
					    		<br>
				    	</div>
    					</td>
    				</tr>
    			</table>
    		</section>-->
	    		</div>
    		</div>
    	</div>
    </div>
 	
	<?php
		footer();
	?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('#carousel-lanzamientos').carousel({
        interval: 5000 //changes the speed
    })
    $('#carousel-inicio').carousel({
        interval: 15000 //changes the speed
    })
    </script>

</body>
</html>

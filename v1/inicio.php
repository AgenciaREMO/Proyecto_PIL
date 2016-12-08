<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>INICIO - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, pollo, pollo fresco, valor agregado, lanzamientos">
		<script type="text/javascript">
		    function  efecto(){
		    	
		    	setTimeout(function() {$('#preload').slideUp(2000);},3000);
		    	/*setTimeout(function() {$('#preload').css({'opacity': '0'});},2900);*/
		    	setTimeout(function() {$('#contenido').fadeIn(100);},4000);
		    	setTimeout(function() {$('#menu').fadeIn(100);},4100);
		    	
		        /*$('#preload').hide(3500);
				$('#contenido').fadeIn(4000);
				$('#menu').fadeIn(5000);*/

		   }
	   </script>
  </head>
<body onload="efecto();" style="background-color:#071689;">
<div style="background-color:#071689;" id="preload" >
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<div class="aling">
				<embed class="logo-menu" src="rec/img/svg/logo-pilgrims-intro.svg" style="max-width:400px; width:100%; max-height:300px; height: 100%;">
				<img style="margin:auto !important;" class="img-responsive" src="rec/img/logo_blanco.gif" >
			</div>
		</div>
	</div>
</div>

<div id="contenido" style="display: none" >
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N34BJ5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="menu">
		<?php
			menu("1");
		?>
	</div>
	<div class="videos">
		<section class="">
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
			                <div class=" container">
			                	<video autoplay loop controls width="100%">
								    <source src="rec/video/animacion-pechuga-navidena.mp4" type="video/mp4">
								</video>
			                </div>
			            </div>
		            </div>
		            <div class="item">
		                <div class="fill" >
							<div class=" container">
			                	<video autoplay loop controls width="100%">
								    <source src="rec/video/animacion-nuggets.mp4" type="video/mp4">
								</video>
							</div>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" >
		                	<div class=" container">
			                	<video autoplay loop controls width="100%">
									<source src="rec/video/animacion-boneless.mp4" type="video/mp4">
								</video>
							</div>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" >
		                	<div class=" container">
			                	<video autoplay loop controls width="100%">
									<source src="rec/video/animacion-arrachera.mp4" type="video/mp4">
								</video>
							</div>
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
		</section>
		
	</div>
	<div class="bg-lanzamiento">
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
	</div>
    <div class="bg-inicio-actual">
    	<div class="container">
    		<div id="esc-rec-ini" >
    			<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
				    	<img id="tit-recetario" class="img-responsive rec-inicio" src="rec/img/titulos/titulo-recetario.png">
				    </div>
				</div>
	    		<div class="bg-recetas">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 recetas-inicio">
							<div class="hovereffect">
								<img class="img-responsive" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
								<div class="overlay">
									<hr class="hr-hover">
									<h2>Espagueti con pollo en salsa de tomate</h2>
									<p> 
										<a href="r1-pollo-en-tomate.php" >Ver receta</a>
									</p>
									<hr class="hr-hover"> 
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 recetas-inicio">
							<div class="hovereffect">
								<img class="img-responsive" src="rec/img/recetas/medallones_de_pollo_estilo_Colima.jpg">
									<div class="overlay">
										<hr class="hr-hover">
										<h2>Medallones de pollo estilo Colima</h2>
										<p> 
											<a href="r3-medallones-colima.php"> Ver receta</a>
										</p>
										<hr class="hr-hover">
									</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 recetas-inicio">
							<div class="hovereffect">
								<img class="img-responsive " src="rec/img/recetas/medallones_de_pollo_con_brocoli_en_salsa_de_queso.jpg">
								<div class="overlay">
									<hr class="hr-hover">
									<h2>Medallones de pollo con brocolie en salsa de queso</h2>
									<p>
										<a href="r4-medallones-queso.php" >Ver receta</a>
									</p>
									<hr class="hr-hover"> 
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 recetas-inicio">
							<div class="hovereffect">
								<img class="img-responsive" src="rec/img/recetas/pollo_al_xoconochtle.jpg">
								<div class="overlay">
									<hr class="hr-hover">
									<h2>Pollo al Xoconochtle</h2>
									<p> 
										<a href="r9-pollo-xoconochtle.php"> Ver receta
													</a>
												</p>
												<hr class="hr-hover">
										    </div>
										</div>
									</div>
					    		</div>
				</div>

    		</div>
    		<div id="mob-re-ini">
    			<div class="row">
    					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<img id="recetas" class="img-responsive" src="rec/img/titulos/titulo-recetario.png" >
    					</div>
    				</div>
    					<div class="bg-recetas">
    							<br>
    							<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<p>Espagueti con pollo en salsa de tomate</p>
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
										<p>Medallones de pollo estilo Colima</p>
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
										<p>Medallones de pollo con brocoli en salsa de queso</p>
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
										<p>Pollo al xoconochtle</p>
										<p> 
											<a href="r9-pollo-xoconochtle.php">
												Ver receta
											</a>
										</p>					    			
									</div>
					    		</div>
					    		<br>
				    	</div>
    		</div>
    		
    		<!--<div id="esc-rec-ini" >
    			<div >
    				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    					<img  id="chef" class="img-responsive" src="rec/img/chef-omar.png" >
    				</div>
    				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " >
    					<img id="tit-recetario" class="img-responsive rec-inicio" src="rec/img/titulos/titulo-recetario.png">
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
    						<img id="recetas" class="img-responsive" src="rec/img/titulos/titulo-recetario.png" >
    					</div>
    				</div>
    					<div class="bg-recetas">
    							<br>
    							<div class="row">
					    			<div class="col-lg-2 col-md-2 col-sm-2  col-xs-4">
					    				<img class="img-responsive img-thumbnail" src="rec/img/recetas/espagueti_de_pollo_en_salsa_de_tomate.jpg">
					    			</div>
					    			<div class="col-lg-10 col-md-10 col-sm-10">
					    				<p>Espagueti con pollo en salsa de tomate</p>
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
										<p>Medallones de pollo estilo Colima</p>
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
										<p>Medallones de pollo con brocoli en salsa de queso</p>
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
										<p>Pollo al xoconochtle</p>
										<p> 
											<a href="r9-pollo-xoconochtle.php">
												Ver receta
											</a>
										</p>					    			
									</div>
					    		</div>
					    		<br>
				    	</div>
    		</section>-->

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
        interval: 25000 //changes the speed
    })
    </script>
</div>
</body>
</html>

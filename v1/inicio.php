<!DOCTYPE html>

<html lang="es">
	<head>
	  	<?php require 'template.php'; ?>
	  	<?php meta(); ?>
	  	<title>INICIO - PILGRIM'S</title>
		<meta name="description" content="En Pilgrim’s productora de pollo en México">
		<meta name="keywords" content="Pilgrim's, pollo, pollo fresco, valor agregado, lanzamientos">
		<script type="text/javascript">
	        $(document).ready(function() {
	            $("#cont-video").fadeOut(20000);
	        });
	    </script>
	</head>
<body>
	<?php
		menu("1");
	?>
	<!--<div class="app-container" data-bb="app-main-region">-->
		<div class="hero main">
		  <div class="embed-responsive embed-responsive-16by9 vid-bg hidden-sm hidden-xs">
		    <video autoplay="" loop="" muted="" class="embed-responsive-item">
		    	<source src="rec/video/nescafe-background.mp4" type="video/mp4">
		    </video>
		    <button class="mute on"></button>
		  </div>
		  <img src="rec/img/16x9.png" class="ratio spacer hidden-sm hidden-xs">
		  <img src="//prod1.nescafe.com/es_es/public/img/hero/landing-mobile.gif" class="mobile-hero hidden-md hidden-lg hidden-xl"> <!-- Video Movil-->
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
		        </div><!-- /.hero-cta -->
		         <div class="hero-head">
		          <img src="rec/img/linea-video.png" class="img-responsive center-block">
		        </div>
		      </div><!-- /.hero-content -->
		    </div><!-- /.vertical-center-inner -->
		  </div>
		</div>
	<!--</div>-->



	<!--<section>
		    <video autoplay loop muted poster="screenshot.jpg" id="background">
		      <source src="rec/video/nescafe-background.mp4" type="video/mp4">
		    </video>
	</section>-->

	    <!-- Header Carousel -->
	<!--<div class="">
		<section class="container text-center ">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1> LANZAMIENTOS</h1>
			</div>
		</div>
	</section>
	</div>-->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('rec/img/lanzamiento1.jpg');">
                	<div class="container">
                		<div class="row ">
	                		<div class="col-lg-offset-3 col-lg-8 col-lg-offset-1 col-md-6 col-sm-12text-right">
	                			<i><h2>Conoce la nueva familia de productos de Pollo Fresco</h2></i>
	                			<a href="" ><h2 class="vermas">Ver más ...</h2></a>
	                		</div>
	                	</div>
                	</div>
                </div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('rec/img/lanzamiento1.jpg');">
                	<div class="container">
                		<div class="row ">
	                		<div class="col-lg-offset-3 col-lg-8 col-lg-offset-1 col-md-6 col-sm-12text-right">
	                			<i><h2>Conoce la nueva familia de productos de Pollo Fresco</h2></i>
	                			<a href="" ><h2 class="vermas">Ver más ...</h2></a>
	                		</div>
	                	</div>
                	</div>
                </div>

                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('rec/img/lanzamiento1.jpg');">
                	<div class="container">
                		<div class="row ">
	                		<div class="col-lg-offset-3 col-lg-8 col-lg-offset-1 col-md-6 col-sm-12text-right">
	                			<i><h2>Conoce la nueva familia de productos de Pollo Fresco</h2></i>
	                			<a href="" ><h2 class="vermas">Ver más ...</h2></a>
	                		</div>
	                	</div>
                	</div>
                </div>
                <div class="carousel-caption">
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
    <!--
       <div class="">
		<section class="container text-center ">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1> PROMOCIONES</h1>
			</div>
		</div>
	</section>
	</div>
	-->
    <div class="bg-inicio">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12">
    			<img class="img-responsive" src="rec/img/promocion1.png">
    		</div>
    	</div>
    	<div class="container">
    		<div class="row">
	    		<div class="col-lg-12 col-md-12 col-sm-12">
	    			<img id="recetas" class="img-responsive" src="rec/img/recetas.png">
	    		</div>
    		</div>
    		<br>
    		<div class="bg-recetas row">
	    		<div class="col-lg-4 col-md-6 col-sm-12">
	    			<span class="border-hover"></span>
	    				<img src=".jpg" data-src-mobile="//t1-cms-4.images.toyota-europe.com/toyotaone/eses/toyota-reason-to-own-2014-warranty_tcm-1014-42756.jpg" width="355" height="248">
	    			<video  width="100%" controls">
			    		<source src="rec/video/nescafe-background.mp4" type="video/mp4">
			    	</video>
	    		</div>
	    		<div class="col-lg-4 col-md-6 col-sm-12">
	    			<video class="border-hover" width="100%" controls">
			    		<source src="rec/video/nescafe-background.mp4" type="video/mp4">
			    	</video>
	    		</div>
	    		<div class="col-lg-4 col-md-6 col-sm-12">
	    			<video class="border-hover" width="100%" controls">
			    		<source src="rec/video/nescafe-background.mp4" type="video/mp4">
			    	</video>
	    		</div>
    		</div>
    	</div>
    </div>
 	
	<?php
		footer();
	?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>

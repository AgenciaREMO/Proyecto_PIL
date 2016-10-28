

$(window).bind('scroll', function(){
	/*if($(this).scrollTop() > 200) {
		$(".navbar-fixed-top" ).animate({ "margin-top": "-80px" }, "fast" );
		$(".img-logo" ).animate({ "margin-top": "80px" }, "fast" );
	}if ($(this).scrollTop() < 199){
		$(".navbar-fixed-top" ).animate({ "margin-top": "0px" }, "fast" );
	}*/
});

// Activates the Carousel
$('.carousel').carousel({
  interval: 5000
})

// Activates Tooltips for Social Links
$('.tooltip-social').tooltip({
  selector: "a[data-toggle=tooltip]"
})

$(document).ready(function(){
	$("#map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
	$("#unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
	$("#mapa-principal").show();

	$("#btn-uno").click(function() {
		/*$("#maps").animate({top:'0px'});
		$("#dirs").animate({top:'0px'});*/
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-uno").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
		$("#unon").fadeIn('slow');
	});	
	$("#btn-dos").click(function(event) {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-dos").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
		$("#dosn").fadeIn('slow');
	});
	$("#btn-tres").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-tres").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#tresn").fadeIn('slow');
	});
	$("#btn-cuatro").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-cuatro").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
		$("#cuatron").fadeIn('slow');
	});
	$("#btn-cinco").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-cinco").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
		$("#cincon").fadeIn('slow');
	});
	$("#btn-seis").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-seis").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
		$("#seisn").fadeIn('slow');
	});
	$("#btn-siete").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete").hide();
		$("#map-siete").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten").hide();
		$("#sieten").fadeIn('slow');
	});
});



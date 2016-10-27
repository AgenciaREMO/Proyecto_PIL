

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
	$("#map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
	$("#unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
	$("#mapa-principal").show();

	$("#btn-uno").click(function() {
		/*$("#maps").animate({top:'0px'});
		$("#dirs").animate({top:'0px'});*/
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-uno").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#unon").fadeIn('slow');
	});	
	$("#btn-dos").click(function(event) {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-dos").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#dosn").fadeIn('slow');
	});
	$("#btn-tres").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-tres").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#tresn").fadeIn('slow');
	});
	$("#btn-cuatro").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-cuatro").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#cuatron").fadeIn('slow');
	});
	$("#btn-cinco").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-cinco").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#cincon").fadeIn('slow');
	});
	$("#btn-seis").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-seis").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#seisn").fadeIn('slow');
	});
	$("#btn-siete").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-siete").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#sieten").fadeIn('slow');
	});
	$("#btn-ocho").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-ocho").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#ochon").fadeIn('slow');
	});
	$("#btn-nueve").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-nueve").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#nueven").fadeIn('slow');
	});
	$("#btn-diez").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-diez").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#diezn").fadeIn('slow');
	});
	$("#btn-once").click(function() {
		$("#mapa-principal, #map-uno, #map-dos, #map-tres, #map-cuatro, #map-cinco, #map-seis, #map-siete, #map-ocho, #map-nueve, #map-diez, #map-once").hide();
		$("#map-once").fadeIn('fast');
		$("#n-principal, #unon, #dosn, #tresn, #cuatron, #cincon, #seisn, #sieten, #ochon, #nueven, #diezn, #once").hide();
		$("#once").fadeIn('slow');
	});
});



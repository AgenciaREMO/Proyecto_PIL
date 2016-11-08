/*Nosotros*/
$(document).ready(function(){
	$("#div-mision").hide();
	$("#div-vision").hide();
	$("#div-valores").hide();
	$("#mision").show();
	$("#vision").show();
	$("#valores").show();


	$("#mision").click(function() {
		$("#div-mision").show();
		$("#mision").hide();
		$("#div-vision").hide();
		$("#vision").show();
		$("#div-valores").hide();
		$("#valores").show();
	});	
	$("#vision").click(function() {
		$("#div-mision").hide();
		$("#mision").show();
		$("#div-vision").show();
		$("#vision").hide();
		$("#div-valores").hide();
		$("#valores").show();
	});	
	$("#valores").click(function() {
		$("#div-mision").hide();
		$("#mision").show();
		$("#div-vision").hide();
		$("#vision").show();
		$("#div-valores").show();
		$("#valores").hide();
	});	
	});

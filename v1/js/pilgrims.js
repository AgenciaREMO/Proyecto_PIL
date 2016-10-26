/*Nosotros*/
$(document).ready(function(){
	$("#div-mision").show();
	$("#div-vision").hide();
	$("#div-valores").hide();


	$("#mision").click(function() {
		$("#div-mision").show();
		$("#div-vision").hide();
		$("#div-valores").hide();
	});	
	$("#vision").click(function() {
		$("#div-mision").hide();
		$("#div-vision").show();
		$("#div-valores").hide();
	});	
	$("#valores").click(function() {
		$("#div-mision").hide();
		$("#div-vision").hide();
		$("#div-valores").show();
	});	
	});

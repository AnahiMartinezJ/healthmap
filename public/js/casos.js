
$(document).ready(function() {

	$("#num-confirmados").keyup(function(){
		calculaSuma();
	});

	$("#num-probables").keyup(function(){
		calculaSuma();
	});

	$("#num-sospechosos").keyup(function(){
		calculaSuma();
	});
});

function calculaSuma(){

	var numconf = $("#num-confirmados").val();
	var numsos = $("#num-sospechosos").val();
	var numprob = $("#num-probables").val();

	var inumconf;
	var inumsos;
	var inumprob;
	var itotal;

	if(numconf==""){
		inumconf = 0;
	}else
	inumconf=numconf;

	if(numprob=="") {
		inumprob = 0;
	}
	else
		inumprob=numprob;

	if(numsos=="") {
		inumsos = 0;
	}else
	inumsos=numsos;

		itotal = parseInt(inumconf)+parseInt(inumprob)+parseInt(inumsos);
		$("#num-casos").val(itotal);

}
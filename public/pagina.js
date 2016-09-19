$(document).ready(function()
{
		$('#cargando').hide();
		$('#modalIS').modal('hide');
		$('#modalRU').modal('hide');

});

function mostrarInicioSesion()
{
	$('#modalIS').modal('show');
}

function mostrarRegistroUsuario()
{
	$('#modalRU').modal('show');
}
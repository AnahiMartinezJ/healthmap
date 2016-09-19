$(document).ready(function() {
    $('#h-tabla-usuarios').DataTable({
        "language": {
            "info": "Mostrando página _PAGE_ de un total de _PAGES_ páginas",
            "lengthMenu": "Motrar _MENU_ registros",
            "search": "Buscar",
            "infoFiltered": "(Filtrando de un total de _MAX_ registos)",
            "paginate": {
                 "next": "Siguiente",
                 "previous": "Anterior"
            }
          }
    });
    
    function prepara_modal(id){
        $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-primary" id="h-modal-guardar-cambios">Revocar autorización</button>').end();
        $('#h-modal').find('.modal-footer').find('#add-producto').val(id);
        $('#h-modal').find('.modal-title').html('Perfil de usuario');
        $('#h-modal').find('.modal-body').html($('#h-modal-ver-perfil').html());
        $.ajax({
            type: 'post',
            url: '/usuarios/' + id,
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                if(data.status == 'ok'){
                    $('#h-modal').find('.modal-body').html($('#h-modal-ver-perfil').html())
                        .find('#name').val(data.usuario.name).end()
                        .find('#apellido-paterno').val(data.usuario.apellido_paterno).end()
                        .find('#apellido-materno').val(data.usuario.apellido_materno).end()
                        .find('#titulo').val(data.usuario.titulo).end()
                        .find('#licenciatura').val(data.usuario.licenciatura).end()
                        .find('#especialidad').val(data.usuario.especialidad).end()
                        .find('#subespecialidad').val(data.usuario.subespecialidad).end()
                        .find('#cedula').val(data.usuario.cedula).end()
                        .find('#institucion-add').val(data.usuario.institucion_add).end()
                        .find('#ultimo-grado').val(data.usuario.ultimo_grado).end()
                        .find('#jerarquia').val(data.usuario.jerarquia).end()
                        .find('#fecha-nacimiento').val(data.usuario.fecha_nacimiento).end()
                        .find('#antiguedad').val(data.usuario.antiguedad).end()
                        .find('#email').val(data.usuario.email).end()
                    ;
                }
                else{
                    /*sweetAlert("Oops...", "Algo ha salido mal!", "error");*/
                }
            }
        });
    }
    
    $('#h-tabla-usuarios').off('click', '.h-estado-usuario').on('click', '.h-estado-usuario', function() {
        var o = $(this),
        id = o.parents('td:first').find('span:last').text();
        prepara_modal(id);
        $('#h-modal').modal();
    });
});
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
        $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>').end();
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
                    $('#h-modal').find('.modal-body').find('#boton-cambiar-jerarquia').val(id);
                    if(data.tipo_usuario == 1 && data.usuario.autorizado == 0){
                        $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-primary" id="h-boton-autorizar"' + ' value= "' + id + '">Autorizar usuario</button>').end();
                        $('#h-modal').find('.modal-title').html('Perfil de usuario ¡NO AUTORIZADO!');
                    }
                    else{
                        if(data.tipo_usuario == 1 && data.usuario.autorizado == 1){
                            $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-danger" id="h-boton-autorizar"' + ' value= "' + id + '">Revocar autorización</button>').end();
                            $('#h-modal').find('.modal-title').html('Perfil de usuario ¡AUTORIZADO!');
                        }
                        else{
                            if(data.tipo_usuario == 0 && data.usuario.autorizado == 0){
                                $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>').end();
                                $('#h-modal').find('.modal-title').html('Perfil de usuario ¡NO AUTORIZADO!');
                            }
                            else{
                                if(data.tipo_usuario == 0 && data.usuario.autorizado == 1){
                                    $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>').end();
                                    $('#h-modal').find('.modal-title').html('Perfil de usuario ¡AUTORIZADO!');
                                }
                            }
                        }
                    }
                }
                else{
                    /*sweetAlert("Oops...", "Algo ha salido mal!", "error");*/
                }
            }
        });
    }
    
    $('#h-modal').off('click', '#boton-cambiar-jerarquia').on('click', '#boton-cambiar-jerarquia', function() {
        swal({
            title: "¿Quiéres cambiar la jerarquía de este usuario?",
            text: "Puedes cambiarla en todo momento.",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn btn-primary",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        },
        function(){
            var data = {
                jerarquia:  $('#h-modal').find('#jerarquia').val()
            };
            $.ajax({
                url:   'usuarios/' + $('#h-modal').find('#h-boton-autorizar').val() + '/cambiar_jerarquia',
                type:  'post',
                dataType: 'json',
                data:   data,
                success:  function(data, textStatus, jqXHR) {
                    if(data.status == 'ok'){
                        swal("¡Listo!", data.mensaje, "success");
                    }
                    else{
                        sweetAlert("¡Error!", data.mensaje, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    sweetAlert("¡Error!", "ERROR", "error");
                },
                beforeSend: function(){
                },
                complete: function(){
                }
            });
        });
    });
    
    $('#h-modal').off('click', '#h-boton-autorizar').on('click', '#h-boton-autorizar', function() {
        swal({
            title: "¿Quieres cambiar el estado de autorización?",
            text: "Puedes cambiar este estado en todo momento.",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn btn-primary",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        },
        function(){
            $.ajax({
                url:   'usuarios/' + $('#h-modal').find('#h-boton-autorizar').val() + '/cambiar_autorizacion',
                type:  'post',
                dataType: 'json',
                success:  function(data, textStatus, jqXHR) {
                    if(data.status == 'ok'){
                        if(data.autorizado == 1){
                            $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-danger" id="h-boton-autorizar"' + ' value= "' + data.id + '">Revocar autorización</button>').end();
                            $('#h-modal').find('.modal-title').html('Perfil de usuario ¡AUTORIZADO!');
                            $('#h-estado-usuario' + data.id).attr('title', 'Ver Perfil').html('<i class="glyphicon glyphicon-check"></i>&nbsp;Perfil Autorizado').attr('style', 'cursor: pointer; color: lighblue;');
                        }
                        else{
                            $('#h-modal').find('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-primary" id="h-boton-autorizar"' + ' value= "' + data.id + '">Autorizar usuario</button>').end();
                            $('#h-modal').find('.modal-title').html('Perfil de usuario ¡NO AUTORIZADO!');
                            $('#h-estado-usuario' + data.id).attr('title', 'Perfil Pendiente').html('<i class="glyphicon glyphicon-unchecked"></i>&nbsp;Perfil Pendiente').attr('style', 'cursor: pointer; color: red;');
                        }
                        swal("¡Listo!", data.mensaje, "success");
                    }
                    else{
                        sweetAlert("¡Error!", data.mensaje, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    sweetAlert("¡Error!", "ERROR", "error");
                },
                beforeSend: function(){
                },
                complete: function(){
                }
            });
        });
    });
    
    $('#h-tabla-usuarios').off('click', '.h-estado-usuario').on('click', '.h-estado-usuario', function() {
        var o = $(this),
        id = o.parents('td:first').find('span:last').text();
        prepara_modal(id);
        $('#h-modal').modal();
    });
});
$(document).ready(function() {
    $('#h-tabla-log').DataTable({
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
});
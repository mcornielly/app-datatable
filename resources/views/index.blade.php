<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/fonts-icons.css">
    </head>
    <body>
        <div class="container">
            <table id="dtable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <th width="15px">Acciones</th>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </thead>
            </table>
        </div>

<!--     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->

    <script src="js/app.js"></script>
    <script>
        var spanish = {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
            },
            "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }

        $(document).ready(function() {
            $('#dtable').DataTable({
                "serverSide": true,
                "ajax": "{{ url('api/users')}}",
                "columns": [
                    {data: 'btn'},
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'}
                ],
                "language": spanish
            });
        });
    </script>    
    </body>
</html>

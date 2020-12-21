@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Mis redes sociales</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <table class="table table-hover" id="table-social">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Servicio</th>
                            <th>Precio</th>
                            <th>Descuento %</th>
                            <th width="160" class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $.noConflict();
    $(document).ready(function () {
        var table = $('#table-social').DataTable({
            language: {
                "decimal": "", "emptyTable": "No hay información", "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas", "infoEmpty": "Mostrando 0 to 0 of 0 Entradas", "infoFiltered": "(Filtrado de _MAX_ total entradas)", "infoPostFix": "", "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero", "last": "Ultimo", "next": "Siguiente", "previous": "Anterior"
                }
            },
            processing:true,
            serverSide:true,
            ajax:{
                url: "{{ route('influencers.index') }}"
            },
            columns:[
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'service'},
                {data: 'price'},
                {data: 'discount_promotion'},
                {data: 'action', orderable: false}
            ]
        })
    })
</script>
@endsection



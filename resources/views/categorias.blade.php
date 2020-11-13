@extends('menu')
@section('titulo', 'Teste - categorias')
@section('conteudo')
<div class="m-5">
    <div class="row">
        <div class="col-md-2">
            <input type="button" id="new" value="Nova categoria" class="btn btn-primary" onclick="window.location = '/categorias/create'">
        </div>
    </div>
    <br />
    <table class="table-striped" style="width: 100%" id="tab_categorias">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script>
    $(document).ready(function(){
        var myTable = $("#tab_categorias").DataTable({
            dom: 'Bfrtip',
            responsive: true,
    	    bDeferRender: true,
            ajax: {
                url: '{{ route("categorias.show") }}',
                dataSrc: ''
            },
            columnDefs: [
    		    {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [ 3 ],
                    "data": null,
                    "defaultContent": "<button class='btn btn-danger'>Excluir</button>"
                }
            ],
            columns: [
    			{ "data": "id" },
    			{ "data": "nome" },
                { "data": "descricao" }
    		],
            buttons: [
                'excelHtml5'
            ],
        });

        $('#tab_categorias').on( 'dblclick', 'tbody tr', function(){
            let id = myTable.row( this ).data().id;
            window.location.href = "{{ route('categorias.show.one') }}";
        });

        $('#tab_categorias tbody').on('click', 'button', function (){
            let data = myTable.row( $(this).parents('tr') ).data();
            
            $.ajax({

            });
        });
    });
</script>
@stop

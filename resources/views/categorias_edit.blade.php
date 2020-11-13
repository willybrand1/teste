@extends('menu')
@section('titulo', 'Teste - categorias')
@section('conteudo')
<div class="m-5">
    <form action="/categorias/update" method="POST">
        <input type="hidden" name="id" id="id" value="{{ $model->id }}" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $model->nome }}" />
                </div>
            </div>
            <div class="col-md-6">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $model->descricao }}" />
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="Atualizar"/>
                <input type="button" class="btn btn-primary ml-2" value="Voltar" onclick="window.location = '/categorias'">
            </div>
        </div>
    </form>
</div>
@stop
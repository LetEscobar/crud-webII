@extends('layouts.app')
@section('body')
<h1 class="mb-0">Cadastrar Produto</h1>
<hr />
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nome" class="form-control" placeholder="Nome do produto">
        </div>
        <div class="col">
            <textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
        </div>
        <div class="col">
            <input type="number" name="preco" class="form-control" step="0.01" placeholder="Preço">
        </div>
        <div class="col">
            <input type="number" name="quantidade" class="form-control" placeholder="Quantidade no estoque">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>
@endsection
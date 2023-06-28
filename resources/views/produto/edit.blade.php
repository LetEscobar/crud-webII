@extends('layouts.app')
@section('body')
<h1 class="mb-0">Editar dados do produto</h1>
<hr />
<form action="{{ route('produtos.update', $produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome do produto" value="{{ $produto->nome }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" placeholder="Descrição">{{ $produto->descricao }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Preço</label>
            <input type="number" name="preco" class="form-control" step="0.01" placeholder="Preço" value="{{ $produto->preco }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" placeholder="Quantidade no estoque" value="{{ $produto->quantidade }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Alterar</button>
        </div>
    </div>
</form>
@endsection
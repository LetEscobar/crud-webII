@extends('layouts.app')
@section('body')
<h1 class="mb-0">Detalhes do produto</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome do produto" value="{{ $produto->nome }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Descrição</label>
        <textarea class="form-control" name="descricao" placeholder="Descrição" readonly>{{ $produto->descricao }}</textarea>
    </div>
    <div class="col mb-3">
        <label class="form-label">Preço</label>
        <input type="number" name="preco" class="form-control" step="0.01" placeholder="Preço" value="{{ $produto->preco }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Quantidade</label>
        <input type="number" name="quantidade" class="form-control" placeholder="Quantidade no estoque" value="{{ $produto->quantidade }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Cadastrado em:</label>
        <input type="text" name="created_at" class="form-control" placeholder="Cadastrado em:" value="{{ $produto->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Atualizado em:</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Atualizado em:" value="{{ $produto->updated_at }}" readonly>
    </div>
</div>
@endsection
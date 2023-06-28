@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Lista de produtos</h1>
    <a href="{{ route('produtos.create') }}" class="btn btn-success">Cadastrar Produto</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-bordered table-hover table-responsive">
    <thead class="table-info">
        <tr>
            <th class="text-center">Código</th>
            <th class="text-center">Produto</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">Preço</th>
            <th class="text-center">Descrição</th>
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @if($produto->count() > 0)
        @foreach($produto as $rs)
        <tr>
            <td class="align-middle text-center">{{ $loop->iteration }}</td>
            <td class="align-middle text-center">{{ $rs->nome }}</td>
            <td class="align-middle text-center">{{ $rs->quantidade }}</td>
            <td class="align-middle text-center">{{ number_format($rs->preco, 2, ',', '.') }}</td>
            <td class="align-middle text-center">{{ $rs->descricao }}</td>
            <td class="align-middle text-center">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('produtos.show', $rs->id) }}" type="button" class="btn btn-secondary">Ver detalhes</a>
                    <a href="{{ route('produtos.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                    <form action="{{ route('produtos.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Excluir?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Excluir</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Produto não encontrado!</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection
@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Produtos</h1>
    <div class="text-right">
        <a href="{{ route('products.create') }}"
        class="btn btn-primary mb-5">Adicionar Produto</a>
    </div>
<div class="table-responsive">
<table class="table table-striped"> 
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Ação</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->category->description }}</td>
        <td><a href="{{ route('products.edit', $product->id) }}" 
            class="btn btn-warning">Editar</a>
        <form style="display: inline;" action="{{ route('products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Tem certeza que deseja excluir essa categoria?')">
                Excluir
            </button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection


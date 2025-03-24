@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Produto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">            
            <label for="name">Nome</label>
            <input type="text" class="form-control"
            name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control"
            name="description" value="{{ $product->description }}">
        </div>
        <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" class="form-control"
            name="price" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection


